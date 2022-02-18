"use strict";

$(document).ready(function () {
  var currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
  var addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');
  var itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');
  var cartIcon = document.querySelector('.cart-icon');

  var reloadCartIcon = function reloadCartIcon(amountOfItems) {
    if (amountOfItems) {
      cartIcon.classList.remove('d-none');
      cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
    } else {
      cartIcon.classList.add('d-none');
    }
  };

  var refreshBtnsAndInputs = function refreshBtnsAndInputs() {
    currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
    addToCartBtns.forEach(function (btn) {
      var itemId = btn.getAttribute('data-itemId');

      if (currentCartItems && currentCartItems.length !== 0) {
        var isInArray = false;
        currentCartItems.forEach(function (item) {
          if (item.id === itemId) isInArray = true;
        });

        if (isInArray) {
          btn.classList.add('added');
          btn.setAttribute('title', 'Нажмите, чтобы убрать товар из корзины');
          btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
        } else {
          btn.classList.remove('added');
          btn.setAttribute('title', 'Нажмите, чтобы добавить товар в корзину');
          btn.innerHTML = '<i class="fas fa-cart-arrow-down me-2"></i>В корзину';
        }
      } else {
        btn.classList.remove('added');
        btn.setAttribute('title', 'Нажмите, чтобы добавить товар в корзину');
        btn.innerHTML = '<i class="fas fa-cart-arrow-down me-2"></i>В корзину';
      }
    });
    itemQuantityInputs.forEach(function (input) {
      if (currentCartItems && currentCartItems.length !== 0) {
        var isInArray = false;
        currentCartItems.forEach(function (item) {
          if (input.getAttribute('data-itemId') === item.id) {
            input.title = 'Вы можете изменить количество данного товара и изменения отобразятся в корзине';
            input.value = item.quantity;
            isInArray = true;
          }
        });

        if (!isInArray) {
          input.title = 'Задайте нужное количество данного товара и добавьте в корзину';
          input.value = 1;
        }
      } else {
        input.title = 'Задайте нужное количество данного товара и добавьте в корзину';
        input.value = 1;
      }
    });
  };

  if (addToCartBtns && itemQuantityInputs) {
    refreshBtnsAndInputs();
    addToCartBtns.forEach(function (btn) {
      var itemId = btn.getAttribute('data-itemId');
      btn.addEventListener('click', function () {
        currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
        if (!currentCartItems) currentCartItems = [];

        if (btn.classList.contains('added')) {
          currentCartItems.forEach(function (item, index) {
            if (item.id === itemId) {
              currentCartItems.splice(index, 1);
              document.querySelector("#item-".concat(itemId, "-quantity")).value = 1;
            }
          });
        } else {
          var isDuplicate = false;
          currentCartItems.forEach(function (item) {
            if (item.id === itemId) {
              isDuplicate = true;
            }
          });

          if (!isDuplicate) {
            currentCartItems.push({
              id: itemId,
              quantity: document.querySelector("#item-".concat(itemId, "-quantity")).value
            });
          }
        }

        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
        reloadCartIcon(currentCartItems.length);
        refreshBtnsAndInputs();
      });
    });
    itemQuantityInputs.forEach(function (input) {
      input.addEventListener('change', function () {
        currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
        if (!currentCartItems) currentCartItems = [];
        var itemId = input.getAttribute('data-itemId');
        var addToCartBtn = document.querySelector(".catalog-item__add-to-cart-btn[data-itemId=\"".concat(itemId, "\"]"));

        if (addToCartBtn.classList.contains('added')) {
          currentCartItems.forEach(function (item, index) {
            if (item.id === itemId) {
              currentCartItems[index] = {
                id: itemId,
                quantity: input.value
              };
            }
          });
          localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
          reloadCartIcon(currentCartItems.length);
          refreshBtnsAndInputs();
        }
      });
    });
  }
});