$("#btn-submit-reset-password").click(function() {
    //get input field values
    var emailtext = $('#emailText').val();
    /********validate all our form fields***********/
    /* Name field validation  */
    if(emailtext == ""){
        $('#emailText').css('border-color','red');
        $('#error_reset_password').show();
        setTimeout(function () {
            $('#error_reset_password').hide();
            $('#emailText').removeAttr('style');
        }, 3000);
    }
});