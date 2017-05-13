/**
 * Created by tuanh on 5/14/2017.
 */
function sendComment(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            postID: id,
        } ,
        url: '/retrieveChatMessages',
        success: function(data) {
            if (data.length > 0)
                $('#chat-window').append('<br><div>'+data+'</div><br>');

        },

    });

}