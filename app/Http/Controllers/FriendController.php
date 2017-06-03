<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/1/2017
 * Time: 5:06 PM
 */

namespace App\Http\Controllers;
use DB;
use DateTime;
use Illuminate\Database\QueryException;
use App\Http\Middleware\FriendService;
use App\Events\Notify;
use Auth;
class FriendController
{
   /* 1 : pending
      2 : friend
      3 :peding couple
      4 : couple
   */
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
        return view('whoiknow',[
            'listPending'   => $pendingList,
            'listFriend'   => $friendList,
            'listCouple'   => $peddingCouple
        ]);
    }
}