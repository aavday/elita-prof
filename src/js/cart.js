$(document).ready(function () {
    /* инициализация корзины */

    const currentCartItemsJson = localStorage.getItem('cartItems');
    console.log(currentCartItemsJson);
    const cartLoader = document.querySelector('.cart .loader');

    if (currentCartItemsJson) {
        $.ajax({
            url: '/ajax/cart/getItemsData.php',
            type: 'POST',
            data: 'items=' + currentCartItemsJson,
            dataType: 'json',
            success: function (response) {
                console.log(JSON.parse(response));
                cartLoader.classList.add('d-none');
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