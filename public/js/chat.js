var username;
var to_user;
$(document).ready(function()
{
    username = $('#username').html();
    $('[data-toggle="tooltip"]').tooltip();
    // pullData();

    $(document).keyup(function(e) {
        if (e.keyCode == 13)
            sendMessage();
    });
});

function pullData(id)
{
    retrieveChatMessages(id);
    //retrieveTypingStatus(id);
    setTimeout(pullData,3000,id);
}

function makeChat(id)
{
    $('#chat-window').html('');
    to_user = id;
    getOldMessage(id)
    pullData(id);
}

function  getOldMessage(id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            id: id,
        } ,
        url: '/getOldMessages',
        success: function(data) {
            var i;
            for (i = 0; i < data.length; ++i) {
                if (data[i].sender_username == id ) {
                    $('#chat-window').append('<br><div>'+data[i].message+'</div><br>');
                } else {
                    $('#chat-window').append('<br><div style="text-align: right">'+data[i].message+'</div><br>');
                }

            }

        },

    });

}

function retrieveChatMessages(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            id: id,
        } ,
        url: '/retrieveChatMessages',
        success: function(data) {
            if (data.length > 0)
                $('#chat-window').append('<br><div>'+data+'</div><br>');

        },

    });

}

function retrieveTypingStatus(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            id: id,
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
                id : to_user
            } ,
            url: '/sendMessage',
            success: function() {
                $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');
                $('#text').val('');

            },

        });
    }
}

function isTyping(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            id: id,
        } ,
        url: '/isTyping',


    });
}

function notTyping(id)
{
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data : {
            id: id,
        } ,
        url: '/notTyping',


    });
}
