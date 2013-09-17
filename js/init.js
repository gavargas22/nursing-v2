jQuery(document).ready(function() {
	var $container = jQuery('#tile-wrapper');
	$container.imagesLoaded( function() {
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
	
	var $containerJudgesVariable = jQuery('#page-items');
	$containerJudgesVariable.isotope({
		itemSelector : '.span4',
		masonry : {
		columnWidth : 1,
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false, 
		}
	});
	
	jQuery('#filters a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
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
			$('#menu-background-holder-single').css({ 'position': 'fixed', 'top':0, 'left':0, 'width': screen_width, 'z-index':10, });
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

//Code for FancyBox
$(document).ready(function() {
        $('.fancybox').fancybox({
            padding : 0,
            openEffect  : 'elastic'
        });
});

//Code for jQuery BBQ
$(function(){
  
  // Keep a mapping of url-to-container for caching purposes.
  var cache = {
    // If url is '' (no fragment), display this div's content.
    '': $('.bbq-default')
  };
  
  // Bind an event to window.onhashchange that, when the history state changes,
  // gets the url from the hash and displays either our cached content or fetches
  // new content to be displayed.
  $(window).bind( 'hashchange', function(e) {
    
    // Get the hash (fragment) as a string, with any leading # removed. Note that
    // in jQuery 1.4, you should use e.fragment instead of $.param.fragment().
    var url = $.param.fragment();
    
    // Remove .bbq-current class from any previously "current" link(s).
    $( 'a.bbq-current' ).removeClass( 'bbq-current' );
    
    // Hide any visible ajax content.
    $( '.bbq-content' ).children( ':visible' ).hide();
    
    // Add .bbq-current class to "current" nav link(s), only if url isn't empty.
    url && $( 'a[href="#' + url + '"]' ).addClass( 'bbq-current' );
    
    if ( cache[ url ] ) {
      // Since the element is already in the cache, it doesn't need to be
      // created, so instead of creating it again, let's just show it!
      cache[ url ].show();
      
    } else {
      // Show "loading" content while AJAX content loads.
      $( '.bbq-loading' ).show();
      
      // Create container for this url's content and store a reference to it in
      // the cache.
      cache[ url ] = $( '<div class="bbq-item"/>' )
        
        // Append the content container to the parent container.
        .appendTo( '.bbq-content' )
        
        // Load external content via AJAX. Note that in order to keep this
        // example streamlined, only the content in .infobox is shown. You'll
        // want to change this based on your needs.
        .load( url, function(){
          // Content loaded, hide "loading" content.
          $( '.bbq-loading' ).hide();
        });
    }
  })
  
  // Since the event is only triggered when the hash changes, we need to trigger
  // the event now, to handle the hash the page may have loaded with.
  $(window).trigger( 'hashchange' );
  
});

