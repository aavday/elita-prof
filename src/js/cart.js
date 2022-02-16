$(document).ready(function () {
    /* инициализация корзины */

    const currentCartItemsJSON = localStorage.getItem('cartItems');
    const cartLoader = document.querySelector('.cart .loader');
    const cartItemsBlock = document.querySelector('.cart-items');

    if (currentCartItemsJSON) {
        $.ajax({
            url: '/ajax/cart/getItemsData.php',
            type: 'POST',
            data: 'items=' + currentCartItemsJSON,
            success: function (response) {
                response = JSON.parse(response);
                console.log(response);

                let itemsHTML = ''

                response.forEach(item => {
                    itemsHTML +=
                    `
                        <div class="cart-item p-3 my-3 rounded shadow border-bold-purple-dark d-flex justify-content-between align-items-center" id="${item.ID}">
                            <div class="d-flex align-items-center">
                                <img src="${item.PREVIEW_PICTURE_SRC}" alt="${item.NAME}" class="cart-item__img">
                                <a href="${item.DETAIL_PAGE_URL}" class="cart-item__name fw-bold fs-big ms-4">${item.NAME}</a>
                            </div>
                            <div class="d-flex align-items-center">
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
            },
            error: function (jqXhr, err) {
                console.log(jqXhr, err);
            }
        })

        const cartItemsDeleteBtns = document.querySelectorAll('.cart-item__delete');
        const currentCartItems = JSON.parse(currentCartItemsJSON);

        cartItemsDeleteBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                console.log('test');
                const itemId = btn.getAttribute('data-itemId');
                currentCartItems.forEach((item, index) => {
                    if (item === itemId) {
                        currentCartItems.splice(index, 1)
                    }
                })

                localStorage.setItem('cartItems', JSON.stringify(currentCartItems));

                document.querySelector('#' + itemId).remove();
            })
        })
    } else {
        cartLoader.classList.add('d-none');
        document.querySelector('.cart__empty-text').classList.remove('d-none');
    }
})