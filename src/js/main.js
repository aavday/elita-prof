$(document).ready(function () {
    $('.owl-carousel').each(function() {
        const parameters = $(this).data();
        $(this).owlCarousel(parameters);
    })

    $('.js-mask').each(function() {
        $(this).mask(($(this).data()['mask']['mask']));
    })

    const mobileNavToggler = document.querySelector('.header-mob__nav-toggle');
    mobileNavToggler.addEventListener('click', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('active');
    })

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