var $ = jQuery.noConflict();


$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(450).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$('body').delay(650).css({'overflow':'visible'});
})


jQuery(document).ready(function ($) {

	"use strict";

	jQuery.browser={};(function(){jQuery.browser.msie=false;
	jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){
	jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
	$('body').append('<script type="text/javascript" src="customizer/script.js"></script>');

	// Superfish
	if ($(".sf-menu")[0]) {
		$('.sf-menu').superfish({
			delay: 700,
			animation: {
				opacity: 'none', height: 'show'
			},
			speed: 500
		});
		$('.sf-menu li li a').prepend('<i class="arrow_carrot-2right"></i>');
		$('.sf-menu li li .sf-sub-indicator i').removeClass('icon icon-bottom4').addClass('icon icon-move13');
	}
	// Login
	$(".header-login").hover(function() {
		$('.login_show').slideDown('fast');
	}, function() {
		$('.login_show').slideUp('fast');
	});
	// Register
	$(".header-register").hover(function() {
		$('.register_show').slideDown('fast');
	}, function() {
		$('.register_show').slideUp('fast');
	});
	// Languages
	$(".header-language").hover(function() {
		$('.other_languages').slideDown('fast');
	}, function() {
		$('.other_languages').slideUp('fast');
	});
	// Currency
	$(".header-currency").hover(function() {
		$('.currency-show').slideDown('fast');
	}, function() {
		$('.currency-show').slideUp('fast');
	});
	// Search
	$('.search-toggle').click(function(){
		//get collapse content selector
		var collapse_content_selector = $(this).attr('id');					

		//make the collapse content to be shown or hide
		var toggle_switch = $(this);
		$(collapse_content_selector).toggle(function(){
			if($(this).css('display')=='none'){
							//change the button label to be 'Show'
			toggle_switch.html('<i class="icon icon-active-search"></i>');
			}else{
							//change the button label to be 'Hide'
			toggle_switch.html('<i class="icon icon-active-search"></i>');
			}
		});
	});
	// Tabs
	var tabs = jQuery('ul.tabs');
	tabs.each(function (i) {
		// get tabs
		var tab = jQuery(this).find('> li > a');
		tab.click(function (e) {
			// get tab's location
			var contentLocation = jQuery(this).attr('href');
			// Let go if not a hashed one
			if (contentLocation.charAt(0) === "#") {
				e.preventDefault();
				// add class active
				tab.removeClass('active');
				jQuery(this).addClass('active');
				// show tab content & add active class
				jQuery(contentLocation).fadeIn(500).addClass('active').siblings().hide().removeClass('active');
			}
		});
	});
	var tabs = jQuery('ul.search-tabs');
	tabs.each(function (i) {
		// get tabs
		var tab = jQuery(this).find('> li > a');
		tab.click(function (e) {
			// get tab's location
			var contentLocation = jQuery(this).attr('href');
			// Let go if not a hashed one
			if (contentLocation.charAt(0) === "#") {
				e.preventDefault();
				// add class active
				tab.removeClass('active');
				jQuery(this).addClass('active');
				// show tab content & add active class
				jQuery(contentLocation).fadeIn(500).addClass('active').siblings().hide().removeClass('active');
			}
		});
	});
	var tabs = jQuery('ul.home-search-tabs');
	tabs.each(function (i) {
		// get tabs  search-tour-2-tab
		var tab = jQuery(this).find('> li > a');
		tab.click(function (e) {
			// get tab's location
			var contentLocation = jQuery(this).attr('href');
			// Let go if not a hashed one
			if (contentLocation.charAt(0) === "#") {
				e.preventDefault();
				// add class active
				tab.removeClass('active');
				jQuery(this).addClass('active');
				// show tab content & add active class
				jQuery(contentLocation).fadeIn(500).addClass('active').siblings().hide().removeClass('active');
			}
		});
	});
	// Accordion
	jQuery("ul.tt-accordion li").each(function () {
		if (jQuery(this).index() > 0) {
			jQuery(this).children(".accordion-content").css('display', 'none');
		} else {
			if ($(".faq")[0]) {
				jQuery(this).addClass('active').find(".accordion-head-sign").append("<i class='fa-minus'></i>");
				jQuery(this).siblings("li").find(".accordion-head-sign").append("<i class='fa-plus'></i>");
			} else {
				jQuery(this).addClass('active').find(".accordion-head-sign").append("<i class='fa-minus'></i>");
				jQuery(this).siblings("li").find(".accordion-head-sign").append("<i class='fa-plus'></i>");
			}
		}
		jQuery(this).children(".accordion-head").bind("click", function () {
			jQuery(this).parent().addClass(function () {
				if (jQuery(this).hasClass("active")) {
					return;
				} {
					return "active";
				}
			});
			if ($(".faq")[0]) {
				jQuery(this).siblings(".accordion-content").slideDown();
				jQuery(this).parent().find(".accordion-head-sign i").addClass("fa-minus").removeClass("fa-plus");
				jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
				jQuery(this).parent().siblings("li").removeClass("active");
				jQuery(this).parent().siblings("li").find(".accordion-head-sign i").removeClass("fa-minus").addClass("fa-plus");
			} else {
				jQuery(this).siblings(".accordion-content").slideDown();
				jQuery(this).parent().find(".accordion-head-sign i").addClass("fa-minus").removeClass("fa-plus");
				jQuery(this).parent().siblings("li").children(".accordion-content").slideUp();
				jQuery(this).parent().siblings("li").removeClass("active");
				jQuery(this).parent().siblings("li").find(".accordion-head-sign i").removeClass("fa-minus").addClass("fa-plus");
			}
		});
	});
	// Toggle
	jQuery("ul.tt-toggle li").each(function () {
		jQuery(this).children(".toggle-content").css('display', 'none');
		jQuery(this).find(".toggle-head-sign").html("<i class='fa-plus'></i>");
		jQuery(this).children(".toggle-head").bind("click", function () {
			if (jQuery(this).parent().hasClass("active")) {
				jQuery(this).parent().removeClass("active");
			} else {
				jQuery(this).parent().addClass("active");
			}
			jQuery(this).find(".toggle-head-sign").html(function () {
				if (jQuery(this).parent().parent().hasClass("active")) {
					return "<i class='fa-minus'></i>";
				} else {
					return "<i class='fa-plus'></i>";
				}
			});
			jQuery(this).siblings(".toggle-content").slideToggle();
		});
	});
	jQuery("ul.tt-toggle").find(".toggle-content.active").siblings(".toggle-head").trigger('click');
	// Responsive Menu
	$("#header nav").before('<div id="mobilepro"><i class="fa-reorder fa-times"></i></div>');
	$("#header .sf-menu a.sf-with-ul").before('<div class="subarrow"><i class="fa-angle-down"></i></div>');
	$('.subarrow').click(function () {
		$(this).parent().toggleClass("xpopdrop");
	});
	$('#mobilepro').click(function () {
		$('#header .sf-menu').slideToggle('slow', 'easeInOutExpo').toggleClass("xactive");
		$("#mobilepro i").toggleClass("fa-reorder");
	});
	$("body").click(function() {
		$('#header .xactive').slideUp('slow', 'easeInOutExpo').removeClass("xactive");
		$("#mobilepro i").addClass("fa-reorder");
	});
	$('#mobilepro, .sf-menu').click(function(e) {
		e.stopPropagation();
	});
	function checkWindowSize() {
		if ($(window).width() >= 959) {
			$('#header .sf-menu').css('display', 'block').removeClass("xactive");
		} else {
			$('#header .sf-menu').css('display', 'none');
		}
	}
	$(window).load(checkWindowSize);
	$(window).resize(checkWindowSize);
	// ToTop
	jQuery('#toTop').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 1000);
	});
	
	// Notification
	$(".notification-close").click(function () {
		$(this).parent().slideUp("slow");
		return false;
	});

	
	// quicksand
	if ($(".filter")[0]) {
		var $portfolioClone = $(".portfolio").clone();
		$(".filter a").click(function (e) {
			$(".filter li").removeClass("current");
			var $filterClass = $(this).parent().attr("class");
			if ($filterClass === "all") {
				var $filteredPortfolio = $portfolioClone.find("li");
			} else {
				var $filteredPortfolio = $portfolioClone.find("li[data-type~=" + $filterClass + "]");
			}
			// Call quicksand
			$(".portfolio").quicksand($filteredPortfolio, {
				duration: 800,
				useScaling: 'true',
				easing: 'easeInOutCubic',
				adjustHeight: 'dynamic'
			}, function () {
				$(".portfolio a[data-gal^='lightbox']").prettyPhoto({
					animation_speed: 'normal',
					theme: 'dark_rounded',
					autoplay_slideshow: false,
					overlay_gallery: true,
					show_title: false
				});
			});
			$(this).parent().addClass("current");
			e.preventDefault();
		});
	}
	// Ajax Contact
	if ($("#contactForm")[0]) {
		$('#contactForm').submit(function () {
			$('#contactForm .error').remove();
			$('#contactForm .requiredField').removeClass('fielderror');
			$('#contactForm .requiredField').addClass('fieldtrue');
			$('#contactForm span strong').remove();
			var hasError = false;
			$('#contactForm .requiredField').each(function () {
				if (jQuery.trim($(this).val()) === '') {
					var labelText = $(this).prev('label').text();
					$(this).addClass('fielderror');
					$('#contactForm span').html('<strong>*Please fill out all fields.</strong>');
					hasError = true;
				} else if ($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if (!emailReg.test(jQuery.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).addClass('fielderror');
						$('#contactForm span').html('<strong>Is incorrect your email address</strong>');
						hasError = true;
					}
				}
			});
			if (!hasError) {
				$('#contactForm').slideDown('normal', function () {
					$("#contactForm #sendMessage").addClass('load-color');
					$("#contactForm #sendMessage").attr("disabled", "disabled").addClass("btn-success").val('Sending message. Please wait...');
				});
				var formInput = $(this).serialize();
				$.post($(this).attr('action'), formInput, function (data) {
					$('#contactForm').slideUp("normal", function () {
						$(this).before('<div class="notification-box notification-box-success"><p><i class="fa-check"></i>Thanks!</strong> Your email was successfully sent. We check Our email all the time.</p></div>');
					});
				});
			}
			return false;
		});
	}
	// Tipsy
	$('.toptip').tipsy({fade: true,gravity: 's'});
	$('.bottomtip').tipsy({fade: true,gravity: 'n'});
	$('.righttip').tipsy({fade: true,gravity: 'w'});
	$('.lefttip').tipsy({fade: true,gravity: 'e'});
	// T20 Custom
	var isDesktop = (function() {
		return !('ontouchstart' in window) // works on most browsers 
		|| !('onmsgesturechange' in window); // works on ie10
	})();
	window.isDesktop = isDesktop;
	if( isDesktop ){
		if ($(".animated")[0]) {
			jQuery('.animated').css('opacity', '0');
		}
		jQuery('.animt').each(function () {
			var $curr = jQuery(this);
			var $currOffset = $curr.attr('data-gen-offset');
			if ($currOffset === '' || $currOffset === 'undefined' || $currOffset === undefined) {
				$currOffset = 'bottom-in-view';
			}
			$curr.waypoint(function () {
				$curr.trigger('animt');
			}, {
				triggerOnce: true,
				offset: $currOffset
			});
		});
		jQuery('.animated').each(function () {
			var $curr = jQuery(this);
			$curr.bind('animt', function () {
				$curr.css('opacity', '');
				$curr.addClass($curr.data('gen'));
			});
		});
		jQuery('.animated').each(function () {
			var $curr = jQuery(this);
			var $currOffset = $curr.attr('data-gen-offset');
			if ($currOffset === '' || $currOffset === 'undefined' || $currOffset === undefined) {
				$currOffset = 'bottom-in-view';
			}
			$curr.waypoint(function () {
				$curr.trigger('animt');
			}, {
				triggerOnce: true,
				offset: $currOffset
			});
		});

		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0
		});
	}
	// Progress Load
	if ($(".progress-bar > span")[0]) {
		$('.progress-bar > span').waypoint(function() {
			$(this).each(function() {
				$(this).delay(400).animate({
					width: $(this).attr('rel') + "%"
				}, 800).delay(10000);
			});
		}, {
			triggerOnce: true,
			offset: 'bottom-in-view'
		});
	}
	// MinusMargin for Slider and Breadcrumb
		var headdown_h = $('.large-header').height();
		var intro_p_h = $('.intro_p').height();
		$('.sliderr').css('margin-top', - headdown_h + 'px').css('margin-bottom', - intro_p_h + 'px');
	// Sticky
	if ($(".my_sticky")[0]){
		$('.my_sticky').before('<div class="Corpse_Sticky"></div>');
		$(window).scroll(function(){
			var wind_scr = $(window).scrollTop();
			var window_width = $(window).width();
			var head_w = $('.my_sticky').height();
			if (window_width >= 959) {
				if(wind_scr < 120){
					if($('.my_sticky').data('sticky') === true){
						$('.my_sticky').data('sticky', false);
						$('.my_sticky').stop(true).animate({opacity : 0}, 300, function(){
							$('.my_sticky').removeClass('sticky');
							$('.my_sticky').stop(true).animate({opacity : 1}, 300);
							$('.Corpse_Sticky').css('padding-top', '').css('border-bottom', '0');
						});
					}
				} else {
					if($('.my_sticky').data('sticky') === false || typeof $('.my_sticky').data('sticky') === 'undefined'){
						$('.my_sticky').data('sticky', true);
						$('.my_sticky').stop(true).animate({opacity : 0},300,function(){
							$('.my_sticky').addClass('sticky');
							$('.my_sticky.sticky').stop(true).animate({opacity : 1}, 300);
							$('.Corpse_Sticky').css('padding-top', head_w + 'px').css('border-bottom', '2px solid #F5F5F5');
						});
					}
				}
			}
		});
		$(window).resize(function(){
			var window_width = $(window).width();
			if (window_width <= 959) {
				if($('.my_sticky').hasClass('sticky')){
					$('.my_sticky').removeClass('sticky');
					$('.my_sticky').stop(true).animate({opacity : 0}, 300, function(){
						$('.my_sticky').removeClass('sticky');
						$('.my_sticky').stop(true).animate({opacity : 1}, 300);
						$('.Corpse_Sticky').css('padding-top', '');
					});
				}
			}
		});
	}
	
});

