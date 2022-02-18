$(document).ready(function () {
    /* инициализация слайдеров */

    $('.owl-carousel').each(function() {
        const parameters = $(this).data();
        $(this).owlCarousel(parameters);

        $('#' + $(this).attr('id') + ' .owl-prev').click(function() {
            $(this).trigger('stop.owl.autoplay');
        })
        $('#' + $(this).attr('id') + ' .owl-next').click(function() {
            $(this).trigger('stop.owl.autoplay');
        })
        $('#' + $(this).attr('id') + ' .owl-dot').click(function() {
            $(this).trigger('stop.owl.autoplay');
        })
    })

    /* инициализация масок */

    $('.js-mask').each(function() {
        $(this).mask(($(this).data()['mask']['mask']));
    })

    /* обработка форм */

    $('form.ajax-form').on('submit', function (e) {
        e.preventDefault();
        const form = $(this);

        $.ajax({
            url: form.attr('data-handlerUrl'),
            type: 'POST',
            data: form.serialize(),
            dataType: 'json',
            success: function (response) {
                form.text(form.attr('data-successText'))

                if (form.prop('id') === 'cart__place-order') {
                    document.querySelector('.cart-icon').classList.add('d-none');
                    document.querySelector('.cart-items').innerHTML = '';
                    localStorage.removeItem('cartItems');
                }
            },
            error: function (jqXhr, err) {
                console.log(jqXhr, err);
            }
        })
    })

    /* мобильное меню */

    const mobileNavToggler = document.querySelector('.header-mob__nav-toggle');
    mobileNavToggler.addEventListener('click', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('active');
    })

    /* табы для блога на главной */

    const blogThumbs = document.querySelectorAll('.blog-main__right-item');
    if (blogThumbs) {
        blogThumbs.forEach(thumb => {
            thumb.addEventListener('click', () => {
                const blogItems = document.querySelectorAll('.blog-main__left-item');
                blogItems.forEach(item => item.classList.remove('active'));
                const blogItemToOpen = document.querySelector(`#${thumb.getAttribute('data-blog-item')}`);
                blogItemToOpen.classList.add('active');
                blogThumbs.forEach(item => item.classList.remove('active'));
                thumb.classList.add('active');
            })
        })
    }

    /* добавление товаров в корзину */

    const currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
    const cartIcon = document.querySelector('.cart-icon');

    const reloadCartIcon = amountOfItems => {
        if (amountOfItems) {
            cartIcon.classList.remove('d-none');
            cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
        } else {
            cartIcon.classList.add('d-none');
        }
    }

    if (currentCartItems) reloadCartIcon(currentCartItems.length);
})