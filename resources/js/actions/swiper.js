// Hero section swiper

let hero_swiper = new Swiper(".hero-section .mySwiper", {
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".hero-section .swiper-button-next",
        prevEl: ".hero-section .swiper-button-prev",
    },
});
