(function ($) {
	    
	var grid = $('.iso-grid').isotope({
		itemSelector: ".grid-item",
		percentPosition: true,
		masonry: {
		    columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
		}
	});
		
	grid.imagesLoaded().progress( function() {
		grid.isotope('layout');
    });
	
})(jQuery);