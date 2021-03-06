	// OWL SLIDER CUSTOM JS

	jQuery(document).ready(function() {	
				
         /* ---------------------------------------------- /*
         * Header Sticky
         /* ---------------------------------------------- */
        
        jQuery(window).scroll(function(){
            if (jQuery(window).scrollTop() >= 100) {
                jQuery('.header-sticky').addClass('header-fixed-top');
				jQuery('.header-sticky').removeClass('not-sticky');
				jQuery('.navbar-collapse').removeClass('show');
            }
            else {
                jQuery('.header-sticky').removeClass('header-fixed-top');
				jQuery('.header-sticky').addClass('not-sticky');
            }
        });
		
		jQuery(".theme-main-slider").focusin(function(){
			jQuery('.navbar-collapse').removeClass('show');
		});
		jQuery(".theme-page-header-area").focusin(function(){
			jQuery('.navbar-collapse').removeClass('show');
		});
		
		/* ---------------------------------------------- /*
         * Scroll top
         /* ---------------------------------------------- */

        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('.page-scroll-up').fadeIn();
            } else {
                jQuery('.page-scroll-up').fadeOut();
            }
        });

        jQuery('a[href="#totop"]').click(function() {
            jQuery('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
		
	
		// Accodian Js
		function toggleIcon(e) {
			jQuery(e.target)
			.prev('.panel-heading')
			.find(".more-less")
			.toggleClass('fa-plus-square-o fa-minus-square-o');
		}
		jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
		jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);

		
		jQuery("#theme-main-slider").owlCarousel({
			navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			autoplay : 7000,
			smartSpeed: 1000,
			autoplayTimeout: 2500,
			autoplayHoverPause:true,
			singleItem:true,
			mouseDrag: true,
			loop:true, // loop is true up to 1199px screen.
			nav:true, // is true across all sizes
			margin:0, // margin 10px till 960 breakpoint
			autoHeight: true,
			responsiveClass:true, // Optional helper class. Add 'owl-reponsive-' + 'breakpoint' class to main element.
			items: 1,
			dots: false,
			navText: ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]	
        });
		 
	});
	