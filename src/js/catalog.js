$(document).ready(function () {
    let currentCartItems = JSON.parse(localStorage.getItem('cartItems'));
    const addToCartBtns = document.querySelectorAll('.catalog-item__add-to-cart-btn');
    const itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');
    const cartIcon = document.querySelector('.cart-icon');

    const reloadCartIcon = amountOfItems => {
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