(function ($) {
    "use strict";

    // :: Variables
    var ecaps_window = $(window);
    var dd = $("dd");
    var pageWrapper = $(".ecaps-page-wrapper");
    var sideMenuArea = $(".ecaps-sidemenu-area");

    // :: Preloader Active Code
    setTimeout(function () {
        $("#droba-loader").addClass("loaded")
    }, 1500);

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#ecapsSideNav').slimscroll({
            height: '100%',
            size: '1px',
            position: 'right',
            color: '#9c9c9c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#messageBox, #notificationsBox').slimscroll({
            height: '260px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('.widgetbox').slimscroll({
            height: '400px',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Slimscroll Active Code
    if ($.fn.slimscroll) {
        $('#chooseLayout, #quickSettingPanel').slimscroll({
            height: '100%',
            size: '2px',
            position: 'right',
            color: '#8c8c8c',
            alwaysVisible: false,
            distance: '0px',
            railVisible: false,
            wheelStep: 15
        });
    }

    // :: Menu Active Code
    $("#menuCollasped").on("click", function () {
        pageWrapper.toggleClass("menu-collasped-active");
    });

    $("#mobileMenuOpen").on("click", function () {
        pageWrapper.toggleClass("mobile-menu-active");
    });

    $("#rightSideTrigger").on("click", function () {
        $(".right-side-content").toggleClass("active");
    });

    sideMenuArea.on("mouseenter", function () {
        pageWrapper.addClass("sidemenu-hover-active");
        pageWrapper.removeClass("sidemenu-hover-deactive");
    });

    sideMenuArea.on("mouseleave", function () {
        pageWrapper.removeClass("sidemenu-hover-active");
        pageWrapper.addClass("sidemenu-hover-deactive");
    });

    // :: Setting Panel Active Code
    $("#settingTrigger").on("click", function () {
        $(".choose-layout-area").toggleClass("active");
    });

    $("#settingCloseIcon").on("click", function () {
        $(".choose-layout-area").removeClass("active");
    })

    $("#quicksettingTrigger").on("click", function () {
        $(".quick-settings-panel").toggleClass("active");
    });

    $("#quicksettingCloseIcon").on("click", function () {
        $(".quick-settings-panel").removeClass("active");
    })

    // :: Slider Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlides = $('.welcome_slides');
        welcomeSlides.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            nav: true,
            navText: ["<i class='pe-7s-angle-left'</i>", "<i class='pe-7s-angle-right'</i>"],
            dots: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        })

        welcomeSlides.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlides.on('translated.owl.carousel', function () {
            var layer = welcomeSlides.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        // :: Widget Slider Active Code
        $(".widget-slides").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 750,
            margin: 0
        });

        // :: Widget Slider Active Code
        $(".widget-slides-inbox").owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            smartSpeed: 500,
            margin: 50,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

        // :: Widget Slider Active Code
        $(".widget-slider-2").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 700,
            margin: 30,
            center: true,
            dots: false
        });

        // :: Widget Slider Active Code
        $(".widget-slider-3").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 600,
            margin: 30,
            center: true,
            nav: false,
            dots: false
        });
    }

    // :: Popover Active Code
    if ($.fn.popover) {
        $('[data-toggle="popover"]').popover();
    }

    // :: FooTable Active Code
    if ($.fn.footable) {
        $(".footable").footable();
    }

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: Dropdown Active Code
    if ($.fn.dropdown) {
        $("dropdown-toggle").dropdown();
    }

    // :: Jarallax Active Code
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.2
        });
    }

    // :: Counterup Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 15,
            time: 2000
        });
    }

    // :: Wow Active Code
    if (ecaps_window.width() > 767) {
        new WOW().init();
    }

    // :: Accordian Active Code
    dd.filter(":nth-child(n+3)").hide();
    $("dl").on("click", "dt", function () {
        $(this).next().slideDown(500).siblings("dd").slideUp(500);
    });

    // :: PreventDefault a Click
    $('a[href="#"]').on("click", function ($) {
        $.preventDefault();
    });

    // :: Tooltip Active Code
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // :: Countdown Active Code
    if ($.fn.countdown) {
        $("#clock").countdown("2021/12/24", function (event) {
            $(this).html(event.strftime("<div>%D <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>"));
        });
    }

})(jQuery);