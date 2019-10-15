// Blog Masonry
(function($) {
    "use strict";
    $(document).ready(function() {
        // Portfolio: Init Isotope
        if ( $('.masonry-layout').length > 0 )
        {
            var $blog_masonry = $('.masonry-layout').isotope({
                itemSelector : '.post'
            });
    
            $blog_masonry.imagesLoaded().progress( function() {
                $blog_masonry.isotope('layout');
            });
        }
    });
})(jQuery);
