$("#btn-submit").click(function() {
    //get input field values
    var old_password = $('#oldPassword').val();
    var new_password = $('#newPassword').val();
    var flag = true;
    /********validate all our form fields***********/
    /* Name field validation  */
    if(old_password == ""){
        $('#oldPassword').css('border-color','red');
        $('#error_old_password').show();
        setTimeout(function () {
            $('#error_old_password').hide();
            $('#oldPassword').removeAttr('style');
        }, 3000);
        flag = false;
    }
    if(new_password == ""){
        $('#newPassword').css('border-color','red');
        $('#error_new_password').show();
        setTimeout(function () {
            $('#error_new_password').hide();
            $('#newPassword').removeAttr('style');
        }, 3000);
        flag = false;
    }

    if(flag)
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: "change-password",
            data: {
                old_password : old_password,
                new_password : new_password
            },
            beforeSend: function()
            {

            },
            complete: function () {

            },
            success :  function(data) {
                if(data == 1){
                    $('#success_change_password').show();
                    setTimeout(function () {
                        $('#success_change_password').hide();
                        window.location.href = '/';
                    }, 2000);

                }
                if(data == 2){
                    $('#oldPassword').css('border-color','red');
                    $('#errors_old_password').show();
                    setTimeout(function () {
                        $('#errors_old_password').hide();
                        $('#oldPassword').removeAttr('style');
                    }, 3000);
                    flag = false;
                }
            }
        });
    }
});