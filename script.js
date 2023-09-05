(function($) {
    "use strict";

    jQuery(document).ready(function($) {


        jQuery("#testimonial").owlCarousel({
            items: 2,
            dots: true,
            autoplay: false,
            autoplayTimeout: 10000,
            nav: false,
            fluidSpeed: 1000,
            smartSpeed: 800,
            loop: true,
            margin: 40,
            responsive:{
                0:{
                    items:1,
                },
                767:{
                    items:2,
                }
            }
        });
    	

        


    });

    jQuery(window).load(function() {
        


    });

}(jQuery));