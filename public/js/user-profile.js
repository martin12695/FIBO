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
    if(!confirm("Bạn có thực muốn xóa !"))
        return false;
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

function addFriend(userId)
{
    $.ajax({
        type: "GET",
        url: '/friend/addfriend/' + userId ,
        success: function(data) {
            if (data == 0) {
                $('#addfriend_btn').text('Đã gửi yêu cầu kết bạn');
            } else {
            }

        },

    });

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: '/sendnotify',
        data : {
            to_user_id :userId,
            message: 1,
        },

    });

}

function unFriend(userId)
{

    swal({
            title: "Bạn có chắc chắn muốn hủy kết bạn?",
            text: "Hủy kết bạn là một hành động không nên khi tham gia FIBO",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Vâng, đồng ý",
            cancelButtonText: 'Hủy',
            closeOnConfirm: true
        },
        function(){
            $.ajax({
                type: "GET",
                url: '/friend/unfriend/' + userId ,
                success: function(data) {
                    if (data == 0) {
                        window.location.replace('/user/profile/'+userId);
                    }
                },

            });
        });


}

function unCouple(userId)
{

    swal({
            title: "Bạn có chắc chắn muốn hủy hẹn hò?",
            text: "Hủy hẹn hò có thể dẫn tới những hậu quả nghiêm trọng!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Vâng, đồng ý",
            cancelButtonText: 'Hủy',
            closeOnConfirm: true
        },
        function(){
            $.ajax({
                type: "GET",
                url: '/friend/uncouple/' + userId ,
                success: function(data) {
                    if (data == 0) {
                        window.location.replace('/user/profile/'+userId);
                    }
                },

            });
        });


}

function addCouple(userId)
{
    $.ajax({
        type: "GET",
        url: '/friend/requestcouple/' + userId ,
        success: function(data) {
            if (data == 0) {
                $('#addcouple_btn').text('Đã gửi lời mời hẹn hò');
            }
            if (data == 2) {
                swal("Không thể hẹn hò!", "Rất tiếc người này đang hẹn hò với người khác!")
            }


        },

    });

}