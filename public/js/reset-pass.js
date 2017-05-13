$("#btn-submit-reset-password").click(function() {
    //get input field values
    var emailtext = $('#emailText').val();
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    /********validate all our form fields***********/
    /* Name field validation  */
    if(!validateEmail(emailtext)){
        $('#emailText').css('border-color','red');
        $('#error_reset_password-1').show();
        setTimeout(function () {
            $('#error_reset_password-1').hide();
            $('#emailText').removeAttr('style');
        }, 3000);
    }
});