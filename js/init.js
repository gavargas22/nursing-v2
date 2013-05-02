$(document).ready(function() {
	var $container = $('#tile-wrapper');
	$container.isotope({
		itemSelector : '.isotope-elements',
		masonry : {
		columnWidth : 10,
		cornerStampSelector: '.calendar-title'
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false, 
		}
	});
	$('#filters a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
});

/*Load the Centennial Code*/


$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#menu-background-holder-single').offset().top;
	var screen_width = $(document).width();
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#menu-background-holder-single').css({ 'position': 'fixed', 'top':0, 'left':0, 'width': screen_width, 'z-index':999999, });
			$('#mini-logo').css({ 'visibility': 'visible' });
		} else {
			$('#menu-background-holder-single').css({ 'position': 'relative', 'top':0, });
			$('#mini-logo').css({ 'visibility': 'hidden' });
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});