/* ------------------------------------ DOCUMENT.READY ------------------------------- */
$(document).ready(function() {
	"use strict";

	// filter open-close
	$('.another-toggle').each(function(){
		if( $('h5',this).hasClass('active') ){
			$(this).find('.another-toggle-inner').show();
		}
	});
	$('.another-toggle h5').click(function(){
		if( $(this).hasClass('active') ){
			$(this).removeClass('active');
			$(this).next('.another-toggle-inner').slideUp();
		} else {
			$(this).addClass('active');
			$(this).next('.another-toggle-inner').slideDown();
		}
	});
	
}); // END___ document.ready



$(document).ready(function(){
	/* Custom checkable */
	$('.styled-checkbox input, .styled-radio input').iCheck({
		checkboxClass: 'icheckbox',
		radioClass: 'iradio',
		increaseArea: '20%'
	});
	
	/* jQuery UI - Datepicker */
	$('input.date').datepicker();
	
	// fitVids
	$("body").fitVids();
	
	//Google Maps
	var $map = $('#map');
	if( $map.length ) {
		$map.gMap({
			address: 'No: 58 A, East Madison St, Baltimore, MD, USA',
			zoom: 12,
			scrollwheel: false,
			markers: [
				{ 'address' : 'No: 58 A, East Madison St, Baltimore, MD, USA' }
			]
		});
	}
	//Google Maps End

});

