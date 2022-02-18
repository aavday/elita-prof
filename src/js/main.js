$(document).ready(function () {
    /* инициализация слайдеров */

    $('.owl-carousel').each(function() {
        const parameters = $(this).data();
        $(this).owlCarousel(parameters);
        console.log('#' + $(this).attr('id') + ' .owl-prev');
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
                console.log(response);
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

    let currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
    const addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');
    const itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');

    const reloadCartIcon = (amountOfItems) => {
        const cartIcon = document.querySelector('.cart-icon');

        if (amountOfItems) {
            cartIcon.classList.remove('d-none');
            cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
        } else {
            cartIcon.classList.add('d-none');
        }
    }

    const refreshBtnsAndInputs = () => {
        currentCartItems = JSON.parse(localStorage.getItem('cartItems'));

        addToCartBtns.forEach(btn => {
            const itemId = btn.getAttribute('data-itemId');

            if (currentCartItems && currentCartItems.length !== 0) {
                let isInArray = false;

                currentCartItems.forEach(item => {
                    if (item.id === itemId) isInArray = true;
                })

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
        })

        itemQuantityInputs.forEach(input => {
            if (currentCartItems && currentCartItems.length !== 0) {
                let isInArray = false;

                currentCartItems.forEach(item => {
                    if (input.getAttribute('data-itemId') === item.id) {
                        input.title = 'Вы можете изменить количество данного товара и изменения отобразятся в корзине';
                        input.value = item.quantity
                        isInArray = true;
                    }
                })

                if (!isInArray) {
                    input.title = 'Задайте нужное количество данного товара и добавьте в корзину';
                    input.value = 1;
                }
            } else {
                input.title = 'Задайте нужное количество данного товара и добавьте в корзину';
                input.value = 1;
            }
        })
    }

    if (currentCartItems) reloadCartIcon(currentCartItems.length);

    if (addToCartBtns && itemQuantityInputs) {
        refreshBtnsAndInputs();

        addToCartBtns.forEach(btn => {
            const itemId = btn.getAttribute('data-itemId');

            btn.addEventListener('click', () => {
                currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
                if (!currentCartItems) currentCartItems = [];

                if (btn.classList.contains('added')) {
                    currentCartItems.forEach((item, index) => {
                        if (item.id === itemId) {
                            currentCartItems.splice(index, 1);
                            document.querySelector(`#item-${itemId}-quantity`).value = 1;
                        }
                    })
                } else {
                    let isDuplicate = false;

                    currentCartItems.forEach(item => {
                        if (item.id === itemId) {
                            isDuplicate = true;
                        }
                    })

                    if (!isDuplicate) {
                        currentCartItems.push({
                            id: itemId,
                            quantity: document.querySelector(`#item-${itemId}-quantity`).value
                        });
                    }
                }

                localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
                reloadCartIcon(currentCartItems.length);
                refreshBtnsAndInputs();
            })
        })

        itemQuantityInputs.forEach(input => {
            input.addEventListener('change', () => {
                currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
                if (!currentCartItems) currentCartItems = [];

                const itemId = input.getAttribute('data-itemId');
                const addToCartBtn = document.querySelector(`.catalog-item__add-to-cart-btn[data-itemId="${itemId}"]`);
                if (addToCartBtn.classList.contains('added')) {
                    currentCartItems.forEach((item, index) => {
                        if (item.id === itemId) {
                            currentCartItems[index] = {
                                id: itemId,
                                quantity: input.value
                            }
                        }
                    })

                    localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
                    reloadCartIcon(currentCartItems.length);
                    refreshBtnsAndInputs();
                }
            })
        })
    }
})