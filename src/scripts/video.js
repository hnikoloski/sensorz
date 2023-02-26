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
        textTrackSettings: false,
        // poster is the poster attribute on the video tag
        poster: $("#hero-video .video-js").attr("poster"),
        // sources is the sources attribute on the video tag
        sources: [
            {
                src: $("#hero-video source").attr("src"),
                type: $("#hero-video source").attr("type"),
            },
        ],

    });

    var player2 = videojs("video-infographic", {
        controls: false,
        autoplay: true,
        preload: "auto",
        loop: true,
        muted: true,
        fluid: true,
        textTrackSettings: false,

        // poster is the poster attribute on the video tag
        poster: $("#video-infographic .video-js").attr("poster"),
        // sources is the sources attribute on the video tag
        sources: [
            {
                src: $("#video-infographic source").attr("src"),
                type: $("#video-infographic source").attr("type"),
            },
        ],

    });
});