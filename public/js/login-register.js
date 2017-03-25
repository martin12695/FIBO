var sign_form = angular.module('sign_form', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
sign_form.controller('sign_form_ctrl', function($scope) {
    $scope.pass ='';
    $scope.email ='';
    $scope.email_reg = $scope.pass_reg =  $scope.repass_reg = $scope.name_reg = $scope.phone_reg = '';
    $scope.sign_in = function() {
        if ( $scope.email =='' || $scope.pass ==''){
            shakeModal(1);
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    email: $scope.email,
                    pass: $scope.pass
                },
                url: '/signin',
                success: function (data) {
                    if ( data == 1) {
                        shakeModal(2);
                    }else {
                        swal({
                                title: "Đăng nhập thành công",
                                text: "Quay về trang chủ!",
                                type: "success",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            },
                            function(){
                                window.location.replace('/');
                            });
                    }

                },

            });
        }
    };
    $scope.sign_up = function() {
        if ( $scope.email_reg =='' || $scope.pass_reg =='' || $scope.phone_reg =='' || $scope.name_reg =='' ){
            shakeModal(1);
        }
        if ( $scope.pass_reg !=  $scope.repass_reg ) {
            shakeModal(3);
            return;
        }
        else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: {
                    email: $scope.email_reg,
                    pass: $scope.pass_reg,
                    repass: $scope.repass_reg,
                    name: $scope.name_reg,
                    phone: $scope.phone_reg,
                },
                url: '/signup',
                success: function (data) {
                    if ( data == 1) {
                        shakeModal(2);
                    }
                    if ( data == 0) {
                        swal({
                                title: "Đăng ký thành công",
                                text: "Quay về trang chủ!",
                                type: "success",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            },
                            function(){
                                window.location.replace('/');
                            });
                    }

                },

            });
        }
    }
});

function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Đăng ký với');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Đăng nhập với');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function shakeModal(option){
    $('#loginModal .modal-dialog').addClass('shake');
            if (option == 1) {
                $('.error').addClass('alert alert-danger').html("Các trường không được để trống");
            }
            if (option == 2) {
                $('.error').addClass('alert alert-danger').html("Email hoặc mật khẩu không đúng!");
            }
            if (option == 3) {
                $('.error').addClass('alert alert-danger').html("Mật khẩu nhập lại không khớp!");
            }
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   