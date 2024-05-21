$ = jQuery.noConflict()
$(document).ready(function() {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 50) sticky.addClass("fixed-header");
        else sticky.removeClass("fixed-header");
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
    // form validation script

    
        $(document).ready(function () {
          
            
            $('#phone').blur(function (e) {
                
                e.preventDefault();

                const phone = $('#phone').val();
 
                if (phone === '') {
                    $('#invalid_phone').text("Input Fields can not be Empty!!");
                    $('#invalid_phone').css("color", "red");
                    $('#submit').attr("disabled",true);
                    return false;
                }
                else if (IsPhone(phone) === false) {
                    $('#invalid_phone').text("Entered phone is not Valid!!");
                    $('#invalid_phone').css("color", "red");
                    $('#submit').attr("disabled",true);
                    return false;
                }
                else{
                    $('#invalid_phone').text("");
                    $('#invalid_phone').css("color", "green");
                    $('#submit').attr("disabled",false);
                    return true;
                }
                return false;
 
            });
            $('#email').blur(function (e) {
                e.preventDefault();

                const email = $('#email').val();
 
                if (email === '') {
                    $('#invalid_email').text("Input Fields can not be Empty!!");
                    $('#invalid_email').css("color", "red");
                    $('#submit').attr("disabled",true);
                    return false;
                }
                else if (IsEmail(email) === false) {
                    $('#invalid_email').text("Entered Email is not Valid!!");
                    $('#invalid_email').css("color", "red");
                    $('#submit').attr("disabled",true);
                    return false;
                }
                else{
                    $('#invalid_email').text("");
                    $('#invalid_email').css("color", "green");
                    $('#submit').attr("disabled",false);
                    return true;
                }
                return false;
            });
        });
 

        function IsPhone(phone) {
            const regex =
            /^(97|98)\d{8}$/;
            if (!regex.test(phone)) {
                return false;
            }
            else {
                return true;
            }
        }
        function IsEmail(email) {
            const regex =
        /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            }
            else {
                return true;
            }
        }
        
   


});
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll('.common-overview-description');
    elements.forEach(function(element) {
      var lineHeight = parseInt(window.getComputedStyle(element).lineHeight);
      var maxHeight = lineHeight * 3; // Adjust this value to the desired number of lines
      var text = element.innerText;
  
      // Truncate text if it exceeds the max height
      if (element.offsetHeight > maxHeight) {
        while (element.offsetHeight > maxHeight) {
          text = text.substring(0, text.lastIndexOf(' '));
          element.innerText = text + '...';
        }
      }
    });
  });