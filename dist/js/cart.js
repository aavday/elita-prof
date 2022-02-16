"use strict";

$(document).ready(function () {
  /* инициализация корзины */
  var currentCartItemsJSON = localStorage.getItem('cartItems');
  var cartLoader = document.querySelector('.cart .loader');
  var cartItemsBlock = document.querySelector('.cart-items');

  if (currentCartItemsJSON) {
    $.ajax({
      url: '/ajax/cart/getItemsData.php',
      type: 'POST',
      data: 'items=' + currentCartItemsJSON,
      success: function success(response) {
        response = JSON.parse(response);
        console.log(response);
        var itemsHTML = '';
        response.forEach(function (item) {
          itemsHTML += "\n                        <div class=\"cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex justify-content-between align-items-center\" id=\"".concat(item.ID, "\">\n                            <div class=\"d-flex align-items-center\">\n                                <img src=\"").concat(item.PREVIEW_PICTURE_SRC, "\" alt=\"").concat(item.NAME, "\" class=\"cart-item__img\">\n                                <a href=\"").concat(item.DETAIL_PAGE_URL, "\" class=\"cart-item__name fw-bold fs-big ms-4\">").concat(item.NAME, "</a>\n                            </div>\n                            <div class=\"d-flex align-items-center\">\n                            ");
          if (item.PROPERTY_PRICE_VALUE !== null) itemsHTML += "<span class=\"cart-item__price justify-self-end me-4\">\u041E\u0442 <b>".concat(item.PROPERTY_PRICE_VALUE, " \u0440.</b></span>");
          itemsHTML += "<span class=\"cart-item__delete\" data-itemId=\"".concat(item.ID, "\"></span>\n                            </div>\n                        </div>\n                    ");
        });
        cartItemsBlock.innerHTML = itemsHTML;
        cartLoader.classList.add('d-none');
      },
      error: function error(jqXhr, err) {
        console.log(jqXhr, err);
      }
    });
    var cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');
    var currentCartItems = JSON.parse(currentCartItemsJSON);
    cartItemsDeleteBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        console.log('test');
        var itemId = btn.getAttribute('data-itemId');
        currentCartItems.forEach(function (item, index) {
          if (item === itemId) {
            currentCartItems.splice(index, 1);
          }
        });
        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
        document.querySelector('#' + itemId).remove();
      });
    });
  } else {
    cartLoader.classList.add('d-none');
    document.querySelector('.cart__empty-text').classList.remove('d-none');
  }
});