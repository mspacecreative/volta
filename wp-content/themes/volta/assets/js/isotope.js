(function ($) {
	
	var grid = $('.iso-grid').imagesLoaded( function() {
	  // init Isotope after all images have loaded
	  grid.isotope({
	    itemSelector: ".grid-item",
	    percentPosition: true,
	    masonry: {
	        columnWidth: '.grid-sizer',
	    	gutter: '.gutter-sizer',
	    }
	  });
	});
	
})(jQuery);