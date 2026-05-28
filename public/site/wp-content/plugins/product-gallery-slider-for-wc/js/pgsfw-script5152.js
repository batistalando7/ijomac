jQuery(document).ready(function ($) {

	// Settings from localized object
	const slider_marrow = object_name.pgsfw_marrow_disable != 1;
	const slider_garrow = object_name.pgsfw_garrow_disable != 1;
	const verticallayout = object_name.pgsfw_gallery_vertical == 1;
	const galleryimg = parseInt(object_name.pgsfw_gallery_img) || 4;
	const video_height = parseInt(object_name.video_height) || 350;
	
	let lastImageHeight = video_height; // default fallback height

	// Function to update the iframe height based on image height
	function updateIframeHeight() {
		let $current = $('.pgsfw-slider-for .slick-current');
		let $img = $current.find('img.wc_main_img');
		let $iframe = $current.find('iframe');

		// If image is present, update stored height and iframe
		if ($img.length) {
			let imgEl = $img.get(0);
			if (imgEl.complete) {
				lastImageHeight = $img.outerHeight();
				$iframe.height(lastImageHeight);
			} else {
				$img.on('load', function () {
					lastImageHeight = $img.outerHeight();
					$iframe.height(lastImageHeight);
				});
			}
		}

		// If only iframe is present, use last known image height
		if ($iframe.length && !$img.length) {
			$iframe.height(lastImageHeight);
		}
	}

	// Function to stop all videos (pause all iframes)
	function stopAllVideos() {
		$('iframe').each(function () {
			let src = $(this).attr('src');
			if (src && src.indexOf('youtube.com') !== -1) {
				let newSrc = src.replace(/&autoplay=1/, '&autoplay=0'); // Stop autoplay
				$(this).attr('src', newSrc);
			}
		});
	}

	// Function to autoplay the current video (in iframe)
	function autoplayCurrentVideo() {
		const $iframe = $('.pgsfw-slider-for .slick-current iframe');
		if ($iframe.length) {
			let src = $iframe.attr('src');
			if (src && src.indexOf('youtube.com') !== -1) {
				let newSrc = src.replace(/&autoplay=0/, '&autoplay=1'); // Autoplay the video
				$iframe.attr('src', newSrc);
			}
		}
	}

	function lazyLoadCurrentIframe() {
		let $currentSlide = $('.pgsfw-slider-for .slick-current');
		let $iframe = $currentSlide.find('iframe[data-src]');

		if ($iframe.length && !$iframe.attr('src')) {
			$iframe.attr('src', $iframe.data('src'));

			$iframe.on('load', function () {
				$(this).siblings('.iframe-loader').fadeOut();
			});
		}
	}

	// Initialize lazy loading for the first iframe
	function initLazyLoadFirstIframe() {
		$('.pgsfw-slider-for .slick-slide:first').each(function () {
			lazyLoadCurrentIframe(); // Manually trigger lazy loading for first slide
		});
	}

	// Run lazyLoadCurrentIframe after each slide change
	$('.pgsfw-slider-for').on('init afterChange', function (event, slick, currentSlide) {
		lazyLoadCurrentIframe();
	});

	// Run lazy loading after a slight delay to ensure the slider is initialized properly
	setTimeout(initLazyLoadFirstIframe, 100); // Ensure first iframe loads

	function lazyLoadCurrentImage() {
		const $current = $('.pgsfw-slider-for .slick-current');
		const $img = $current.find('img.lazy-img');
		const $loader = $current.find('.iframe-loader');

		if ($img.length && !$img.attr('src')) {
			const src = $img.data('src');
			$img.attr('src', src);

			$img.on('load', function () {
				$loader.fadeOut(300);
			});
		}
	}

	function lazyLoadCurrentSlide() {
    lazyLoadCurrentIframe();
    lazyLoadCurrentImage();
}

		$('.pgsfw-slider-for').on('init afterChange', function () {
			lazyLoadCurrentSlide();
		});

		
	setTimeout(lazyLoadCurrentSlide, 100);

	
	// Init main slider
	const $mainSlider = $('.pgsfw-slider-for');
	$mainSlider.on('init afterChange', function (event, slick, currentSlide) {
		setTimeout(updateIframeHeight, 150); // allow fade/layout to finish before updating iframe height
		stopAllVideos(); // Stop any playing video
		autoplayCurrentVideo(); // Play the current video
	});

	$mainSlider.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: slider_marrow,
		fade: true,
		adaptiveHeight: false,
		verticalSwiping: true,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
		asNavFor: '.pgsfw-slider-thumb',
	});

	// Init thumbnail navigation slider
	$('.pgsfw-slider-thumb').slick({
		slidesToShow: galleryimg,
		slidesToScroll: 1,
		asNavFor: '.pgsfw-slider-for',
		dots: false,
		centerMode: true,
		arrows: slider_garrow,
		vertical: verticallayout,
		prevArrow: '<button type="button" class="slick-prev"></button>',
		nextArrow: '<button type="button" class="slick-next"></button>',
		focusOnSelect: true
	});

	// Zoom functionality for images (not for iframes)
	$('.pgsfw-slider-for a').each(function () {
		if (!$(this).find('iframe').length) {
			$(this).zoom();
		}
	});

	$('.single_wimg a').zoom();

	// Fancybox for lightbox functionality
	Fancybox.bind('[data-fancybox="gallery"]', {});
});