// Custom select
jQuery(document).ready(function(){
	jQuery('.mySelectBoxClass').customSelect();

	/* -OR- set a custom class name for the stylable element */
	//jQuery('.mySelectBoxClass').customSelect({customClass:'mySelectBoxClass'});
});
function mySelectUpdate(){
	setTimeout(function (){
		$('.mySelectBoxClass').trigger('update');
	}, 200);
}
$(window).resize(function() {
	mySelectUpdate();
});

// Counter
jQuery(function(jQuery) {
	jQuery('.countprice').countTo({
		from: 5,
		to: 36,
		speed: 1200,
		refreshInterval: 50,
		onComplete: function(value) {
			console.debug(this);
		}
	});
	jQuery('.counthotel').countTo({
		from: 1,
		to: 453,
		speed: 2000,
		refreshInterval: 50,
		onComplete: function(value) {
			console.debug(this);
		}
	});			
});

// Animations for this page
jQuery(document).ready(function(){
	jQuery('.tip-arrow').css({'bottom':1+'px'});
	jQuery('.tip-arrow').animate({'bottom':-9+'px'},{ duration: 700, queue: false });	
	
	jQuery('.bookfilters').css({'margin-top':-40+'px'});
	jQuery('.bookfilters').animate({'margin-top':0+'px'},{ duration: 1000, queue: false });	
	
	jQuery('.search-tour').css({'margin-right':-540+'px'});
	jQuery('.search-tour').animate({'margin-right':0+'px'},{ duration: 2000, queue: false });
	
	jQuery('.search-filter').css({'margin-top':-40+'px'});
	jQuery('.search-filter').animate({'margin-top':0+'px'},{ duration: 1000, queue: false });
	
	jQuery('.topsortby').css({'opacity':0});
	jQuery('.topsortby').animate({'opacity':1},{ duration: 1000, queue: false });	

	jQuery('.itemscontainer').css({'opacity':0});
	jQuery('.itemscontainer').animate({'opacity':1},{ duration: 1000, queue: false });			
});

