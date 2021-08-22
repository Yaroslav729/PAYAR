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

// Мобильное меню
let navbarMenu = document.querySelector(".navbar-menu");
let menuButton = document.querySelector(".menu-button");
    menuButton.addEventListener("click", function () {
    document.querySelector(".menu-button__lineOne").classList.toggle("menu-button__lineOne--visible");
    document.querySelector(".menu-button__lineToo").classList.toggle("menu-button__lineToo--visible");
    document.querySelector(".menu-button__lineThree").classList.toggle("menu-button__lineThree--visible");
    document.querySelector(".navbar-menu").classList.toggle("navbar-menu--visible");
    document.querySelector("body").classList.toggle("lock");
});
    
    // Плавная прокрутка
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
    anchor.addEventListener("click", function (event){
        document.querySelector(".menu-button__lineOne").classList.toggle("menu-button__lineOne--visible");
        document.querySelector(".menu-button__lineToo").classList.toggle("menu-button__lineToo--visible");
        document.querySelector(".menu-button__lineThree").classList.toggle("menu-button__lineThree--visible");
        event.preventDefault();
        if (navbarMenu.classList.contains('navbar-menu--visible')) {
            document.body.classList.remove('lock');
            navbarMenu.classList.remove('navbar-menu--visible');
        }
        const blockID = anchor.getAttribute('href')
        document.querySelector('' + blockID).scrollIntoView({
            behavior: "smooth",
            block: "start"
        })
    })
}

// Скролл вверх

const offset = 100;
const scrollUp = document.querySelector('.scroll-up');
const scrollUpSvgPath = document.querySelector('.scroll-up__svg-path')
const pathLength = scrollUpSvgPath.getTotalLength();

scrollUpSvgPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
scrollUpSvgPath.style.transition = 'stoke-dashoffset 20ms';

const getTop = () => window.pageYOffset || document.documentElement.scrollTop;
// updateDashoffset
const updateDashoffset = () => {
    const height = document.documentElement.scrollHeight - window.innerHeight;
    const dashoffset = pathLength - (getTop() * pathLength / height);

    scrollUpSvgPath.style.strokeDashoffset = dashoffset;
};

// onScroll
window.addEventListener('scroll', () => {
    updateDashoffset();
    if (getTop() > offset) {
        scrollUp.classList.add('scroll-up--active');
    } else {
    scrollUp.classList.remove('scroll-up--active');
    }
});

// click
scrollUp.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
























