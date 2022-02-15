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
        var blogItemToOpen = document.querySelector('#' + thumb.getAttribute('data-blog-item'));
        blogItemToOpen.classList.add('active');
        blogThumbs.forEach(function (item) {
          return item.classList.remove('active');
        });
        thumb.classList.add('active');
      });
    });
  }
  /* добавление товаров в корзину */


  var reloadCartIcon = function reloadCartIcon(amountOfItems) {
    var cartIcon = document.querySelector('.cart-icon');

    if (amountOfItems) {
      cartIcon.classList.remove('d-none');
      cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
    } else {
      cartIcon.classList.add('d-none');
    }
  };

  var currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
  if (currentCartItems) reloadCartIcon(currentCartItems.length);
  var addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');

  if (addToCartBtns) {
    addToCartBtns.forEach(function (btn) {
      var itemId = btn.getAttribute('data-itemId');

      if (currentCartItems) {
        currentCartItems.forEach(function (item) {
          if (item === itemId) {
            btn.classList.add('added');
            btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
          }
        });
      }

      btn.addEventListener('click', function (e) {
        e.preventDefault();

        if (btn.classList.contains('added')) {
          btn.innerHTML = '<i class="fas fa-cart-arrow-down me-2"></i>В корзину';
          currentCartItems.forEach(function (item, index) {
            if (item === itemId) {
              currentCartItems.splice(index, 1);
            }
          });
        } else {
          btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
          if (!currentCartItems) currentCartItems = [];
          var isDuplicate = false;
          currentCartItems.forEach(function (item) {
            if (item === itemId) {
              isDuplicate = true;
            }
          });
          if (!isDuplicate) currentCartItems.push(itemId);
        }

        btn.classList.toggle('added');
        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
        reloadCartIcon(currentCartItems.length);
        console.log(localStorage.getItem('cartItems'));
      });
    });
  }
});