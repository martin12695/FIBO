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