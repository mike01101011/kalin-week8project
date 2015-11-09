$(function(){

	// http://www.paulund.co.uk/how-to-create-an-animated-scroll-to-top-with-jquery
	// fade in-fade out link
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.goToTop').fadeIn();
		} else {
			$('.goToTop').fadeOut();
		}
	});
	// scroll to top
	$('.goToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	// http://www.paulund.co.uk/how-to-create-an-animated-scroll-to-top-with-jquery

	$( '.hamburgerLink' ).click(function() {
		$( ".modal" ).toggle( "slide" );
	});

});