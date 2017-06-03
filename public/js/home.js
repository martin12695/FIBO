$(document).ready(function(e) {
    $('.block_carousel').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    getLocation();

});

var home = angular.module('home', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
home.controller('home_ctrl', function($scope, $http) {
    $scope.button_info = [];
    $scope.addFriend = function(userId) {
            $http({
                url: './friend/addfriend/' + userId ,
                method: "GET",
            }).then(function (data){
                if (data.data == 0) {
                    $scope.button_info[userId] = 'Đã gửi yêu cầu kết bạn';
                } else {
                }
            },function (error){

            });
    };
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert('Trình duyệt không hỗ trợ tính năng cập nhật vị trí');
    }
}

function showPosition(position) {
    var a= $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude+ ','+ position.coords.longitude +'&sensor=true', function(data) {
      if (data.results[0].formatted_address){
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "POST",
              data : {
                  location_name : data.results[0].formatted_address,
                  lat : position.coords.latitude,
                  lng : position.coords.longitude,
              } ,
              url: '/user/updatePosition',

          });
      }
    });
}

angular.bootstrap(document.getElementById("App2"), ['home']);
