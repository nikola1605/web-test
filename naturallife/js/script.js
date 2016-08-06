
$(document).ready(function(){

	// hide #back-top first
	
	
	// fade in #back-top
	$(function () {

		// scroll body to 0px on click
		$('#back-top').click(function () {

			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	});

	$('.zoom').fadeOut();
	$('.tube-container').hover(function(){
		$(this).find('.zoom').fadeIn();
		$(this).css({'opacity':'0.7'});
	},function(){
		$(this).find('.zoom').fadeOut();
		$(this).css({'opacity':'1'});
	});

	if ( $.browser.msie ) {
	  $('.form-box input[type="text"]').css({'width':'85%'});
	}
});
