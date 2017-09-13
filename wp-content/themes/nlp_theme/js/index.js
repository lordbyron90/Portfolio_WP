$ = jQuery;
$(document).ready(function(){

  	if( $(".pfolio_grid").length ){
		var $container = $('#container'),
			item = 50;

		$container.isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: '.item'
				//percentPosition: true,
				//isFitWidth: false,
				//gutter: 0
			}
		});
	}

	var $windowW = $(window).width();
	var defaultLogo = $('.logo img').attr('src');
	var wpLogoSmall = 'http://localhost:8888/nlp_/wp-content/uploads/2017/09/min_black.svg';
	if( $windowW <  768){	
	  	$('.logo img').attr('src', wpLogoSmall);
	}else{
	  	$('.logo img').attr('src', defaultLogo	);
	}


	window.onresize = function(event) {

		var $windowW = $(window).width();

		if( $windowW <  768){	
		  	$('.logo img').attr('src', wpLogoSmall);
		}else{
		  	$('.logo img').attr('src', defaultLogo	);
		}


		if( $windowW > 768){
			console.log($windowW);
			if ( $(".column_text").length ){

				var element = $(".column_text"),
					originalY = element.offset().top;

				element.css("position", "relative");

				var navHeight = $(".main_header").outerHeight();

				var topMargin = 20,
					topDistance = '';

				$(window).on('scroll', function(event) {
			    	var scrollTop = $(window).scrollTop();	
					var topDistance = 0;

					if (scrollTop < originalY){
						topDistance = 0;
					}
					else{
						topDistance = scrollTop - originalY + topMargin*2 + navHeight;
					}
			    
				    element.stop(false, false).animate({
			        	top:topDistance
				    }, 350, 'swing');



				});  

			}
		}
		if( $windowW < 768){
			if ( $(".column_text").length ){
				var element = $(".column_text");
				element.css("position", "static");
			}
		}

	};


//OVERLAYED MENU
	//overlayed menu
	var $windowW = $(window).width();

  	$('.burger_menu').on('click', function() {
  	var _this = $(this);
    	$('.rainbow_container').toggleClass('animateOverlay');
      	$('.main_header').css('height','auto');
      	_this.toggleClass('open');
      	$('body').toggleClass(' 	block_scroll');
  	});

	


//FOLLOW SCROLL

		if( $windowW > 768){
			console.log($windowW);
			if ( $(".column_text").length ){

				var element = $(".column_text"),
					originalY = element.offset().top;

				element.css("position", "relative");

				var navHeight = $(".main_header").outerHeight();

				var topMargin = 20,
					topDistance = '';

				$(window).on('scroll', function(event) {
			    	var scrollTop = $(window).scrollTop();	
					var topDistance = 0;

					if (scrollTop < originalY){
						topDistance = 0;
					}
					else{
						topDistance = scrollTop - originalY + topMargin*2 + navHeight;
					}
			    
				    element.stop(false, false).animate({
			        	top:topDistance
				    }, 350, 'swing');
				});  
			}
		}
		if( $windowW < 768){
			if ( $(".column_text").length ){
				var element = $(".column_text");
				element.css("position", "static");
			}
		}
    
});