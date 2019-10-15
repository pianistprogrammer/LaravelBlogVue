(function($){
	"use strict";	
    $(document).ready(function() {

        if ($('body').length ) { $('body').fitVids(); }
        $('select').chosen();
        
        // Function Baloo
        init_carousel();

        // Nav Sidebar
        $(document).on('click','.navbar-touch',function( event ){
            event.stopPropagation();
            $('body').addClass('open-navsidebar');
            return false;
        });
        
        // Menu Touch        
        $('.body-overlay').on('click',function() {
            $('body').removeClass('open-menutouch');
            $('body').removeClass('open-navsidebar');
        });

        $(document).on('click','.menu-touch',function( event ){
            event.stopPropagation();
            $('body').addClass('open-menutouch');
            return false;
        });
        
        //Nav Search
         $(document).on('click','.navbar-search',function(){
            $(this).parent().addClass('search-active');
            return false;
        });
         $(document).on('click','.close-search',function(){
            $(this).closest('.navbar-col').removeClass('search-active');
            return false;
        });

        //Menu Vertical
        $(document).on('click','.maine-menu-vertical .caret',function () {
            if ($(this).parent().next('ul').is(':visible')) {
                $(this).parent().next('ul').slideUp('fast');
                $(this).parent().removeClass('active');
            } else {
                $(this).closest('ul').children('.menu-item-has-children').children('.active').next('ul').slideUp('fast');
                $(this).closest('ul').children('.menu-item-has-children').children('.active').removeClass('active');
                $(this).parent().next().slideToggle('fast');
                $(this).parent().addClass('active');
            }
            return false;
        });
        
        $( window ).load(function() {
            if($('#sidebar').length > 0){
                var stickySidebar = new StickySidebar('#sidebar', {
                    topSpacing: 0,
                    bottomSpacing: 0,
                    containerSelector : '.wrapper-main-content',
                    innerWrapperSelector: '.inner-sidebar',
                    resizeSensor: true,
                    stickyClass: 'sticky-siderbar',
                    minWidth: 991.98
                });
            }
        });

    });

    /* ---------------------------------------------
     Owl carousel
    --------------------------------------------- */
    function init_carousel()
    {
        $('.owl-carousel').each(function(){
            var config = $(this).data();
            config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
        
            var animateOut = $(this).data('animateout');
            var animateIn = $(this).data('animatein');
            if(typeof animateOut != 'undefined' ){
              config.animateOut = animateOut;
            }
            if(typeof animateIn != 'undefined' ){
              config.animateIn = animateIn;
            }
            
            config.smartSpeed = 1000;

            var owl = $(this);
            owl.owlCarousel(config);

        });
    }
    
})(jQuery);
