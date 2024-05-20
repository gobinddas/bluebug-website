$ = jQuery.noConflict()
$(document).ready(function() {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
    });

// service slider 
    $(".hero-service-collection").slick({
        centerMode: false,
        arrows: false,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 2,
        dots: false,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
            }
        },
    ]
    });



    $(".top-articles").slick({
        centerMode: false,
        arrows: false,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 1,
        dots: true,
        autoplaySpeed: 4000
        
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