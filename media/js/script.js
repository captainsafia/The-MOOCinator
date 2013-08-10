$(document).ready(function() {
	$(window).resize(function(){
		$('.well').css({
			position:'absolute',
			left: ($(window).width() - $('.well').outerWidth())/2,
			top: ($(window).height() - $('.well').outerHeight())/2
		});

	});
// To initially run the function:
$(window).resize();
});