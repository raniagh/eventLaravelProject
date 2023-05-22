$(function() {
    
    "use strict";
    
    
    
    /*=============================================
    =                Prealoder                  =
    =============================================*/
    
    if ($('.preloader').length) {
        $('.preloader').fadeOut();
    }

    /*=====  End of Prealoder  ======*/


    /*=============================================
    =                   Sticky                   =
    =============================================*/

    var windows = $(window);
	var screenSize = windows.width();
	var sticky = $('.header-navbar');
	var sliderBottomHeader = $('.slider-bottom-header-sticky');
	var $html = $('html');
	var $body = $('body');

	windows.on('scroll', function () {
		var scroll = windows.scrollTop();

		var sliderBottomHeaderHeight = sliderBottomHeader.height();
		var sliderHeight = $('.slider-11').height();

		var headerPosition = sliderBottomHeaderHeight + sliderHeight;

        if (scroll < 300) {
            sticky.removeClass('is-sticky');
        } else {
            sticky.addClass('is-sticky');
        }
        
        
		if (screenSize >= 300) {
			if (scroll < headerPosition ) {
				sliderBottomHeader.removeClass('is-sticky');
			}else {
				sliderBottomHeader.addClass('is-sticky');
			}
		}

	});
    
    const body = document.querySelector(".header-navbar, .slider-bottom-header-sticky");

    const scrollUp = "scroll-up";
    const scrollDown = "scroll-down";
    let lastScroll = 300;

    window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    if (currentScroll == 0) {
        body.classList.remove(scrollUp);
        return;
    }
    
    if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
        // down
        body.classList.remove(scrollUp);
        body.classList.add(scrollDown);
    } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
        // up
        body.classList.remove(scrollDown);
        body.classList.add(scrollUp);
    }
    lastScroll = currentScroll;
    });


    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 5) {
            $(".header-navbar-white .header-logo img").attr("src", "assets/images/logo-white.png");
            $(".header-navbar-white-2 .header-logo img").attr("src", "assets/images/logo-white.png");
            $(".header-navbar-white-3 .header-logo img").attr("src", "assets/images/logo-white.png");
            $(".header-navbar-white-4 .header-logo img").attr("src", "assets/images/logo-white.png");
        } else{;
            $(".header-navbar-white .header-logo img").attr("src", "assets/images/logo-black.png");
            $(".header-navbar-white-2 .header-logo img").attr("src", "assets/images/logo-black.png");
            $(".header-navbar-white-3 .header-logo img").attr("src", "assets/images/logo-black.png");
            $(".header-navbar-white-4 .header-logo img").attr("src", "assets/images/logo-black.png");
        } 
    });


    if ($('.menu-sidebar').length) {
        $('.menu-sidebar').stickySidebar({
            topSpacing: 0,
            bottomSpacing: 0,
        });
    };
    
    /*=====  End of Sticky  ======*/    


    /*=============================================
    =                  Tool Tip                   =
    =============================================*/

    $('[data-tooltip="tooltip"]').tooltip();

    /*=====  End of Tool Tip  ======*/
    
    
    /*=============================================
    =             Off Canvas Menu                 =
    =============================================*/

    /*-------- Off Canvas Open & Close Function --------*/
    
    $('.menu-toggle').on('click', function(){
        $('.off-canvas-wrapper').addClass('open')
    });
    
    $('.menu-close').on('click', function(){
        $('.off-canvas-wrapper').removeClass('open')
    });
    
    
    /*-------- Off Canvas javascript Function --------*/
    
    /*Variables*/
    var $offCanvasNav = $('.canvas-menu');
    var $offCanvasNavSubMenu = $offCanvasNav.find('.sub-mega-menu, .sub-menu');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a', function (e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(('menu-item-has-children')))) {
            
            if ($this.siblings('ul:visible').length) {
                e.preventDefault();
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.closest('li').siblings('li').removeClass('active');
                    $this.siblings('ul').slideDown();
                }
        }
    });
	
    
    /*=====  End of Off Canvas Menu  ======*/


    /*=============================================
    =       search Open & Close Function          =
    =============================================*/

    $('.search-toggle').on('click', function(){
        $('.search-wrapper').addClass('open')
    });
    
    $('.search-close').on('click', function(){
        $('.search-wrapper').removeClass('open')
    });

    /*=====  End of search Open & Close Function  ======*/


    /*=============================================
    =       Dl Menu Mobile Menu Activation        =
    =============================================*/
    
    $(function() {
        $( '#dl-menu' ).dlmenu({
            animationClasses : { 
                classin : 'dl-animate-in-2', 
                classout : 'dl-animate-out-2' 
            }
        });
    });

    $('.dl-trigger').on('click', function(){
        $('.overlay').toggleClass('open')
    });
    $('.overlay').on('click', function(){
        $('.overlay').removeClass('open')
    });
    
    /*=====  End of Dl Menu Mobile Menu Activation  ======*/


    /*=============================================
    =              Off Canvas Cart                =
    =============================================*/
    
    /*------- Off Canvas Cart Active Function -------*/

    $('.cart-toggle').on('click', function(){
        $('.off-canvas-cart-wrapper').addClass('open')
        $('.overlay').addClass('open-cart')
    });
    $('.cart-close').on('click', function(){
        $('.off-canvas-cart-wrapper').removeClass('open')
        $('.overlay').removeClass('open-cart')
    });
    $('.overlay').on('click', function(){
        $('.off-canvas-cart-wrapper').removeClass('open')
        $('.overlay').removeClass('open-cart')
    });


    /*------- Off Canvas Sidebar Active Function -------*/

    $('.sidebar-toggle').on('click', function(){
        $('.off-canvas-sidebar').addClass('open')
        $('.overlay').addClass('open-canvas')
    });
    $('.sidebar-close').on('click', function(){
        $('.off-canvas-sidebar').removeClass('open')
        $('.overlay').removeClass('open-canvas')
    });
    $('.overlay').on('click', function(){
        $('.off-canvas-sidebar').removeClass('open')
        $('.overlay').removeClass('open-canvas')
    });
    
    /*=====  End of Mobile Menu  ======*/

    /*=============================================
    =                 paroller                    =
    =============================================*/

    $('.paroller').paroller();

    /*=====  End of paroller ======*/
    

    /*=============================================
    =                 Slick Slider                =
    =============================================*/
    
    function mainSlider() {
            
        var BasicSlider = $('.slider-active');
            
        BasicSlider.on('init', function(e, slick) {
            var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
            
        BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
            
        BasicSlider.slick({
            // autoplay: true,
            autoplaySpeed: 10000,
            pauseOnHover: false,
            dots: false,
            fade: true,
			arrows: true,
            prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
            nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
            responsive: [
                { breakpoint: 767, settings: {} }
            ]
        });

        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function() {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay
                });
                $this.addClass($animationType).one(animationEndEvents, function() {
                    $this.removeClass($animationType);
                });
            });
        }
    }
    mainSlider();

    /*=====  End of Slick Slider  ======*/


    /*=============================================
    =           Resizing  select Active           =
    =============================================*/

    $('#resizing_select').change(function(){
        $("#width_tmp_option").html($('#resizing_select option:selected').text()); 
        $(this).width($("#width_tmp_select").width());  
    });

    /*=====  End of Slick Slider  ======*/


    /*=============================================
    =           Slick Collection Active           =
    =============================================*/

    $('.collection-active').slick({
        dots: true,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                  dots: true,
              }
            }
        ]
    });

    /*=====  End of Slick Collection Active  ======*/


    /*=============================================
    =           Slick Collection Active           =
    =============================================*/

    $('.menu-product-active').slick({
        dots: true,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                  dots: true,
              }
            }
        ]
    });

    $('.menu-product-active-2').slick({
        dots: true,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    /*=====  End of Slick Collection Active  ======*/


    /*=============================================
    =         Slick Testimonial Active            =
    =============================================*/

    $('.testimonial-active').slick({
        dots: true,
        autoplay: true,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    /*=====  End of Slick Testimonial Active  ======*/


    /*=============================================
    =               Product Active                =
    =============================================*/

    $('.product-active').slick({
        dots: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                dots: true,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });


    $('.product-category-active').slick({
        dots: false,
        infinite: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                dots: true,
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                dots: true,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });

    /*=====  End of Product Active  ======*/


    /*=============================================
    =           Slick Blog Active           =
    =============================================*/

    $('.blog-active').slick({
        dots: false,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                dots: true,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                dots: true,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                  dots: true,
              }
            }
        ]
    });

    /*=====  End of Slick Blog Active  ======*/


    /*=============================================
    =           Slick Blog Active           =
    =============================================*/

    $('.brand-active').slick({
        dots: false,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
              }
            }
        ]
    });

    /*=====  End of Slick Blog Active  ======*/


    /*=============================================
    =           Slick Blog 2 Active           =
    =============================================*/

    $('.brand-2-active').slick({
        dots: false,
        infinite: false,
        arrows: false,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 4,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
              }
            }
        ]
    });

    /*=====  End of Slick Blog Active  ======*/


    /*=============================================
    =               Magnific  Popup               =
    =============================================*/

    $('.video-popup').magnificPopup({
        type: 'iframe'
        // other options
    });

    $('.image-popup').magnificPopup({
        type: 'image',
        gallery:{
          enabled:true
        }
    });

    /*=====  End of Magnific  Popup ======*/


    /*=============================================
    =              Category Active                =
    =============================================*/

    $('.category-active').slick({
        dots: true,
        infinite: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });

    /*=====  End of Category Active ======*/


    /*=============================================
    =                 Countdown                   =
    =============================================*/

    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
          $this.html(event.strftime('<div class="countdown flex-wrap"><div class="single-countdown"><span class="count">%D</span><span class="value">Days</span></div><div class="single-countdown"><span class="count">%H</span><span class="value">Hrs</span></div><div class="single-countdown"><span class="count">%M</span><span class="value">Mins</span></div><div class="single-countdown"><span class="count">%S</span><span class="value">Secs</span></div></div>'));
        });
    });

    /*=====  End of Countdown ======*/


    /*=============================================
    =          Slick Testimonial Active           =
    =============================================*/
    
    $('.testimonial-active-2').slick({
        dots: false,
        autoplay: true,
        infinite: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1600,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });

    /*=====  End of Slick Testimonial Active ======*/


    /*=============================================
    =          Slick Testimonial Active           =
    =============================================*/
    
    $('.testimonial-active-3').slick({
        dots: true,
        autoplay: true,
        infinite: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });

    /*=====  End of Slick Testimonial Active ======*/


    /*=============================================
    =          Slick Testimonial Active           =
    =============================================*/
    
    $('.collections-active').slick({
        dots: false,
        infinite: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        speed: 800,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                dots: true,
            }
            },
            {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                dots: true,
            }
            },
            {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                dots: true,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                dots: true,
            }
            }
        ]
    });

    /*=====  End of Slick Testimonial Active ======*/


    /*=============================================
    =      slick Slider Product Quick View        =
    =============================================*/

    $('.quick-preview-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.quick-thumb-active',
        speed: 400,
    });
    
    $('.quick-thumb-active').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.quick-preview-active',
        dots: false,
        arrows: false,
        vertical: true,
        focusOnSelect: true,
        speed: 400,
    });

    /*=====  End of slick Slider Product Quick View ======*/


    /*=============================================
    =             slick Slider Blog Gallery                =
    =============================================*/

    $('.blog-image-gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow:'<span class="prev"><i class="fal fa-chevron-left"></i></span>',
        nextArrow: '<span class="next"><i class="fal fa-chevron-right"></i></span>',
        dots: false,
        speed: 800,
    });

    /*=====  End of slick Slider Blog Gallery ======*/

    /*=============================================
    =         Single Product Gallery Popup        =
    =============================================*/

    var $productPopupGalleryBtn = $('.product-gallery-popup'),
    $productPopupGallery = $productPopupGalleryBtn.data('images'),
    $openPhotoSwipe = function () {
        var pswpElement = $('.pswp')[0],
            items = $productPopupGallery,
            options = {
                history: false,
                focus: false,
                closeOnScroll: false,
                showAnimationDuration: 0,
                hideAnimationDuration: 0
            };
        new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options).init();
    };
    $productPopupGalleryBtn.on('click', $openPhotoSwipe);

    /*=====  End of Masonry  ======*/
    

    /*=============================================
    =             product quantity                =
    =============================================*/

    $('.add').on('click', function () {
        if ($(this).prev().val()) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.sub').on('click', function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });


    /*=====  End of product quantity  ======*/


    /*=============================================
    =           Product Color Active               =
    =============================================*/

    $('.color-list li').each(function() {
		var get_color = $(this).attr('data-color');
		$(this).css("background-color", get_color);
    });
    
	$('.color-list li').on("click", function() {
		$(this).siblings(this).removeClass('active').end().addClass('active');
    });
    
    /*=====  End of Product Size Active ======*/


    /*=============================================
    =                Price Range                  =
    =============================================*/
    
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 3900,
        values: [ 0, 3900 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "€" + ui.values[ 0 ] + " - €" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) + " - €" + $( "#slider-range" ).slider( "values", 1 ) );

    /*=====  End of Price Range ======*/


    /*=============================================
    =              product Zoom                   =
    =============================================*/

    $(".product-zoom").elevateZoom({
        gallery:'gallery_01',
        cursor: "crosshair",
        galleryActiveClass: 'active',
        easing : true, 
        imageCrossfade: true,
        zoomType: "inner"
    }); 

    //pass the images to Fancybox
    $(".product-zoom").bind("click", function(e) {  
        var ez =   $('.product-zoom').data('elevateZoom');	
            $.fancybox(ez.getGalleryList());
        return false;
    });

    /*=====  End of product Zoom ======*/


    /*=============================================
    =         Product Rating Active               =
    =============================================*/

    $('.rating-star a').each(function() {
		var get_color = $(this).attr('data-color');
		$(this).css("background-color", get_color);
    });
    
	$('.rating-star a').on("click", function() {
		$(this).siblings(this).removeClass('active').end().addClass('active');
    });
    
    /*=====  End of Product Size Active ======*/


    /*=============================================
    =         Product size Active               =
    =============================================*/

    $('.size-list li').each(function() {
		var get_color = $(this).attr('data-color');
		$(this).css("background-color", get_color);
    });
    
	$('.size-list li').on("click", function() {
		$(this).siblings(this).removeClass('active').end().addClass('active');
    });
    
    /*=====  End of Product Size Active ======*/


    /*=============================================
    =                 Select 2                     =
    =============================================*/

    $(".select2").select2({
        tags: true
    });    

    /*=====  End of select2  ======*/


    /*=============================================
    =        Checkout Account Form Toggle         =
    =============================================*/
    
    $('#account').on('click', function () {
		if ($('#account:checked').length > 0) {
			$('.checkout-account').slideDown();
		} else {
			$('.checkout-account').slideUp();
		}
	});
    
    /*=====  End of Shipping Form Toggle  ======*/


    /*=============================================
    =       Checkout Shipping Form Toggle         =
    =============================================*/
    
    $('#shipping').on('click', function () {
		if ($('#shipping:checked').length > 0) {
			$('.checkout-shipping').slideDown();
		} else {
			$('.checkout-shipping').slideUp();
		}
	});
    
    /*=====  End of Shipping Form Toggle  ======*/


    /*=============================================
    =         Payment  Method Select              =
    =============================================*/

    var checked = $('.payment-radio input:checked')
    if (checked) {
        $(checked).siblings('.payment-details').slideDown(500);
    };
    $('.payment-radio input').on('change', function() {
        $('.payment-details').slideUp(500);
        $(this).siblings('.payment-details').slideToggle(500);
    });

    /*=====  End of Payment  Method Select ======*/


    /*=============================================
    =               Progress Bar                  =
    =============================================*/
    
    if($('.progress-line').length){
        $('.progress-line').appear(function(){
            var el = $(this);
            var percent = el.data('width');
            $(el).css('width',percent+'%');
        },{accY: 0});
    }    

    /*=====  End of Progress Bar  ======*/


    /*=============================================
    =                 Counter Up                  =
    =============================================*/

    if($('.count').length){
        $('.count').appear(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        },{accY: 0});
    }

    /*=====  End of Counter Up  ======*/


    /*=============================================
    =                 Masonry                     =
    =============================================*/
    
    $('.container').imagesLoaded(function () {
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 1,
        });
    });

    

    /*=====  End of Masonry  ======*/


    /*=============================================
    =                Back to top                  =
    =============================================*/

    // Show or hide the sticky footer button
    $(window).on('scroll', function(event) {
        if($(this).scrollTop() > 600){
            $('.back-to-top').fadeIn(200)
        } else{
            $('.back-to-top').fadeOut(200)
        }
    });
    
    
    //Animate the scroll to yop
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });

    /*=====  End of Back to top  ======*/

    
    /*=============================================
    =             Slider Parallax                 =
    =============================================*/

    function parallaxMouse() {
        if ($('#sliderParallax').length) {
            var scene = document.getElementById('sliderParallax');
            var parallax = new Parallax(scene);
        };
    };
    parallaxMouse();


    /*=====  End of Slider Parallax  ======*/

   

    
});