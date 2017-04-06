$(document).ready(function(e) {
    $( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });


});
var profile = angular.module('profile', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');

});
profile.controller('profile_ctrl', function($scope, $http) {
    $( "#birthday" ).datepicker({ dateFormat: 'dd/mm/yy' });
    $scope.name_info = 'show';

});