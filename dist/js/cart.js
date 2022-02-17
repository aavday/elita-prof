"use strict";

$(document).ready(function () {
  /* инициализация корзины */
  var currentCartItemsJSON = localStorage.getItem('elitaProfCartItems');
  var cartLoader = document.querySelector('.cart .loader');
  var cartItemsBlock = document.querySelector('.cart-items');
  var cartIcon = document.querySelector('.cart-icon');

  if (currentCartItemsJSON && currentCartItemsJSON !== '[]') {
    $.ajax({
      url: '/ajax/cart/getItemsData.php',
      type: 'POST',
      data: "items=".concat(currentCartItemsJSON),
      success: function success(response) {
        response = JSON.parse(response);
        var itemsHTML = '';
        response.forEach(function (item) {
          itemsHTML += "\n                        <div class=\"cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex flex-lg-row flex-column justify-content-between align-items-center\" id=\"item-".concat(item.ID, "\">\n                            <div class=\"d-flex align-items-center flex-sm-row flex-column\">\n                                <img src=\"").concat(item.PREVIEW_PICTURE_SRC, "\" alt=\"").concat(item.NAME, "\" class=\"cart-item__img my-2\">\n                                <a href=\"").concat(item.DETAIL_PAGE_URL, "\" class=\"cart-item__name fw-bold fs-big ms-4 my-2\">").concat(item.NAME, "</a>\n                            </div>\n                            <div class=\"d-flex align-items-center my-2\">\n                                <label for=\"item-").concat(item.ID, "-quantity\">\u041A\u043E\u043B-\u0432\u043E:</label>\n                                <input type=\"number\" value=\"").concat(item.QUANTITY, "\" class=\"catalog-item__quantity rounded shadow border-purple-dark mx-2\" id=\"item-").concat(item.ID, "-quantity\" title=\"\u0417\u0430\u0434\u0430\u0439\u0442\u0435 \u043D\u0443\u0436\u043D\u043E\u0435 \u043A\u043E\u043B\u0438\u0447\u0435\u0441\u0442\u0432\u043E \u0434\u0430\u043D\u043D\u043E\u0433\u043E \u0442\u043E\u0432\u0430\u0440\u0430 \u0438 \u0434\u043E\u0431\u0430\u0432\u044C\u0442\u0435 \u0432 \u043A\u043E\u0440\u0437\u0438\u043D\u0443\" data-itemId=\"").concat(item.ID, "\">\n                            ");
          if (item.PROPERTY_PRICE_VALUE !== null) itemsHTML += "<span class=\"cart-item__price justify-self-end me-4\">\u041E\u0442 <b>".concat(item.PROPERTY_PRICE_VALUE, " \u0440.</b></span>");
          itemsHTML += "<span class=\"cart-item__delete\" data-itemId=\"".concat(item.ID, "\"></span>\n                            </div>\n                        </div>\n                    ");
        });
        cartItemsBlock.innerHTML = itemsHTML;
        cartLoader.classList.add('d-none');
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
            localStorage.setItem('elitaProfCartItems', JSON.stringify(currentCartItems));
          });
        });
        var cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');
        var currentCartItems = JSON.parse(currentCartItemsJSON);
        cartItemsDeleteBtns.forEach(function (btn) {
          btn.addEventListener('click', function () {
            var itemId = btn.getAttribute('data-itemId');
            currentCartItems.forEach(function (item, index) {
              if (item.id === itemId) {
                currentCartItems.splice(index, 1);
              }
            });
            localStorage.setItem('elitaProfCartItems', JSON.stringify(currentCartItems));

            if (currentCartItems) {
              cartLoader.classList.add('d-none');
              document.querySelector('.cart__empty-text').classList.remove('d-none');
              cartIcon.classList.add('d-none');
            }

            document.querySelector("#item-".concat(itemId)).remove();
          });
        });
      },
      error: function error(jqXhr, err) {
        console.log(jqXhr, err);
      }
    });
  } else {
    cartLoader.classList.add('d-none');
    document.querySelector('.cart__empty-text').classList.remove('d-none');
  }
});