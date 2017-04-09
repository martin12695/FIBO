$(document).ready(function(e) {
    $('.block_carousel').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

var home = angular.module('home', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
home.controller('home_ctrl', function($scope, $http) {
    $scope.button_info = 'Kết bạn';
    $scope.add_friend = function(userId) {
            $http({
                url: './friend/addfriend/' + userId ,
                method: "GET",
            }).then(function (data){
                if (data.data == 0) {
                    $scope.button_info = 'Đã gửi yêu cầu kết bạn';
                } else {
                }
            },function (error){

            });
    };
});