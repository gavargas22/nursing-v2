$(function(){
	var $container = $('#elements');
	$container.isotope({
		itemSelector : '.isotope-elements',
		masonry : {
		columnWidth : 10
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		}
	});
	$('#filters a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
});
$(function(){
	$("#slideshow").slides({
		pagination: true,
        generatePagination: false,
        play: 5000
      });
});