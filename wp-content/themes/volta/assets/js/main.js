/*
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {
	
	// TEAM MEMBERS
	$('.team-profile, .team-bio-inner .fa').click(function () {
		$(this).next('.team-bio-container').toggleClass('show');
		$('body').addClass('header-switch');
	});
	$('.team-bio-container .mobile').click(function () {
		$(this).parent().toggleClass('show');
		$('body').removeClass('header-switch');
	});
	$('.team-bio-inner .mobile').click(function () {
		$(this).parent().parent().toggleClass('show');
		$('body').removeClass('header-switch');
	});
	
	// SOCIAL MEDIA BAR POSITIONING
	function socialMediaBarPositioning() {
		$('.addthis-container').height( $('.addthis-container').prev().outerHeight() );
	}
	
	var stickyHeader = $('.header-row').position().top;
	$(window).scroll(function() {
		if( stickyHeader >= $(window).scrollTop() ) {
			$('.header-row').addClass('fixed');
		} else { 
			$('.header-row').removeClass('fixed');
		}
	});
	
	// SMOOTH SCROLL
	// Select all links with hashes
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
	    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
			// Figure out element to scroll to
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
					scrollTop: target.offset().top
		        }, 1000, function() {
					// Callback after animation
					// Must change focus!
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		        }  else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            $target.focus(); // Set focus again
		        };
		        });
	        }
	    }
	});
	
	$('.search .inner > h2').each(function () {
		if ( $(this).next('h2')[0] ) {
			$(this).not($(this).remove());
		}
	});
	
	if ( $('.search .inner > h1').next('h1')[0] ) {
		$(this).remove();
	}
	
	$('.post-content-container ul').each(function () {
	
		if ( $(this).next()[0] ) {
			$(this).css('margin-bottom', '1em');
		} else {
			$(this).css('margin-bottom', '0');
		}
		
	});
	
	function calcNegativeMargins() {
		if (window.matchMedia("(min-width: 1600px)").matches) {
			
			var windowWidth = $(window).width() - 1600;
			var moreMath = windowWidth / 2;
			$('.page .features, .banner').css({
				'margin-right' : -moreMath,
				'margin-left' : -moreMath,
			});
			
		} else {
			$('.page .features, .banner').css({
				'margin-right' : 'auto',
				'margin-left' : 'auto',
			});
		}
	}
	
	function splashHeight() {
		$('#header').height($(window).height());
	}
	
	$(document).ready(function () {
		splashHeight();
		calcNegativeMargins();
		socialMediaBarPositioning();
		
		$('.window-close-button').click(function() {
			$(this).closest('.qtip').hide();
			$('html').removeClass('fixed');
		});
		
		if ( $('#page-wrapper').hasClass('no-featured-image-in-header') ) {
			$('body').addClass('no-featured-image');
		}
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
		socialMediaBarPositioning();
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