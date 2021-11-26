// ローディング判定
jQuery(function ($) {
jQuery(window).on("load", function() {
	jQuery("body").attr("data-loading", "true");
});

jQuery(function() {
	// スクロール判定
	jQuery(window).on("scroll", function() {
		if (100 < jQuery(this).scrollTop()) {
			jQuery("body").attr("data-scroll", "true");
		} else {
			jQuery("body").attr("data-scroll", "false");
		}
	});

	//ナビバートグル
	$('.js-hamburger').on('click', function () {
		if ($('.js-hamburger').hasClass('is-open')) {
			$('.js-drawer-menu').removeClass('is-open');
			$(this).removeClass('is-open');
		} else {
			$('.js-drawer-menu').addClass('is-open');
			$(this).addClass('is-open');
		}
	});

	// MVスライダー
	var mv__slider = new Swiper('.p-mv__slider', {
		effect: 'fade',
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		speed: 2000,
	});

	// WORKSスライダー
	var works__slider = new Swiper('.p-works__slider', {
		// Optional parameters
		slidesPerView: 1,
		loop: true,
		autoplay: {
			delay: 2000,
		},
		// If we need pagination
		pagination: {
			el: '.swiper-pagination',
			type:"bullets", 
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	/* ドロワー */
	jQuery(".js-drawer").on("click", function(e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked");
		return false;
	});

	/* スムーススクロール */
	jQuery('a[href^="#"]').click(function() {
		let header = jQuery(".js-header").height();
		let speed = 300;
		let id = jQuery(this).attr("href");
		let target = jQuery("#" == id ? "html" : id);
		let position = jQuery(target).offset().top - header;
		if ("fixed" !== jQuery("#header").css("position")) {
			position = jQuery(target).offset().top;
		}
		if (0 > position) {
			position = 0;
		}
		jQuery("html, body").animate(
			{
				scrollTop: position
			},
			speed
		);
		return false;
	});

	// スクロール検知
	jQuery(window).on("scroll", function() {
		// トップから100px以上スクロールしたら
		if (100 < jQuery(this).scrollTop()) {
			// is-showクラスをつける
		jQuery('.c-totop').addClass( 'is-show' );
		} else {
			// 100pxを下回ったらis-showクラスを削除
		jQuery('.c-totop').removeClass( 'is-show' );
		}
	});

	/* 電話リンク */
	let ua = navigator.userAgent;
	if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
		jQuery('a[href^="tel:"]')
			.css("cursor", "default")
			.on("click", function(e) {
				e.preventDefault();
			});
	}
});
});
