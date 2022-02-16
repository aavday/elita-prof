$(document).ready(function () {
    /* инициализация корзины */

    const currentCartItemsJSON = localStorage.getItem('cartItems');
    const cartLoader = document.querySelector('.cart .loader');
    const cartItemsBlock = document.querySelector('.cart-items');
    const cartIcon = document.querySelector('.cart-icon');

    if (currentCartItemsJSON && currentCartItemsJSON !== '[]') {
        $.ajax({
            url: '/ajax/cart/getItemsData.php',
            type: 'POST',
            data: `items=${currentCartItemsJSON}`,
            success: function (response) {
                response = JSON.parse(response);

                let itemsHTML = ''

                response.forEach(item => {
                    itemsHTML +=
                    `
                        <div class="cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex justify-content-between align-items-center" id="item-${item.ID}">
                            <div class="d-flex align-items-center">
                                <img src="${item.PREVIEW_PICTURE_SRC}" alt="${item.NAME}" class="cart-item__img">
                                <a href="${item.DETAIL_PAGE_URL}" class="cart-item__name fw-bold fs-big ms-4">${item.NAME}</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <label for="item-${item.ID}-quantity">Кол-во:</label>
                                <input type="number" value="${item.QUANTITY}" class="catalog-item__quantity rounded shadow border-purple-dark mx-2" id="item-${item.ID}-quantity" title="Задайте нужное количество данного товара и добавьте в корзину" data-itemId="${item.ID}">
                            `
                                if (item.PROPERTY_PRICE_VALUE !== null) itemsHTML += `<span class="cart-item__price justify-self-end me-4">От <b>${item.PROPERTY_PRICE_VALUE} р.</b></span>`
                                itemsHTML +=
                                `<span class="cart-item__delete" data-itemId="${item.ID}"></span>
                            </div>
                        </div>
                    `
                })

                cartItemsBlock.innerHTML = itemsHTML;
                cartLoader.classList.add('d-none');

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
                    })
                })

                const cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');
                const currentCartItems = JSON.parse(currentCartItemsJSON);

                cartItemsDeleteBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const itemId = btn.getAttribute('data-itemId');
                        currentCartItems.forEach((item, index) => {
                            if (item.id === itemId) {
                                currentCartItems.splice(index, 1)
                            }
                        })

                        localStorage.setItem('cartItems', JSON.stringify(currentCartItems));

                        if (currentCartItems) {
                            cartLoader.classList.add('d-none');
                            document.querySelector('.cart__empty-text').classList.remove('d-none');
                            cartIcon.classList.add('d-none');
                        }

                        document.querySelector(`#item-${itemId}`).remove();
                    })
                })
            },
            error: function (jqXhr, err) {
                console.log(jqXhr, err);
            }
        })
    } else {
        cartLoader.classList.add('d-none');
        document.querySelector('.cart__empty-text').classList.remove('d-none');
    }
})