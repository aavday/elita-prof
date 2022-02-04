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

        console.log('test');

        $.ajax({
            url: $(this).attr('data-handlerUrl'),
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                console.log(response);
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
})