// Add rooms
function addroom2(){
	$('.room2').addClass('block');
	$('.room2').removeClass('none');
	$('.addroom1').removeClass('block');
	$('.addroom1').addClass('none');
	
}
function removeroom2(){
	$('.room2').addClass('none');
	$('.room2').removeClass('block');
	
	$('.addroom1').removeClass('none');
	$('.addroom1').addClass('block');
}
function addroom3(){
	$('.room3').addClass('block');
	$('.room3').removeClass('none');
	
	$('.addroom2').removeClass('block');
	$('.addroom2').addClass('none');
}
function removeroom3(){
	$('.room3').addClass('none');
	$('.room3').removeClass('block');
	
	$('.addroom2').removeClass('none');
	$('.addroom2').addClass('block');			
}

// Price range code
$(document).ready(function($) {

	try {

		for( var i = 100; i <= 10000; i++ ){
			$('#start-val').append(
				'<option value="' + i + '">' + i + '</option>'
			);
		}
		// Initialise noUiSlider
		$('.noUiSlider').noUiSlider({
			range: [0,2200],
			start: [30,1000],
			handles: 2,
			connect: true,
			step: 1,
			serialization: {
				to: [ $('#start-val'),
					$('#end-val') ],
				resolution: 1
			}
		});
	} catch(err) {

	}

});


