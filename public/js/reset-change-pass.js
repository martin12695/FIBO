$("#btn-submit-change").click(function() {
    //get input field values
    var emailText = $('#email').val();
    var new_password = $('#password').val();
    var confirmPassword = $('#password-confirm').val();
    /********validate all our form fields***********/
    /* Name field validation  */
    if(emailText == ""){
        $('#email').css('border-color','red');
        $('#error_reset_password').show();
        setTimeout(function () {
            $('#error_reset_password').hide();
            $('#email').removeAttr('style');
        }, 3000);

    }
    if(new_password == ""){
        $('#password').css('border-color','red');
        $('#error_new_password').show();
        setTimeout(function () {
            $('#error_new_password').hide();
            $('#password').removeAttr('style');
        }, 3000);

    }
    if(confirmPassword == ""){
        $('#password-confirm').css('border-color','red');
        $('#error_confirm_password').show();
        setTimeout(function () {
            $('#error_confirm_password').hide();
            $('#password-confirm').removeAttr('style');
        }, 3000);

    }
});