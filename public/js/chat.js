var username;

$(document).ready(function()
{
    username = $('#username').html();

    pullData();

    $(document).keyup(function(e) {
        if (e.keyCode == 13)
            sendMessage();
        else
            isTyping();
    });
});

function pullData()
{
    retrieveChatMessages();
    retrieveTypingStatus();
    setTimeout(pullData,3000);
}

function retrieveChatMessages()
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            username: username,
        } ,
        url: '/retrieveChatMessages',
        success: function(data) {
            if (data.length > 0)
                $('#chat-window').append('<br><div>'+data+'</div><br>');

        },

    });

}

function retrieveTypingStatus()
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            username: username,
        } ,
        url: '/retrieveTypingStatus',
        success: function(username) {
            if (username.length > 0)
                $('#typingStatus').html(username+' is typing');
            else
                $('#typingStatus').html('');

        },

    });
}

function sendMessage()
{
    var text = $('#text').val();

    if (text.length > 0)
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            data : {
                text: text,
                username: username,
                to_user : 3,
            } ,
            url: '/sendMessage',
            success: function() {
                $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');
                $('#text').val('');
                notTyping();

            },

        });
    }
}

function isTyping()
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            username: username
        } ,
        url: '/isTyping',


    });
}

function notTyping()
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            username: username
        } ,
        url: '/notTyping',


    });
}
