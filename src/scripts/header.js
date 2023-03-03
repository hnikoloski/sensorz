jQuery(document).ready(function ($) {
    // $("#page").css("padding-top", $("#masthead").outerHeight());
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('#masthead').addClass('sticky');
        } else {
            $('#masthead').removeClass('sticky');
        }

        // Check if the anchor is in the viewport
        var $anchors = $('#masthead .menu li.menu-item a');
        $anchors.each(function () {
            var $this = $(this);
            var $anchor = $this.attr('href');
            if ($anchor == '#top') {
                return;
            }
            if ($($anchor).length) {
                if (isScrolledIntoView($($anchor))) {
                    $anchors.removeClass('active');
                    $this.addClass('active');
                }
            }
        });

    });

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }



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

    $('#masthead .menu li.menu-item a').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);

        // Go to the anchor
        var $anchor = $this.attr('href');
        if ($anchor == '#top') {
            // Scroll to top
            $('html, body').animate({
                scrollTop: 0
            }, 100);
            return;
        }

        // Scroll to the anchor
        $('html, body').animate({
            scrollTop: $($anchor).offset().top - $('#masthead').outerHeight()
        }, 100);

    });
});
