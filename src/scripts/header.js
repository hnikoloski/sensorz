jQuery(document).ready(function ($) {
    // $("#page").css("padding-top", $("#masthead").outerHeight());
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 0) {
    //         $('#masthead').addClass('sticky');
    //     } else {
    //         $('#masthead').removeClass('sticky');
    //     }
    // });


    if ($('#masthead li.btn').length) {
        $("#masthead li[class*='btn']").each(function () {
            var $li = $(this);
            var $a = $li.find("a");
            if ($a.length) {
                var liClasses = $li.attr("class");
                var aClasses = $a.attr("class");
                var btnClasses = liClasses.match(/\bbtn(-\S+)?\b/g) || [];
                if (btnClasses.length) {
                    aClasses = aClasses ? aClasses + " " + btnClasses.join(" ") : btnClasses.join(" ");
                    $a.attr("class", aClasses);
                    $li.removeClass(btnClasses.join(" "));
                }
            }
        });



    }

    // if on mobile
    if ($(window).width() <= 768) {
        // $('#masthead .menu').css('height', 'calc(100vh - ' + $('#masthead').outerHeight() + 'px)');
        // $('#masthead .menu').css('top', $('#masthead').outerHeight());

        // If #mobile-trigger is active and user clicks on a link in the menu
        $('#masthead .menu-item a').on('click', function () {
            if ($('#mobile-trigger').hasClass('active')) {
                $('#mobile-trigger').removeClass('active');
                $('body').removeClass('overflow-hidden');
                $('#masthead .menu').removeClass('active');
            }
        });
    }

    $('#mobile-trigger').on('click', function () {
        $(this).toggleClass('active');
        $('body').toggleClass('overflow-hidden');
        $('#masthead .menu').toggleClass('active');
    });

});
