$(document).ready(function(){

  	if( $(".pfolio_grid").length ){
		var $container = $('#container'),
			item = 50;

		$container.isotope({
			itemSelector: '.item',
			masonry: {
				columnWidth: item,
				percentPosition: true,
				 isFitWidth: false,
				 gutter: 0
			}
		});
	}

	var $windowW = $(window).width();
	var defaultLogo = $('.logo img').attr('src');
	var wpLogoSmall = 'http://localhost:8888/nlp_/wp-content/uploads/2017/08/min_noellago_logo-01.png';
	if( $windowW <  710){	
	  	$('.logo img').attr('src', wpLogoSmall);
	}else{
	  	$('.logo img').attr('src', defaultLogo	);
	}


	window.onresize = function(event) {

		var $windowW = $(window).width();

		if( $windowW <  710){	
		  	$('.logo img').attr('src', wpLogoSmall);
		}else{
		  	$('.logo img').attr('src', defaultLogo	);
		}


		if( $windowW > 965){
			console.log($windowW);
			if ( $(".column_text").length ){

				var element = $(".column_text"),
					originalY = element.offset().top;

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
		}else{
			if ( $(".column_text").length ){
				console.log("ddede");
				$(window).on('scroll', function(event) {
			    	var scrollTop = $(window).scrollTop();	
					var topDistance = 0;
					var element = $(".column_text"),
					originalY = element.offset().top;

				    element.css('top',0);



				}); 


			}
		}


	};


//OVERLAYED MENU
	//overlayed menu
	var $windowW = $(window).width();
	if( $windowW > 1070){

	  	$('.burger_menu').on('click', function() {
	  	var _this = $(this);
	    	$('.rainbow_container').toggleClass('animateOverlay');
	      	$('.main_header').css('height','auto');
	      	_this.toggleClass('open');
	      	$('body').toggleClass(' 	block_scroll');
	  	});

	}	

/*
  if( $(".pfolio_grid").length() ){
	 var $windowW = $(window).width();
	  if( $windowW <  706){
	  	$container.isotope('destroy');
	  	$(".item").removeClass('h2');
	  	$(".item").removeClass('w2');
	  	$(".item").removeClass('h2_2');

		var $container = $('#container'),
			item = 255;

			$container.isotope({
				itemSelector: '.item',
				masonry: {
					columnWidth: item,
					isFitWidth: true,
					gutter: 20
				}
			});
		}else{
			$(".pfolio_grid:nth-child(1)").addClass('h2');
			$(".pfolio_grid:nth-child(1)").addClass('h2');
			$(".pfolio_grid:nth-child(1)").addClass('h2');
			$(".pfolio_grid:nth-child(1)").addClass('h2');
			$(".pfolio_grid:nth-child(1)").addClass('h2');
			$(".item").addClass('w2');
			$(".item").addClass('h2_2');

			var $container = $('#container'),
				item = 255;

			$container.isotope({
				itemSelector: '.item',
				masonry: {
					columnWidth: item,
					isFitWidth: true,
					gutter: 20
				}
			});
		}  	
  }
*/



//FOLLOW SCROLL

		if( $windowW > 965){
			console.log($windowW);
			if ( $(".column_text").length ){

				var element = $(".column_text"),
					originalY = element.offset().top;

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
		}else{
			if ( $(".column_text").length ){
				console.log("jjj");
				console.log("ddede");
				$(window).on('scroll', function(event) {
			    	var scrollTop = $(window).scrollTop();	
					var element = $(".column_text"),
					originalY = element.offset().top;					var topDistance = 0;


				    element.css('top',0);



				}); 


			}
		}
    
});