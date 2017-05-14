$("#btn-res-change-pass").click(function() {
    //get input field values
    var email = $('#email').val();
    var password = $('#password').val();

    var password_confirm = $('#password-confirm').val();
    function validateEmail(email) {
        var re = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        return re.test(email);
    }
    /********validate all our form fields***********/
    /* Name field validation  */
    if(!validateEmail(email)){
        $('#email').css('border-color','red');
        $('#error_reset_email').show();
        setTimeout(function () {
            $('#error_reset_email').hide();
            $('#email').removeAttr('style');
        }, 3000);
        if ($.trim(password).length == 0) {
            $('#password').css('border-color','red');
            $('#error_reset_password').show();
            setTimeout(function () {
                $('#error_reset_password').hide();
                $('#password').removeAttr('style');
            }, 3000);
            return false;
        }
        if ($.trim(password_confirm).length == 0) {
            $('#password-confirm').css('border-color','red');
            $('#error_reset_confirm_password').show();
            setTimeout(function () {
                $('#error_reset_confirm_password').hide();
                $('#password-confirm').removeAttr('style');
            }, 3000);
            return false;
        }
        return false;
    }else{
        if ($.trim(password).length == 0) {
            $('#password').css('border-color','red');
            $('#error_reset_password').show();
            setTimeout(function () {
                $('#error_reset_password').hide();
                $('#password').removeAttr('style');
            }, 3000);
            return false;
        }
        if(password.length < '6'){
            $('#password').css('border-color','red');
            $('#error_reset_password_2').show();
            setTimeout(function () {
                $('#error_reset_password_2').hide();
                $('#password').removeAttr('style');
            }, 3000);
            return false;
        }
        if ($.trim(password_confirm).length == 0) {
            $('#password-confirm').css('border-color','red');
            $('#error_reset_confirm_password').show();
            setTimeout(function () {
                $('#error_reset_confirm_password').hide();
                $('#password-confirm').removeAttr('style');
            }, 3000);
            return false;
        }
    }
});
