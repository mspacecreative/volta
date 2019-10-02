/*
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {
	
	function calcNegativeMargins() {
		if (window.matchMedia("(min-width: 1600px)").matches) {
			
			var windowWidth = $(window).width() - 1600;
			$('.page .features, .banner').css({
				'margin-right' : -windowWidth + 30 / 2,
				'margin-left' : -windowWidth + 30 / 2,
			});
			
		} else {
			$('.page .features, .banner').css({
				'margin-right' : '-6em',
				'margin-left' : '-6em',
			});
		}
	}
	
	function splashHeight() {
		$('#header').height($(window).height());
	}
	
	$(document).ready(function () {
		splashHeight();
		calcNegativeMargins();
		
		$('.window-close-button').click(function() {
			$(this).closest('.qtip').hide();
			$('html').removeClass('fixed');
		});
	});
	
	$(document).ajaxSuccess(function() {
		$('.simcal-tooltip-content').prepend('<span class="window-close-button"></span>');
	});
	
	$(document).ajaxSuccess(function() {
		$('.qtip-content .simcal-events').prepend('<span class="window-close-button"></span>');
	});
	
	$(document).ajaxSuccess(function() {
		$('.window-close-button').click(function() {
			$(this).closest('.qtip').hide();
			$('html').removeClass('fixed');
		});
	});
	
	$('.simcal-event-title, .simcal-events-dots').click(function() {
		$('html').addClass('fixed');
	});
	
	// Google Calendar
	//$('.simcal-tooltip-content').prepend('<i class="fa fa-times simcal-close-2"></i>');
	$('.simcal-tooltip-content').prepend('<span class="window-close-button"></span>');
	$('.qtip-content .simcal-events').prepend('<span class="window-close-button"></span>');
	
	// Google Calendar
	
	// Nav.
	$('.partner-slider').slick({
	    dots: false, arrows: false, centerMode: true, slidesToShow: 3, centerPadding: '20px', autoplay: true, autoplaySpeed: 0, speed: 7000, cssEase: 'linear'
	});
	
	$(window).resize(function () {
		splashHeight();
		calcNegativeMargins();
	});
	
	var	$window = $(window),
		$body = $('body'),
		settings = {

			// Carousels
				carousels: {
					speed: 4,
					fadeIn: true,
					fadeDelay: 250
				},

		};

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '961px',   '1280px' ],
			narrow:    [ '841px',   '960px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			mode: 'fade',
			speed: 350,
			noOpenerFade: true,
			alignment: 'center'
		});

	// Scrolly.
		$('.scrolly').scrolly();

	// Carousels.
		$('.carousel').each(function() {

			var	$t = $(this),
				$forward = $('<span class="forward"></span>'),
				$backward = $('<span class="backward"></span>'),
				$reel = $t.children('.reel'),
				$items = $reel.children('article');

			var	pos = 0,
				leftLimit,
				rightLimit,
				itemWidth,
				reelWidth,
				timerId;

			// Items.
				if (settings.carousels.fadeIn) {

					$items.addClass('loading');

					$t.scrollex({
						mode: 'middle',
						top: '-20vh',
						bottom: '-20vh',
						enter: function() {

							var	timerId,
								limit = $items.length - Math.ceil($window.width() / itemWidth);

							timerId = window.setInterval(function() {
								var x = $items.filter('.loading'), xf = x.first();

								if (x.length <= limit) {

									window.clearInterval(timerId);
									$items.removeClass('loading');
									return;

								}

								xf.removeClass('loading');

							}, settings.carousels.fadeDelay);

						}
					});

				}

			// Main.
				$t._update = function() {
					pos = 0;
					rightLimit = (-1 * reelWidth) + $window.width();
					leftLimit = 0;
					$t._updatePos();
				};

				$t._updatePos = function() { $reel.css('transform', 'translate(' + pos + 'px, 0)'); };

			// Forward.
				$forward
					.appendTo($t)
					.hide()
					.mouseenter(function(e) {
						timerId = window.setInterval(function() {
							pos -= settings.carousels.speed;

							if (pos <= rightLimit)
							{
								window.clearInterval(timerId);
								pos = rightLimit;
							}

							$t._updatePos();
						}, 10);
					})
					.mouseleave(function(e) {
						window.clearInterval(timerId);
					});

			// Backward.
				$backward
					.appendTo($t)
					.hide()
					.mouseenter(function(e) {
						timerId = window.setInterval(function() {
							pos += settings.carousels.speed;

							if (pos >= leftLimit) {

								window.clearInterval(timerId);
								pos = leftLimit;

							}

							$t._updatePos();
						}, 10);
					})
					.mouseleave(function(e) {
						window.clearInterval(timerId);
					});

			// Init.
				$window.on('load', function() {

					reelWidth = $reel[0].scrollWidth;

					if (browser.mobile) {

						$reel
							.css('overflow-y', 'hidden')
							.css('overflow-x', 'scroll')
							.scrollLeft(0);
						$forward.hide();
						$backward.hide();

					}
					else {

						$reel
							.css('overflow', 'visible')
							.scrollLeft(0);
						$forward.show();
						$backward.show();

					}

					$t._update();

					$window.on('resize', function() {
						reelWidth = $reel[0].scrollWidth;
						$t._update();
					}).trigger('resize');

				});

		});

})(jQuery);