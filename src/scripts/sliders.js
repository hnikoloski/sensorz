// import Swiper JS
import Swiper, { Autoplay } from 'swiper';
// import Swiper styles
import 'swiper/css';

jQuery(document).ready(function ($) {

    if ($('.sensorz-trusted-by-block .swiper').length) {
        let numOfSlides = $('.sensorz-trusted-by-block .swiper .swiper-slide').length;


        const trustedBySlider = new Swiper('.sensorz-trusted-by-block .swiper', {
            init: function () {
                const images = this.el.querySelectorAll('img');
                for (let i = 0; i < images.length; i++) {
                    images[i].removeAttribute('decoding');
                }
            },
            modules: [Autoplay],
            autoplay: {
                delay: 1,
            },
            loop: true,
            slidesPerView: 5,
            spaceBetween: convertPxToRem(30),
            speed: 3500,
            disableOnInteraction: false,
            allowTouchMove: false,



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