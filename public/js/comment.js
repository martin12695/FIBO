/**
 * Created by tuanh on 5/14/2017.
 */
function sendComment(id)
{
    if ($('#detail_comment').val() ) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data: {
                postId: id,
                detail: $('#detail_comment').val(),
            },
            url: '/confession/addComment',
            success: function (data) {
                if (data == 0)
                    $('.comment-list').append(
                        '<div class="media">' +
                        '<a class="pull-left" href="#">' +
                        '<img class="media-object avatar" src="/' + user.avatar + '" alt="">' +
                        '</a>' +
                        '<div class="media-body">' +
                        '<h4 class="media-heading">' + user.name + '</h4>' +
                        $('#detail_comment').val() +
                        '</div>'
                    );

                $('#detail_comment').val('');
            },
        });
    }

}