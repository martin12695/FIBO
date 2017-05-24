$(document).ready(function(e) {
    $( "#birthday" ).datepicker({ dateFormat: 'dd/mm/yy' });
});
var profile = angular.module('profile', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
profile.controller('profile_ctrl', function($scope, $http) {

    $scope.name_info = 'show';

});

function delImage(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '/deleteImage/'+ id,
        success: function(data) {
            $('.photo_image[data-image="' + id + '"]').remove();
            $.fancybox.close();

        },

    });


}