jQuery(document).ready(function ($) {
    if ($('.sensorz-use-cases-short-archive-block').length) {
        // On desktop
        if ($(window).width() > 768) {

            $('.sensorz-use-cases-short-archive-block .posts-container .single-post:first-of-type').show();
            $('.sensorz-use-cases-short-archive-block .single-post-header').on('mouseenter', function () {
                if ($(this).hasClass('active')) {
                    return;
                }
                $('.sensorz-use-cases-short-archive-block .single-post-header').removeClass('active');
                $(this).addClass('active');

                let postId = $(this).attr('data-post-id');

                $('.sensorz-use-cases-short-archive-block .posts-container .single-post').hide();
                $('.sensorz-use-cases-short-archive-block .posts-container .single-post[data-post-id="' + postId + '"]').fadeIn();
            });
        }

        // On mobile
        if ($(window).width() <= 768) {
            // Convert it to an accordion
            // Move the .single-post-header to the top of the .single-post
            $('.sensorz-use-cases-short-archive-block .single-post-header').each(function () {
                $(this).remove();
            });

            $('.sensorz-use-cases-short-archive-block .posts-container .single-post .post_title').on('click', function () {
                $(this).toggleClass('active');
                $(this).next().slideToggle(500);
            });
        }
    }
});