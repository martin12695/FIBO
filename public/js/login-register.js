/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
var sign_form = angular.module('sign_form', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
sign_form.controller('sign_form_ctrl', function($scope) {
    console.log($scope.pass);
    $scope.pass ='';
    $scope.email =''
    $scope.sign_in = function() {
        if ( $scope.email =='' || $scope.pass ==''){
            shakeModal();
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
                        shakeModal_after();
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

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Email/ Mật khẩu không được để trống");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

function shakeModal_after(){
    $('#loginModal .modal-dialog').addClass('shake');
    $('.error').addClass('alert alert-danger').html("Email hoặc mật khẩu không đúng!");
    $('input[type="password"]').val('');
    setTimeout( function(){
        $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000 );
}

   