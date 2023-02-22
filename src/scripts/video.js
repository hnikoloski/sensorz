//video js
import videojs from "video.js";
import "video.js/dist/video-js.min.css";

jQuery(document).ready(function ($) {


    var player = videojs("hero-video", {
        controls: false,
        autoplay: true,
        preload: "auto",
        loop: true,
        muted: true,
        fluid: true,

        // poster is the poster attribute on the video tag
        poster: $(".video-js").attr("poster"),
        // sources is the sources attribute on the video tag
        sources: [
            {
                src: $("#hero-video source").attr("src"),
                type: $("#hero-video source").attr("type"),
            },
        ],

    });

});