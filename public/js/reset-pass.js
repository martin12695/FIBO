$("#btn-submit-reset-password").click(function() {
    //get input field values
    var emailtext = $('#emailText').val();
    function validateEmail(email) {
        var re = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
        return re.test(email);
    }
    /********validate all our form fields***********/
    /* Name field validation  */
    if(!validateEmail(emailtext)){
        $('#emailText').css('border-color','red');
        $('#error_reset_password').show();
        setTimeout(function () {
            $('#error_reset_password').hide();
            $('#emailText').removeAttr('style');
        }, 3000);
        return false;
    }
});
