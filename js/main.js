$ = jQuery.noConflict()
$(document).ready(function() {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });


    $(".hero-service-collection").slick({
        centerMode: true,
        arrows: false,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 2,
        dots: false,
        autoplaySpeed: 3000
    });

    // magnific popup
    $('.gallery .gallery-magnific,.image-categories').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
        }

    });

    // testimonial slider
    $('.testimonial .testi-wrapper').slick({
        dots: false,
        infinite: true,
        speed: 300,
        arrows: true,
        prevArrow: "<span class='slick-arrow left'><img src='images/prev.png'></slick>",
        nextArrow: "<span class='slick-arrow right'><img src='images/next.png'></slick>",
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                }
            },
        ]
    });
    // Scroll Event (Go to Top on Click)
    //To scroll top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $(".scrollToTop").fadeIn().addClass("d-block");
        } else {
            $(".scrollToTop").fadeOut().removeClass("d-block");
        }
    });
    //Click event to scroll to top
    $(".scrollToTop").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });


});