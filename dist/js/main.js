$(document).ready(function () {
    /* инициализация слайдеров */

    $('.owl-carousel').each(function() {
        const parameters = $(this).data();
        $(this).owlCarousel(parameters);
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
                console.log(response);
                form.text('Спасибо! Форма отправлена')
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
                const blogItemToOpen = document.querySelector('#' + thumb.getAttribute('data-blog-item'));
                blogItemToOpen.classList.add('active');
                blogThumbs.forEach(item => item.classList.remove('active'));
                thumb.classList.add('active');
            })
        })
    }

    /* добавление товаров в корзину */

    const reloadCartIcon = (amountOfItems) => {
        const cartIcon = document.querySelector('.cart-icon');

        if (amountOfItems) {
            cartIcon.classList.remove('d-none');
            cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
        } else {
            cartIcon.classList.add('d-none');
        }
    }

    let currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
    if (currentCartItems) reloadCartIcon(currentCartItems.length);

    const addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');

    if (addToCartBtns) {
        addToCartBtns.forEach(btn => {
            const itemId = btn.getAttribute('data-itemId');

            if (currentCartItems) {
                currentCartItems.forEach(item => {
                    if (item === itemId) {
                        btn.classList.add('added');
                        btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
                    }
                })
            }

            btn.addEventListener('click', e => {
                e.preventDefault();

                if (btn.classList.contains('added')) {
                    btn.innerHTML = '<i class="fas fa-cart-arrow-down me-2"></i>В корзину';
                    currentCartItems.forEach((item, index) => {
                        if (item === itemId) {
                            currentCartItems.splice(index, 1)
                        }
                    })
                } else {
                    btn.innerHTML = '<i class="fa-solid fa-check me-2"></i>В корзине';
                    if (!currentCartItems) currentCartItems = [];
                    let isDuplicate = false;

                    currentCartItems.forEach(item => {
                        if (item === itemId) {
                            isDuplicate = true;
                        }
                    })

                    if (!isDuplicate) currentCartItems.push(itemId);
                }

                btn.classList.toggle('added');

                localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
                reloadCartIcon(currentCartItems.length);

                console.log(localStorage.getItem('cartItems'));
            })
        })
    }
})