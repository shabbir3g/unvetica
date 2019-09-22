(function ($) {
	"use strict";

	$(document).ready(function(){



$(".blog-posts .owl-carousel").owlCarousel({
		loop: true,
		margin: 40,
		autoplay:true,
		responsive:{
			0:{
            items:1,
            nav:false
        },
        500:{
            items:2,
            nav:false
        },
        767:{
            items:2,
            nav:false
        },
        900:{
            items:3,
            nav:false
        }
		}
		
	});


	/*	var owl = $('.product-gallery-section .owl-carousel');
		owl.owlCarousel();
		// Go to the next item
		$('.shrunkit-right .customNextBtn').click(function() {
		    owl.trigger('next.owl.carousel');
		})
		// Go to the previous item
		$('.shrunkit-right .customPrevBtn').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'
		    owl.trigger('prev.owl.carousel', [300]);
		})

	*/





		
		
		 var shrinkHeader = 30;
		  jQuery(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   jQuery('.header-top-fixed').addClass('shrink');
				}
				else {
					jQuery('.header-top-fixed').removeClass('shrink');
				}
		  });
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
			}
		
			
		var theToggle = document.getElementById('toggle');

		// hasClass
		function hasClass(elem, className) {
			return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
		}
		
		// toggleClass
		function toggleClass(elem, className) {
			var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
			if (hasClass(elem, className)) {
				while (newClass.indexOf(" " + className + " ") >= 0 ) {
					newClass = newClass.replace( " " + className + " " , " " );
				}
				elem.className = newClass.replace(/^\s+|\s+$/g, '');
			} else {
				elem.className += ' ' + className;
			}
		}

		theToggle.onclick = function() {
		   toggleClass(this, 'on');
		   return false;
		}
			
	});

}(jQuery));