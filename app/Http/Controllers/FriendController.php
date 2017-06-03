<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/1/2017
 * Time: 5:06 PM
 */

namespace App\Http\Controllers;
use DB;
use App;
use Auth;
use DateTime;
use Illuminate\Database\QueryException;
use App\Http\Middleware\FriendService;
use Illuminate\Support\Facades\Redirect;
use Vinkla\Pusher\Facades\Pusher;
use Vinkla\Pusher\PusherManager;
use App\Events\Notify;


class FriendController
{
    /* 1 : pending
       2 : friend
       3 :peding couple
       4 : couple
    */
    var $pusher, $user, $chanel;

    const DEFAULT_CHAT_CHANEL = 'presence-online';

    public function __construct()
    {
        $this->pusher = App::make('pusher');
        $this->user = Auth::user();
        $this->chanel = self::DEFAULT_CHAT_CHANEL;
    }

    public function RequestFriend($request, $userId) {
        if ($request == 'addfriend') {
            DB::table('notification')->insert(
                ['user_id' => $userId, 'sender_id' => Auth::id(),
                    'type_id' => 1]
            );
            if (session('userId') < $userId) {
                try {
                    DB::table('relationship')->insert(
                        ['user_one' => session('userId'), 'user_two' => $userId,
                            'status' => 1, 'action_user' => session('userId')]
                    );
                    return \Response::json(0);
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            } else {
                try {
                    DB::table('relationship')->insert(
                        ['user_one' => $userId, 'user_two' => session('userId'),
                            'status' => 1, 'action_user' => session('userId')]
                    );
                    return \Response::json(0);
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            }
        }

        if ($request == 'accept') {
            if (session('userId') < $userId) {
                try {
                    DB::table('relationship')
                        ->where('user_one',session('userId') )
                        ->where('user_two',$userId )
                        ->where('status',1)
                        ->update(['status' => 2,'action_user' =>session('userId') ]);
                    return back();
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            } else {
                try {
                    DB::table('relationship')
                        ->where('user_one',$userId )
                        ->where('user_two',session('userId') )
                        ->where('status',1)
                        ->update(['status' => 2,'action_user' =>session('userId') ]);
                    return back();
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            }
        }
        if ( $request == 'requestcouple') {
            if (session('userId') < $userId) {
                try {
                    DB::table('relationship')
                        ->where('user_one',session('userId') )
                        ->where('user_two',$userId )
                        ->where('status',2)
                        ->update(['status' => 3,'action_user' =>session('userId') ]);
                    event(new Notify(Auth::user()->name, 'notify-'.$userId, 'muốn hẹn hò với bạn'));
                    return \Response::json(0);
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            } else {
                try {
                    DB::table('relationship')
                        ->where('user_one',$userId )
                        ->where('user_two',session('userId') )
                        ->where('status',2)
                        ->update(['status' => 3,'action_user' =>session('userId') ]);
                    event(new Notify(Auth::user()->name, 'notify-'.$userId, 'muốn hẹn hò với bạn'));
                    return \Response::json(0);
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            }
        }

        if ($request == 'acceptCouple') {
            if (session('userId') < $userId) {
                try {
                    DB::table('relationship')
                        ->where('user_one',session('userId') )
                        ->where('user_two',$userId )
                        ->where('status',3)
                        ->update(['status' => 4,'action_user' =>session('userId') ]);
                    return back();
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            } else {
                try {
                    DB::table('relationship')
                        ->where('user_one',$userId )
                        ->where('user_two',session('userId') )
                        ->where('status',3)
                        ->update(['status' => 4,'action_user' =>session('userId') ]);
                    return back();
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            }
        }
    }

    public function whoIKnow() {
        $pendingList = FriendService::peddingList();
        $friendList = FriendService::friendList ();
        $peddingCouple = FriendService::peddingCouple ();
        if (!Auth::User()){
            return Redirect::to('/');
        }
        return view('whoiknow',[
            'listPending'   => $pendingList,
            'listFriend'   => $friendList,
            'listCouple'   => $peddingCouple,
            'chanel'    => $this->chanel
        ]);
    }

    public function Online(){
        $member = [
            'name' => Auth::user()->name,
            'id'    => Auth::user()->id,
            'avatar' => Auth::user()->avatar
        ];
        $user_id = Auth::user()->id;
        echo $this->pusher->presence_auth($this->chanel, $_POST['socket_id'], $user_id, $member);
    }
}