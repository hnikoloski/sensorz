// import ScrollReveal from "scrollreveal";
// import "splitting/dist/splitting.css";
// import "splitting/dist/splitting-cells.css";
// import Splitting from "splitting";
// import { gsap, ScrollTrigger, ExpoScaleEase, Expo } from "gsap/all";
// gsap.registerPlugin(ScrollTrigger, ExpoScaleEase, Expo);
// Splitting();

jQuery(document).ready(function ($) {
    function pageRdy() {
        setTimeout(function () {
            $("body").removeClass("overflow-hidden");
            $('#preloader').fadeOut();
        }, 500)
    }

    $.when(pageRdy()).done(function () {
        setTimeout(function () {
            // initAll();
        }, 100);
        setTimeout(function () {
            $('#preloader').remove();
        }, 1500);
    });

    function initAll() {
        var staggerUp = {
            duration: 600,
            interval: 100,
            distance: '50px',
            viewFactor: 0.75,
            easing: 'ease',
            delay: 100,
            opacity: 0,
        };

        // Animated elements selectors
        let staggerAnimationElements = [
            '.sensorz-hero-block .image-boxes > *',
        ]

        // init animation of elements
        for (let i = 0; i < staggerAnimationElements.length; i++) {
            ScrollReveal().reveal(staggerAnimationElements[i], staggerUp);
        }

        // Text animation
        $(".animate-text").each(function () {
            var text = $(this);
            var characters = text.find(".char");

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 75%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 0.5, stagger: 0.01, ease: Expo.easeOut, transform: 'translateY(0)' });
        });
        // Body text animation
        $(".animate-text-body").each(function () {
            var text = $(this);
            var characters = text.find(".char");

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 75%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 0.7, stagger: 0.005, ease: Expo.easeOut, transform: 'translateY(0)' });
        });
        $(".animate-ltr").each(function () {
            var text = $(this);
            var characters = text;

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 55%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 2.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateX(0)' });
        });

        $(".animate-rtl").each(function () {
            var text = $(this);
            var characters = text;

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 55%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 2.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateX(0)' });
        });
        $(".animate-ttb").each(function () {
            var text = $(this);
            var characters = text;

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 55%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 2.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateY(0)' });
        });
        $(".animate-btt").each(function () {
            var text = $(this);
            var characters = text;

            const textTimeline = gsap.timeline({

                scrollTrigger: {
                    trigger: text,
                    start: "top 55%",
                    // markers: true,
                },
            });

            textTimeline.to(characters, { duration: 2.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateY(0)' });
        });

    }
});