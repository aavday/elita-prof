$(document).ready(function () {
    /* инициализация корзины */

    const currentCartItemsJSON = localStorage.getItem('cartItems');
    const cartLoader = document.querySelector('.cart .loader');
    const cartItemsBlock = document.querySelector('.cart-items');
    const cartIcon = document.querySelector('.cart-icon');
    const cartPlaceOrderForm = document.querySelector('#cart__place-order');
    const cartItemsDataTextarea = document.querySelector('#cart__place-order__items-data');
    const cartEmptyText = document.querySelector('.cart__empty-text');

    if (currentCartItemsJSON && currentCartItemsJSON !== '[]') {
        const currentCartItems = JSON.parse(currentCartItemsJSON);

        $.ajax({
            url: '/ajax/cart/getItemsData.php',
            type: 'POST',
            data: `items=${currentCartItemsJSON}`,
            success: function (response) {
                response = JSON.parse(response);

                let itemsHTML = ''

                if (response && response.length !== 0) {
                    response.forEach(item => {
                        itemsHTML +=
                            `
                        <div class="cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex flex-lg-row flex-column justify-content-between align-items-center" id="item-${item.ID}">
                            <div class="d-flex align-items-center flex-sm-row flex-column">
                                <img src="${item.PREVIEW_PICTURE_SRC}" alt="${item.NAME}" class="cart-item__img my-2">
                                <a href="${item.DETAIL_PAGE_URL}" class="cart-item__name fw-bold fs-big ms-4 my-2">${item.NAME}</a>
                            </div>
                            <div class="d-flex align-items-center my-2">
                                <label for="item-${item.ID}-quantity">Кол-во:</label>
                                <input type="number" value="${item.QUANTITY}" class="catalog-item__quantity rounded shadow border-purple-dark mx-2" id="item-${item.ID}-quantity" title="Вы можете изменить количество данного товара" data-itemId="${item.ID}">
                            `
                        if (item.PROPERTY_PRICE_VALUE !== null) itemsHTML += `<span class="cart-item__price justify-self-end me-4">От <b class="cart-item__price-value">${item.PROPERTY_PRICE_VALUE}</b> р.</span>`
                        itemsHTML +=
                            `<span class="cart-item__delete" data-itemId="${item.ID}"></span>
                            </div>
                        </div>
                    `
                    })

                    cartItemsBlock.innerHTML = itemsHTML;
                    cartPlaceOrderForm.classList.remove('d-none');
                    updateCartItemsTextarea();

                    const itemQuantityInputs = document.querySelectorAll('.catalog-item__quantity');

                    itemQuantityInputs.forEach(input => {
                        input.addEventListener('change', () => {
                            const itemId = input.getAttribute('data-itemId');
                            currentCartItems.forEach((item, index) => {
                                if (item.id === itemId) {
                                    currentCartItems[index] = {
                                        id: itemId,
                                        quantity: input.value
                                    }
                                }
                            })

                            localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
                            updateCartItemsTextarea();
                        })
                    })

                    const cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');

                    cartItemsDeleteBtns.forEach(btn => {
                        btn.addEventListener('click', () => {
                            const itemId = btn.getAttribute('data-itemId');
                            currentCartItems.forEach((item, index) => {
                                if (item.id === itemId) {
                                    currentCartItems.splice(index, 1)
                                }
                            })

                            localStorage.setItem('cartItems', JSON.stringify(currentCartItems));
                            reloadCartIcon(currentCartItems.length);
                            updateCartItemsTextarea();

                            if (currentCartItems.length === 0) {
                                document.querySelector('.cart__empty-text').classList.remove('d-none');
                                cartPlaceOrderForm.classList.add('d-none');
                                cartIcon.classList.add('d-none');
                            }

                            document.querySelector(`#item-${itemId}`).remove();
                        })
                    })
                } else {
                    cartEmptyText.classList.remove('d-none');
                }

                cartLoader.classList.add('d-none');
            },
            error: function (jqXhr, err) {
                console.log(jqXhr, err);
            }
        })

        const updateCartItemsTextarea = () => {
            cartItemsDataTextarea.value = '<br><br>';
            currentCartItems.forEach((item, index) => {
                const itemElement = document.querySelector(`#item-${item.id}`);
                const itemName = itemElement.querySelector('.cart-item__name').innerHTML;
                cartItemsDataTextarea.value += `${index + 1}. <b>Назв.:</b> ${itemName}, <b>Кол-во:</b> ${item.quantity}`;

                const itemPrice = itemElement.querySelector('.cart-item__price');
                if (itemPrice) {
                    cartItemsDataTextarea.value += ` <b>Цена за шт.:</b> ${itemPrice.innerHTML} <br><br>`
                } else {
                    cartItemsDataTextarea.value += '<br><br>'
                }
            })
        }

        const reloadCartIcon = (amountOfItems) => {
            const cartIcon = document.querySelector('.cart-icon');

            if (amountOfItems) {
                cartIcon.classList.remove('d-none');
                cartIcon.querySelector('.cart-icon__amount-of-items').innerHTML = amountOfItems;
            } else {
                cartIcon.classList.add('d-none');
            }
        }
    } else {
        cartLoader.classList.add('d-none');
        cartEmptyText.classList.remove('d-none');
    }
})