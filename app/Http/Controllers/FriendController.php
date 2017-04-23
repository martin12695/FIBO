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

class FriendController
{
   /* 1 : pending
      2 : friend
      3 :Declined*/
    public function RequestFriend($request, $userId) {
        if ($request == 'addfriend') {
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
                        ->update(['status' => 2]);
                    return back();
                } catch (QueryException $e) {
                    return \Response::json(1);
                }
            } else {
                try {
                    DB::table('relationship')
                        ->where('user_one',$userId )
                        ->where('user_two',session('userId') )
                        ->update(['status' => 2]);
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
        return view('whoiknow',[
            'listPending'   => $pendingList,
            'listFriend'   => $friendList,
        ]);
    }
}