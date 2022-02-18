"use strict";

$(document).ready(function () {
  /* инициализация корзины */
  var currentCartItemsJSON = localStorage.getItem('cartItems');
  var cartLoader = document.querySelector('.cart .loader');
  var cartItemsBlock = document.querySelector('.cart-items');
  var cartIcon = document.querySelector('.cart-icon');
  var cartPlaceOrderForm = document.querySelector('#cart__place-order');
  var cartItemsDataTextarea = document.querySelector('#cart__place-order__items-data');
  var cartEmptyText = document.querySelector('.cart__empty-text');

  if (currentCartItemsJSON && currentCartItemsJSON !== '[]') {
    var currentCartItems = JSON.parse(currentCartItemsJSON);
    $.ajax({
      url: '/ajax/cart/getItemsData.php',
      type: 'POST',
      data: "items=".concat(currentCartItemsJSON),
      success: function success(response) {
        response = JSON.parse(response);
        var itemsHTML = '';

        if (response && response.length !== 0) {
          response.forEach(function (item) {
            itemsHTML += "\n                        <div class=\"cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex flex-lg-row flex-column justify-content-between align-items-center\" id=\"item-".concat(item.ID, "\">\n                            <div class=\"d-flex align-items-center flex-sm-row flex-column\">\n                                <img src=\"").concat(item.PREVIEW_PICTURE_SRC, "\" alt=\"").concat(item.NAME, "\" class=\"cart-item__img my-2\">\n                                <a href=\"").concat(item.DETAIL_PAGE_URL, "\" class=\"cart-item__name fw-bold fs-big ms-4 my-2\">").concat(item.NAME, "</a>\n                            </div>\n                            <div class=\"d-flex align-items-center my-2\">\n                                <label for=\"item-").concat(item.ID, "-quantity\">\u041A\u043E\u043B-\u0432\u043E:</label>\n                                <input type=\"number\" value=\"").concat(item.QUANTITY, "\" class=\"catalog-item__quantity rounded shadow border-purple-dark mx-2\" id=\"item-").concat(item.ID, "-quantity\" title=\"\u0412\u044B \u043C\u043E\u0436\u0435\u0442\u0435 \u0438\u0437\u043C\u0435\u043D\u0438\u0442\u044C \u043A\u043E\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u0434\u0430\u043D\u043D\u043E\u0433\u043E \u0442\u043E\u0432\u0430\u0440\u0430\" data-itemId=\"").concat(item.ID, "\">\n                            ");
            if (item.PROPERTY_PRICE_VALUE !== null) itemsHTML += "<span class=\"cart-item__price justify-self-end me-4\">\u041E\u0442 <b class=\"cart-item__price-value\">".concat(item.PROPERTY_PRICE_VALUE, "</b> \u0440.</span>");
            itemsHTML += "<span class=\"cart-item__delete\" data-itemId=\"".concat(item.ID, "\"></span>\n                            </div>\n                        </div>\n                    ");
          });
          cartItemsBlock.innerHTML = itemsHTML;
          cartPlaceOrderForm.classList.remove('d-none');
          updateCartItemsTextarea();
          var itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');
          itemQuantityInputs.forEach(function (input) {
            input.addEventListener('change', function () {
              var itemId = input.getAttribute('data-itemId');
              currentCartItems.forEach(function (item, index) {
                if (item.id === itemId) {
                  currentCartItems[index] = {
                    id: itemId,
                    quantity: input.value
                  };
                }
              });
              localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
              updateCartItemsTextarea();
            });
          });
          var cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');
          cartItemsDeleteBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
              var itemId = btn.getAttribute('data-itemId');
              currentCartItems.forEach(function (item, index) {
                if (item.id === itemId) {
                  currentCartItems.splice(index, 1);
                }
              });
              localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
              reloadCartIcon(currentCartItems.length);
              updateCartItemsTextarea();

              if (currentCartItems.length === 0) {
                document.querySelector('.cart__empty-text').classList.remove('d-none');
                cartPlaceOrderForm.classList.add('d-none');
                cartIcon.classList.add('d-none');
              }

              document.querySelector("#item-".concat(itemId)).remove();
            });
          });
        } else {
          cartEmptyText.classList.remove('d-none');
        }

        cartLoader.classList.add('d-none');
      },
      error: function error(jqXhr, err) {
        console.log(jqXhr, err);
      }
    });

    var updateCartItemsTextarea = function updateCartItemsTextarea() {
      cartItemsDataTextarea.value = '<br><br>';
      currentCartItems.forEach(function (item, index) {
        var itemElement = document.querySelector("#item-".concat(item.id));
        var itemName = itemElement.querySelector('.cart-item__name').innerHTML;
        cartItemsDataTextarea.value += "".concat(index + 1, ". <b>\u041D\u0430\u0437\u0432.:</b> ").concat(itemName, ", <b>\u041A\u043E\u043B-\u0432\u043E:</b> ").concat(item.quantity);
        var itemPrice = itemElement.querySelector('.cart-item__price').innerHTML;

        if (itemPrice) {
          cartItemsDataTextarea.value += " <b>\u0426\u0435\u043D\u0430 \u0437\u0430 \u0448\u0442.:</b> ".concat(itemPrice, " <br><br>");
        } else {
          cartItemsDataTextarea.value += '<br><br>';
        }
      });
    };

    var reloadCartIcon = function reloadCartIcon(amountOfItems) {
      var cartIcon = document.querySelector('.cart-icon');

      if (amountOfItems) {
        cartIcon.classList.remove('d-none');
        cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
      } else {
        cartIcon.classList.add('d-none');
      }
    };
  } else {
    cartLoader.classList.add('d-none');
    cartEmptyText.classList.remove('d-none');
  }
});