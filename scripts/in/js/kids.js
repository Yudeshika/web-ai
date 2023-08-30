$(document).ready(function(){	
	"use strict";

	//Sticky_nav 	
	$(".menu").sticky({topSpacing:0});

  //Mean Menu
    jQuery('.menu .collapse').meanmenu();
    
	//jQuery Counter
    $('.counter').counterUp({
        time : 3000
    });
     //preloader
    setTimeout(function() {
		$('body').addClass('loaded');
	}, 500);


	// Header Slider 
        $('.header-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:false, 
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

	 // Classes Slider 
	 $('.classes-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
		dots:false,
        autoplay:false, 
		animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
			
            1000:{
                items:3
            }
        }
    })
	   // Service Slider 
	 $('.service-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
		dots:false,
        autoplay:false, 
		animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:4
            }
        }
    })
	
     // Classes Slider 
	 $('.teacher-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:false, 
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

      // Classes Slider 
	 $('.course-fature-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:false, 
    animateIn: "fadeIn",
    animateOut: "fadeOut",
    navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    
    //Testimonial Carousel 
    $('.says_content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        prevArrow: "",
        nextArrow: "",
        dots: false,
        fade: true,
        asNavFor: '.says_info'
    });
    $('.says_info').slick({
        fade: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        asNavFor: '.says_content',
        dots: false,
        // autoplay: true,
        centerMode: true,
        focusOnSelect: true,
        variableWidth: false,
        prevArrow: '<button class="slide-arrow slick-prev"></button>',
        nextArrow: '<button class="slide-arrow slick-next"></button>',
        arrows: true,
        responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1
              }
            }
        ]
    }); 

	// Classes Slider 
        $('.pagetoreview').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:false, 
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        navText: ['<i class="fa fa-angle-left" aria-hidden="true">', '<i class="fa fa-angle-right" aria-hidden="true">'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:2
                }
            }
        })
		
	//======== video popup==========
      $('.video-play a').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'http://www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src'
        }
    });
   // Isotope Gallery

   var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth : '.grid-item'
    }
  });
	  var filterFns = {
		numberGreaterThan50: function() {
		  var number = $(this).find('.number').text();
		  return parseInt( number, 10 ) > 50;
		},
		ium: function() {
		  var name = $(this).find('.name').text();
		  return name.match( /ium$/ );
		}
	  };

	  $('.filters-button-group').on( 'click', 'button', function() {
		var filterValue = $( this ).attr('data-filter');
		filterValue = filterFns[ filterValue ] || filterValue;
		$grid.isotope({ filter: filterValue });
	  });

	  $('.button-group').each( function( i, buttonGroup ) {
	var $buttonGroup = $( buttonGroup );
		$buttonGroup.on( 'click', 'button', function() {
		  $buttonGroup.find('.is-checked').removeClass('is-checked');
		  $( this ).addClass('is-checked');
		});
	  });
   //Portfolio Lightbox
  $('.grid-item').magnificPopup({
      delegate: 'a.port-view',
      type: 'image',
      gallery: {
        enabled: true
      },
      removalDelay: 300,
      mainClass: 'mfp-fade'
  });
  //Google Map
	google.maps.event.addDomListener(window, 'load', init);
	function init() {
		var mapOptions = {
			zoom: 11,
			center: new google.maps.LatLng(40.6700, -73.9400), // New York
			styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]
		};
		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.6700, -73.9400),
			map: map,
			title: 'Snazzy!'
		});
	}	

	

    
    

});

