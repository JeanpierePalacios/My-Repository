/* SLIDER PRODUCTS */
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        360: {
        slidesPerView: 1.5,
        spaceBetween: 20,
        },
        540: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        1200: {
        slidesPerView: 4,
        spaceBetween: 40,
        },
        1024: {
        slidesPerView: 3,
        spaceBetween: 20,
        },
    },
});

/**/ 