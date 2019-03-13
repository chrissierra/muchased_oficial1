(function($) {
    "use strict";


    $(window).on("load", function() { // makes sure the whole site is loaded

        //move to hash after loading
        if (window.location.hash  && $(window.location.hash).length)  {
				var menuheigt = $(".header").height();
				$('html, body').stop().animate({
					scrollTop: $(window.location.hash).offset().top - menuheigt + 2
				}, 300, 'linear');
        }

        // Custom transform modifier for Stellar.js
        $.stellar.positionProperty.transform3d = {
            setPosition: function(element, newLeft, originalLeft, newTop, originalTop) {
                var distance = newTop - originalTop;
                element.css('transform', 'translate3d(0, ' + distance + 'px, 0');
            }
        };
        if (!Modernizr.touch) {
            //stellar/parallax trigger

            if ($('body').hasClass("admin-bar")) {
                $.stellar({
                    positionProperty: 'transform3d',
                    horizontalScrolling: false,
                    hideDistantElements: false,
                    responsive: true,
                    verticalOffset: 32,
                });

            } else {
                $.stellar({
                    positionProperty: 'transform3d',
                    horizontalScrolling: false,
                    hideDistantElements: false,
                    responsive: true
                });
            }
        } else {
            $('body').addClass('no-para');
        }

    });


    //post slider setting
    if ($('.post-slider').find('.slide').length > 1) {
        $(".post-slider").owlCarousel({
            navigation: false, // Hide next and prev buttons
            slideSpeed: 300,
            autoplay: true,
            autoHeight: true,
            pagination: false,
            paginationSpeed: 300,
            singleItem: true,
            transitionStyle: "fade"
        });
    }


    // script popup image
    $('.popup-img').magnificPopup({
        type: 'image'
    });


    //create menu for tablet/mobile
    $(".menu-box >div>ul").clone(false).find("ul,li").removeAttr("id").remove(".sub-menu").appendTo($(".mobile-menu"));
    $(".mobile-menu .sub-menu").remove();
    $('.mobile-menu').on('show.bs.collapse', function() {
        $('body').on('click', function() {
            $('.mobile-menu').collapse('hide');
        })
    })

    //toggle menu
    $('.menu-btn').on('click', function() {
        $('.mobile-menu').collapse({
            toggle: false
        });
    })


    //menu for tablet/mobile,slider button, about button,menu link scrolling
    $('.mobile-menu a[href^="#"],.slide-btn[href^="#"],.one-page-menu a[href^="#"]').on('click', function(event) {
        var $anchor = $(this);
        var menuheigt = $(".nav-box").height();
		if ( $(this).attr("href") !=='#') {
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - menuheigt
        }, 800, 'linear');
		event.preventDefault();
		}
    });


    //sticky navigation
    $(".for-sticky").sticky({
        topSpacing: 0
    });

    // Video responsive
    $("body").fitVids();



    //script for navigation(superfish)
    $('.menu-box ul').superfish({
        delay: 400, //delay on mouseout
        animation: {
            opacity: 'show',
            height: 'show'
        }, // fade-in and slide-down animation
        animationOut: {
            opacity: 'hide',
            height: 'hide'
        },
        speed: 200, //  animation speed
        speedOut: 200,
        autoArrows: false // disable generation of arrow mark-up
    })


    //button scroll
    $('.go-btn[href^="#"]').on('click', function(event) {
        var $anchor = $(this);
        var menuheigt = $(".header").height();
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - menuheigt + 2
        }, 800, 'linear');
    });

    //blog header slider
    $(".blog-header-slider").owlCarousel({
        navigation: true,
        navigationText: ['<span class="slide-nav inleft"><i class="fa fa-long-arrow-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-long-arrow-right"></i></span >'],
        slideSpeed: 300,
        stopOnHover: true,
        autoplay: true,
        autoHeight: true,
        pagination: true,
        paginationSpeed: 300,
        singleItem: false,
        transitionStyle: "fade",
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
    });

    //replace the data-background into background image
    $(".blog-img-bg").each(function() {
        var imG = $(this).data('background');
        $(this).css('background-image', "url('" + imG + "') "

        );
    });

    //blog team setting
    $(".blog-slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        autoplay: true,
        autoHeight: true,
        pagination: false,
        paginationSpeed: 300,
        singleItem: true,
        mouseDrag: true,
        navigationText: ['<span class="slide-nav inleft"><i class="fa fa-long-arrow-left"></i></span >', '<span class="slide-nav inright"><i class="fa fa-long-arrow-right"></i></span >'],
        stopOnHover: false,
        transitionStyle: "fade"
    });

    //isotope setting(blog masonry)
    var $blogcontainer = $('.blog-mason');
    $blogcontainer.imagesLoaded(function() {
        $blogcontainer.isotope();
    });

    $(window).on('resize', function() {
        setTimeout(function() {
            $('.blog-mason').isotope('layout');
        }, 1000);

    });
    //add image mask
    $('.bg-with-mask').each(function() {
        $(this).append('<div class="bg-mask"></div>');
    });

    $(".parent-container").each(function() {
        $(this).parent('div').addClass('container');
    });
	


})(jQuery);