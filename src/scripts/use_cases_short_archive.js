jQuery(document).ready(function ($) {
    if ($('.sensorz-use-cases-short-archive-block').length) {
        $('.sensorz-use-cases-short-archive-block .posts-container .single-post:first-of-type').show();
        $('.sensorz-use-cases-short-archive-block .single-post-header').on('click', function () {
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
});