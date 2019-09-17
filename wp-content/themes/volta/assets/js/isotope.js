(function ($) {
	    
	$('.iso-grid').imagesLoaded( function() {
		$('.iso-grid').isotope({
			itemSelector: ".grid-item",
			percentPosition: true,
			masonry: {
			    columnWidth: '.grid-sizer',
				gutter: '.gutter-sizer',
			}
		});
	});
	
})(jQuery);