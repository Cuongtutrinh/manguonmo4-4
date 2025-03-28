document.addEventListener("DOMContentLoaded", function(){ window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-eb72779f', {"layout":"number","heading":"Sinh vi\u00ean h\u00e0i l\u00f2ng","numberPrefix":"","numberSuffix":"+","startNumber":0,"endNumber":80,"totalNumber":100,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
window.addEventListener( 'load', function() {
	UAGBCounter.init( '.uagb-block-1387a750', {"layout":"number","heading":"D\u1ef1 \u00e1n \u0111\u00e3 ho\u00e0n th\u00e0nh","numberPrefix":"","numberSuffix":"k","startNumber":0,"endNumber":50,"totalNumber":100,"decimalPlaces":0,"animationDuration":1500,"thousandSeparator":",","circleSize":230,"circleStokeSize":8,"isFrontend":true} );
});
jQuery( document ).ready( function() {
	if( jQuery( '.uagb-block-e8d8f60f' ).length > 0 ){
	jQuery( '.uagb-block-e8d8f60f' ).find( ".is-carousel" ).slick( {"slidesToShow":2,"slidesToScroll":1,"autoplaySpeed":"2000","autoplay":true,"infinite":true,"pauseOnHover":true,"speed":"500","arrows":false,"dots":true,"rtl":false,"prevArrow":"<button type='button' data-role='none' class='slick-prev' aria-label='Previous' tabindex='0' role='button' style='border-color: var(--ast-global-color-0);border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='var(--ast-global-color-0)'  ><path d='M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z'><\/path><\/svg><\/button>","nextArrow":"<button type='button' data-role='none' class='slick-next' aria-label='Next' tabindex='0' role='button' style='border-color: var(--ast-global-color-0);border-radius:0px;border-width:0px'><svg xmlns='https:\/\/www.w3.org\/2000\/svg' viewBox='0 0 256 512' height ='20' width = '20' fill ='var(--ast-global-color-0)' ><path d='M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z'><\/path><\/svg><\/button>","responsive":[{"breakpoint":1024,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":767,"settings":{"slidesToShow":1,"slidesToScroll":1}}]} );
	}
	var $scope = jQuery('.uagb-block-e8d8f60f');
	var enableEqualHeight = ( '' );
			if( enableEqualHeight ){
				$scope.imagesLoaded( function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				});

				$scope.on( "afterChange", function() {
					UAGBTestimonialCarousel._setHeight( $scope );
				} );
			}
} );
 });