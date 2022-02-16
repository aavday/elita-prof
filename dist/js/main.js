"use strict";

$(document).ready(function () {
  /* инициализация слайдеров */
  $('.owl-carousel').each(function () {
    var parameters = $(this).data();
    $(this).owlCarousel(parameters);
  });
  /* инициализация масок */

  $('.js-mask').each(function () {
    $(this).mask($(this).data()['mask']['mask']);
  });
  /* обработка форм */

  $('form.ajax-form').on('submit', function (e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
      url: form.attr('data-handlerUrl'),
      type: 'POST',
      data: form.serialize(),
      dataType: 'json',
      success: function success(response) {
        console.log(response);
        form.text('Спасибо! Форма отправлена');
      },
      error: function error(jqXhr, err) {
        console.log(jqXhr, err);
      }
    });
  });
  /* мобильное меню */

  var mobileNavToggler = document.querySelector('.header-mob__nav-toggle');
  mobileNavToggler.addEventListener('click', function () {
    var header = document.querySelector('.header');
    header.classList.toggle('active');
  });
  /* табы для блога на главной */

  var blogThumbs = document.querySelectorAll('.blog-main__right-item');

  if (blogThumbs) {
    blogThumbs.forEach(function (thumb) {
      thumb.addEventListener('click', function () {
        var blogItems = document.querySelectorAll('.blog-main__left-item');
        blogItems.forEach(function (item) {
          return item.classList.remove('active');
        });
        var blogItemToOpen = document.querySelector("#".concat(thumb.getAttribute('data-blog-item')));
        blogItemToOpen.classList.add('active');
        blogThumbs.forEach(function (item) {
          return item.classList.remove('active');
        });
        thumb.classList.add('active');
      });
    });
  }
  /* добавление товаров в корзину */


  var currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
  var addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');
  var itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');

  var reloadCartIcon = function reloadCartIcon(amountOfItems) {
    var cartIcon = document.querySelector('.cart-icon');

    if (amountOfItems) {
      cartIcon.classList.remove('d-none');
      cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
    } else {
      cartIcon.classList.add('d-none');
    }
  };

  if (currentCartItems) {
    reloadCartIcon(currentCartItems.length);
    itemQuantityInputs.forEach(function (input) {
      currentCartItems.forEach(function (item) {
        if (input.getAttribute('data-itemId') === item.id) {
          input.value = item.quantity;
        }
      });
    });
  }

  if (addToCartBtns && itemQuantityInputs) {
    addToCartBtns.forEach(function (btn) {
      var itemId = btn.getAttribute('data-itemId');

      if (currentCartItems) {
        currentCartItems.forEach(function (item) {
          if (item.id === itemId) {
            btn.classList.add('added');
            btn.setAttribute('title', 'Нажмите, чтобы убрать товар из корзины');
            btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
          }
        });
      }

      btn.addEventListener('click', function (e) {
        e.preventDefault();

        if (btn.classList.contains('added')) {
          btn.setAttribute('title', 'Нажмите, чтобы добавить товар в корзину');
          btn.innerHTML = '<i class="fas fa-cart-arrow-down me-2"></i>В корзину';
          currentCartItems.forEach(function (item, index) {
            if (item.id === itemId) {
              currentCartItems.splice(index, 1);
              document.querySelector("#item-".concat(itemId, "-quantity")).value = 1;
            }
          });
        } else {
          btn.setAttribute('title', 'Нажмите, чтобы убрать товар из корзины');
          btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
          if (!currentCartItems) currentCartItems = [];
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

        btn.classList.toggle('added');
        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
        reloadCartIcon(currentCartItems.length);
      });
    });
    itemQuantityInputs.forEach(function (input) {
      input.addEventListener('change', function () {
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
        }

        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
      });
    });
  }
});