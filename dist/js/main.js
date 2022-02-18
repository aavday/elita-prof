"use strict";

$(document).ready(function () {
  /* инициализация слайдеров */
  $('.owl-carousel').each(function () {
    var parameters = $(this).data();
    $(this).owlCarousel(parameters);
    $('#' + $(this).attr('id') + ' .owl-prev').click(function () {
      $(this).trigger('stop.owl.autoplay');
    });
    $('#' + $(this).attr('id') + ' .owl-next').click(function () {
      $(this).trigger('stop.owl.autoplay');
    });
    $('#' + $(this).attr('id') + ' .owl-dot').click(function () {
      $(this).trigger('stop.owl.autoplay');
    });
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
        form.text(form.attr('data-successText'));

        if (form.prop('id') === 'cart__place-order') {
          document.querySelector('.cart-icon').classList.add('d-none');
          document.querySelector('.cart-items').innerHTML = '';
          localStorage.removeItem('cartItems');
        }
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
  var cartIcon = document.querySelector('.cart-icon');

  var reloadCartIcon = function reloadCartIcon(amountOfItems) {
    if (amountOfItems) {
      cartIcon.classList.remove('d-none');
      cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
    } else {
      cartIcon.classList.add('d-none');
    }
  };

  if (currentCartItems) reloadCartIcon(currentCartItems.length);
});