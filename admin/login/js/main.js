(function($) {
    "use strict";
    var input = $('.validate-input .input100');
    $('.validate-form').on('submit', function() {
        var check = true;
        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        return check;
    });
    $('.validate-form .input100').each(function() {
        $(this).focus(function() {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }
})(jQuery);

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
// /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
/^[a-zA-Z0-9._%+-]+@bluebugsoft\.com$/gm;
    if (!regex.test(email)) {
        return false;
    }
    else {
        return true;
    }
}