// Details Slider Images
(function($) {

	"use strict";

	$(function() {

		try {

			var gallery = $('#details-slider-images');
			gallery.exposure({
				controlsTarget : '#controls',
				imageControls : true,
				controls : { prevNext : true, pageNumbers : true, firstLast : false },
				pageSize : parseInt( $('#details-slider-images').width()/145, 10),
				slideshowControlsTarget : '#slideshow',
				onThumb : function(thumb) {
					var li = thumb.parents('li');				
					var fadeTo = li.hasClass($.exposure.activeThumbClass) ? 1 : 0.3;
					
					thumb.css({display : 'none', opacity : fadeTo}).stop().fadeIn(200);
					
					thumb.hover(function() { 
						thumb.fadeTo('fast',1); 
					}, function() { 
						li.not('.' + $.exposure.activeThumbClass).children('img').fadeTo('fast', 0.5); 
					});
				},
				onImageHoverOver : function() {
					if (gallery.imageHasData()) {						
						// Show image data as an overlay when image is hovered.
						gallery.dataElement.stop().show().animate({bottom:0+'px'},{queue:false,duration:160});
					}
				},
				onImageHoverOut : function() {
					// Slide down the image data.
					var imageDataBottom = -gallery.dataElement.outerHeight();
					gallery.dataElement.stop().show().animate({bottom:imageDataBottom+'px'},{queue:false,duration:160});
				},
				onImage : function(image, imageData, thumb) {
					var w = gallery.wrapper;
					
					// Fade out the previous image.
					image.siblings('.' + $.exposure.lastImageClass).stop().fadeOut(500, function() {
						$(this).remove();
					});
					
					// Fade in the current image.
					image.hide().stop().fadeIn(1000);
					
					// Setup hovering for the image data container.
					imageData.hover(function() {
						// Trigger mouse enter event for wrapper element.
						w.trigger('mouseenter');
					}, function() {
						// Trigger mouse leave event for wrapper element.
						w.trigger('mouseleave');
					});
					
					// Check if wrapper is hovered.
					var hovered = w.hasClass($.exposure.imageHoverClass);						
					if (hovered) {
						if (gallery.imageHasData()) {
							gallery.onImageHoverOver();
						} else {
							gallery.onImageHoverOut();
						}	
					}

					if (gallery.showThumbs && thumb && thumb.length) {
						thumb.parents('li').siblings().children('img.' + $.exposure.selectedImageClass).stop().fadeTo(200, 0.5, function() { $(this).removeClass($.exposure.selectedImageClass); });			
						thumb.fadeTo('fast', 1).addClass($.exposure.selectedImageClass);
					}
				}
			});

			$('#right a').click(function() {
				gallery.nextImage();
			});

			$('#left a').click(function() {
				gallery.prevImage();
			});
		} catch(e) {}
		
		/* Safari needs a little boost to display the dropdown controls differently. If user has no JS, the standard Safari controls will be shown. */
		try
		{
			var isSafari = /Constructor/.test(window.HTMLElement);

			if(isSafari) {

				$('html').addClass('safari');
			}
		}
		catch (e)
		{}
	});

})(jQuery);


