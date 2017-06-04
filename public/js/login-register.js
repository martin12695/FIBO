var sign_form = angular.module('sign_form', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
sign_form.controller('sign_form_ctrl', function($scope, $http) {
    $( "#birthday" ).datepicker({ dateFormat: 'dd/mm/yy' });
    $scope.button_info = 'show';
    $scope.loading = 'hide';
    $scope.message = 'hide';
    $scope.check_field = 'hide';
    $scope.pass ='';
    $scope.email ='';
    $scope.email_reg = $scope.pass_reg =  $scope.repass_reg = $scope.name_reg = $scope.phone_reg = $scope.sex_reg = '';
    $scope.sign_in = function() {
        if ( $scope.email =='' || $scope.pass ==''){
            $scope.check_field = 'show';
        } else {
            $scope.button_info = 'hide';
            $scope.loading = 'show';
            $http({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/signin',
                method: "POST",
                data: {
                    email: $scope.email,
                    pass: $scope.pass
                },
            }).then(function (data){
                if (data.data == 1) {
                    $scope.message = 'show';
                    $scope.button_info = 'show';
                    $scope.loading = 'hide';
                } else {
                    window.location.replace('/');
                }
            },function (error){

            });
        }
    };
    $scope.sign_up = function() {
        if ( $scope.email_reg =='' || $scope.pass_reg =='' || $scope.phone_reg =='' || $scope.name_reg =='' ){
        }
        if ( $scope.pass_reg !=  $scope.repass_reg ) {

        }
        else {
            $http({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/signup',
                method: "POST",
                data: {
                    email: $scope.email_reg,
                    sex: $scope.sex_reg,
                    pass: $scope.pass_reg,
                    repass: $scope.repass_reg,
                    name: $scope.name_reg,
                    phone: $scope.phone_reg,
                    birthday : $scope.birthday,
                    from :  $scope.from,
                },
            }).then(function (data){
                if (data.data == 1) {
                    $scope.message = 'show';
                    $scope.button_info = 'show';
                    $scope.loading = 'hide';
                } else if (data.data == 0) {
                    window.location.replace('/signin');
                }else {
                    $scope.exist_email = true;
                }
            },function (error){

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

