// import Swiper JS
import Swiper, { Autoplay } from 'swiper';
// import Swiper styles
import 'swiper/css';

jQuery(document).ready(function ($) {

    if ($('.sensorz-trusted-by-block .swiper').length) {
        let numOfSlides = $('.sensorz-trusted-by-block .swiper .swiper-slide').length;


        const trustedBySlider = new Swiper('.sensorz-trusted-by-block .swiper', {
            modules: [Autoplay],
            autoplay: true,
            speed: 1000,
            delay: 1,
            slidesPerView: 9,
            loop: true,
            loopedSlides: 9,
            slidesPerGroup: 9,
            spaceBetween: convertPxToRem(45),
            preloadImages: true,
            disableOnInteraction: false,
            breakpoints: {
                320: {
                    slidesPerView: 2.5,
                    spaceBetween: convertPxToRem(45),
                },
                768: {
                    slidesPerView: 9,
                    spaceBetween: convertPxToRem(45),
                    disableOnInteraction: false,

                },

            },
        });
    }

    function convertPxToRem(px) {
        // get the root font size
        const rootFontSize = parseFloat(
            getComputedStyle(document.documentElement).fontSize
        );
        // convert px to rem
        return px / rootFontSize * 10;
    }


});