function methodToFixLayout( e ) {var widthmodern = $('#layout').width();$('.modern-slider, .modern-slider img').css('width', widthmodern + 'px');}
function mycarousel4_initCallback(e){e.buttonNext.hover(function(){e.stopAuto()},function(){e.startAuto()});e.buttonPrev.hover(function(){e.stopAuto()},function(){e.startAuto()});e.clip.hover(function(){e.stopAuto()},function(){e.startAuto()})};



/* jQuery Waypoints - Copyright (c) 2011-2013 Caleb Troughton - https://github.com/imakewebthings/jquery-waypoints/blob/master/licenses.txt */
(function(){var t=[].indexOf||function(t){for(var e=0,n=this.length;e<n;e++){if(e in this&&this[e]===t)return e}return-1},e=[].slice;(function(t,e){if(typeof define==="function"&&define.amd){return define("waypoints",["jquery"],function(n){return e(n,t)})}else{return e(t.jQuery,t)}})(this,function(n,r){var i,o,l,s,f,u,a,c,h,d,p,y,v,w,g,m;i=n(r);c=t.call(r,"ontouchstart")>=0;s={horizontal:{},vertical:{}};f=1;a={};u="waypoints-context-id";p="resize.waypoints";y="scroll.waypoints";v=1;w="waypoints-waypoint-ids";g="waypoint";m="waypoints";o=function(){function t(t){var e=this;this.$element=t;this.element=t[0];this.didResize=false;this.didScroll=false;this.id="context"+f++;this.oldScroll={x:t.scrollLeft(),y:t.scrollTop()};this.waypoints={horizontal:{},vertical:{}};t.data(u,this.id);a[this.id]=this;t.bind(y,function(){var t;if(!(e.didScroll||c)){e.didScroll=true;t=function(){e.doScroll();return e.didScroll=false};return r.setTimeout(t,n[m].settings.scrollThrottle)}});t.bind(p,function(){var t;if(!e.didResize){e.didResize=true;t=function(){n[m]("refresh");return e.didResize=false};return r.setTimeout(t,n[m].settings.resizeThrottle)}})}t.prototype.doScroll=function(){var t,e=this;t={horizontal:{newScroll:this.$element.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.$element.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};if(c&&(!t.vertical.oldScroll||!t.vertical.newScroll)){n[m]("refresh")}n.each(t,function(t,r){var i,o,l;l=[];o=r.newScroll>r.oldScroll;i=o?r.forward:r.backward;n.each(e.waypoints[t],function(t,e){var n,i;if(r.oldScroll<(n=e.offset)&&n<=r.newScroll){return l.push(e)}else if(r.newScroll<(i=e.offset)&&i<=r.oldScroll){return l.push(e)}});l.sort(function(t,e){return t.offset-e.offset});if(!o){l.reverse()}return n.each(l,function(t,e){if(e.options.continuous||t===l.length-1){return e.trigger([i])}})});return this.oldScroll={x:t.horizontal.newScroll,y:t.vertical.newScroll}};t.prototype.refresh=function(){var t,e,r,i=this;r=n.isWindow(this.element);e=this.$element.offset();this.doScroll();t={horizontal:{contextOffset:r?0:e.left,contextScroll:r?0:this.oldScroll.x,contextDimension:this.$element.width(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:r?0:e.top,contextScroll:r?0:this.oldScroll.y,contextDimension:r?n[m]("viewportHeight"):this.$element.height(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};return n.each(t,function(t,e){return n.each(i.waypoints[t],function(t,r){var i,o,l,s,f;i=r.options.offset;l=r.offset;o=n.isWindow(r.element)?0:r.$element.offset()[e.offsetProp];if(n.isFunction(i)){i=i.apply(r.element)}else if(typeof i==="string"){i=parseFloat(i);if(r.options.offset.indexOf("%")>-1){i=Math.ceil(e.contextDimension*i/100)}}r.offset=o-e.contextOffset+e.contextScroll-i;if(r.options.onlyOnScroll&&l!=null||!r.enabled){return}if(l!==null&&l<(s=e.oldScroll)&&s<=r.offset){return r.trigger([e.backward])}else if(l!==null&&l>(f=e.oldScroll)&&f>=r.offset){return r.trigger([e.forward])}else if(l===null&&e.oldScroll>=r.offset){return r.trigger([e.forward])}})})};t.prototype.checkEmpty=function(){if(n.isEmptyObject(this.waypoints.horizontal)&&n.isEmptyObject(this.waypoints.vertical)){this.$element.unbind([p,y].join(" "));return delete a[this.id]}};return t}();l=function(){function t(t,e,r){var i,o;r=n.extend({},n.fn[g].defaults,r);if(r.offset==="bottom-in-view"){r.offset=function(){var t;t=n[m]("viewportHeight");if(!n.isWindow(e.element)){t=e.$element.height()}return t-n(this).outerHeight()}}this.$element=t;this.element=t[0];this.axis=r.horizontal?"horizontal":"vertical";this.callback=r.handler;this.context=e;this.enabled=r.enabled;this.id="waypoints"+v++;this.offset=null;this.options=r;e.waypoints[this.axis][this.id]=this;s[this.axis][this.id]=this;i=(o=t.data(w))!=null?o:[];i.push(this.id);t.data(w,i)}t.prototype.trigger=function(t){if(!this.enabled){return}if(this.callback!=null){this.callback.apply(this.element,t)}if(this.options.triggerOnce){return this.destroy()}};t.prototype.disable=function(){return this.enabled=false};t.prototype.enable=function(){this.context.refresh();return this.enabled=true};t.prototype.destroy=function(){delete s[this.axis][this.id];delete this.context.waypoints[this.axis][this.id];return this.context.checkEmpty()};t.getWaypointsByElement=function(t){var e,r;r=n(t).data(w);if(!r){return[]}e=n.extend({},s.horizontal,s.vertical);return n.map(r,function(t){return e[t]})};return t}();d={init:function(t,e){var r;if(e==null){e={}}if((r=e.handler)==null){e.handler=t}this.each(function(){var t,r,i,s;t=n(this);i=(s=e.context)!=null?s:n.fn[g].defaults.context;if(!n.isWindow(i)){i=t.closest(i)}i=n(i);r=a[i.data(u)];if(!r){r=new o(i)}return new l(t,r,e)});n[m]("refresh");return this},disable:function(){return d._invoke(this,"disable")},enable:function(){return d._invoke(this,"enable")},destroy:function(){return d._invoke(this,"destroy")},prev:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e>0){return t.push(n[e-1])}})},next:function(t,e){return d._traverse.call(this,t,e,function(t,e,n){if(e<n.length-1){return t.push(n[e+1])}})},_traverse:function(t,e,i){var o,l;if(t==null){t="vertical"}if(e==null){e=r}l=h.aggregate(e);o=[];this.each(function(){var e;e=n.inArray(this,l[t]);return i(o,e,l[t])});return this.pushStack(o)},_invoke:function(t,e){t.each(function(){var t;t=l.getWaypointsByElement(this);return n.each(t,function(t,n){n[e]();return true})});return this}};n.fn[g]=function(){var t,r;r=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(d[r]){return d[r].apply(this,t)}else if(n.isFunction(r)){return d.init.apply(this,arguments)}else if(n.isPlainObject(r)){return d.init.apply(this,[null,r])}else if(!r){return n.error("jQuery Waypoints needs a callback function or handler option.")}else{return n.error("The "+r+" method does not exist in jQuery Waypoints.")}};n.fn[g].defaults={context:r,continuous:true,enabled:true,horizontal:false,offset:0,triggerOnce:false};h={refresh:function(){return n.each(a,function(t,e){return e.refresh()})},viewportHeight:function(){var t;return(t=r.innerHeight)!=null?t:i.height()},aggregate:function(t){var e,r,i;e=s;if(t){e=(i=a[n(t).data(u)])!=null?i.waypoints:void 0}if(!e){return[]}r={horizontal:[],vertical:[]};n.each(r,function(t,i){n.each(e[t],function(t,e){return i.push(e)});i.sort(function(t,e){return t.offset-e.offset});r[t]=n.map(i,function(t){return t.element});return r[t]=n.unique(r[t])});return r},above:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset<=t.oldScroll.y})},below:function(t){if(t==null){t=r}return h._filter(t,"vertical",function(t,e){return e.offset>t.oldScroll.y})},left:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset<=t.oldScroll.x})},right:function(t){if(t==null){t=r}return h._filter(t,"horizontal",function(t,e){return e.offset>t.oldScroll.x})},enable:function(){return h._invoke("enable")},disable:function(){return h._invoke("disable")},destroy:function(){return h._invoke("destroy")},extendFn:function(t,e){return d[t]=e},_invoke:function(t){var e;e=n.extend({},s.vertical,s.horizontal);return n.each(e,function(e,n){n[t]();return true})},_filter:function(t,e,r){var i,o;i=a[n(t).data(u)];if(!i){return[]}o=[];n.each(i.waypoints[e],function(t,e){if(r(i,e)){return o.push(e)}});o.sort(function(t,e){return t.offset-e.offset});return n.map(o,function(t){return t.element})}};n[m]=function(){var t,n;n=arguments[0],t=2<=arguments.length?e.call(arguments,1):[];if(h[n]){return h[n].apply(null,t)}else{return h.aggregate.call(null,n)}};n[m].settings={resizeThrottle:100,scrollThrottle:30};return i.load(function(){return n[m]("refresh")})})}).call(this);