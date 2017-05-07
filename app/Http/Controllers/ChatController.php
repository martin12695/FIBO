<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\FriendService;
class ChatMessage extends Model
{
    protected $table='chat_messages';
}
class Chat extends Model
{
    protected $table='chats';
}
class ChatController extends BaseController

{
    public function initChat () {
        $friendList = FriendService::friendList ();
        return view('term_chat',[
            'listFriend'   => $friendList,
        ]);
    }

    public function sendMessage()
    {
        $username = Auth::id();
        $text = Input::get('text');
        $to_user = Input::get('id');
        $chatMessage = new ChatMessage();
        $chatMessage->sender_username = $username;
        $chatMessage->message = $text;
        $chatMessage->to_user = $to_user;
        $chatMessage->save();
    }

   /* public function isTyping()
    {
        $username = Input::get('id');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = true;
        else
            $chat->user2_is_typing = true;
        $chat->save();
    }

    public function notTyping()
    {
        $username = Input::get('username');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
            $chat->user1_is_typing = false;
        else
            $chat->user2_is_typing = false;
        $chat->save();
    }*/

    public function retrieveChatMessages()
    {
        $id_send = Input::get('id');

        $message = ChatMessage::where('sender_username', '=', $id_send)->where('to_user', '=', Auth::id())->where('read', '=', false)->first();

        if (count($message) > 0)
        {
            $message->read = true;
            $message->save();
            return $message->message;
        }
    }

    /*public function retrieveTypingStatus()
    {
        $username = Input::get('username');

        $chat = Chat::find(1);
        if ($chat->user1 == $username)
        {
            if ($chat->user2_is_typing)
                return $chat->user2;
        }
        else
        {
            if ($chat->user1_is_typing)
                return $chat->user1;
        }
    }*/
}