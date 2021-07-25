const swiper = new Swiper('.swiper-containerTeam', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.slider-button--next',
        prevEl: '.slider-button--prev',
    },

    speed: 600,

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    keyboard: {
        enabled: true,
        onlyInViewport: true,
        pageUpDown: true,
    },

    autoplay: {
        delay: 5000,
    },

    slidesPerView: 3,
    spaceBetween: 0,

    breakpoints: {
        1401: {
            slidesPerView: 3,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        319: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
    },
});

var reviewsSwiper = new Swiper('.reviews-slider', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.reviews-slider__button--next',
        prevEl: '.reviews-slider__button--prev',
    },
    speed: 600,

    keyboard: {
        enabled: true,
    }
});
