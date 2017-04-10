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
        //Danh sách yêu cầu kết bạn
        $pendingList = array();
        $list_pending = DB::table('relationship')
            ->where(function ($query) {
                $query->where('user_one', session('userId'))
                    ->orwhere('user_two', session('userId'));
            })
            ->where('status', 1)
            ->where('action_user','!=', session('userId'))
            ->get();

        foreach ($list_pending as $request) {
            if ($request->user_one != session('userId') ) {
                $userTemp = $request->user_one;
            }else {
                $userTemp = $request->user_two;
            }
            $pending_temp = DB::table('user')
                ->where('id', $userTemp)
                ->first();
            $from = new DateTime($pending_temp->birthday);
            $to   = new DateTime('today');
            $pending_temp->yob = $from->diff($to)->y;
            array_push($pendingList,$pending_temp);
        }

        //Danh sách bạn bè
        $friendList = array();
        $list_friend = DB::table('relationship')
            ->where(function ($query) {
                $query->where('user_one', session('userId'))
                    ->orwhere('user_two', session('userId'));
            })
            ->where('status', 2)
            ->get();
        foreach ($list_friend as $request) {
            if ($request->user_one != session('userId') ) {
                $userTemp = $request->user_one;
            }else {
                $userTemp = $request->user_two;
            }
            $friend_temp = DB::table('user')
                ->where('id', $userTemp)
                ->first();
            $from = new DateTime($friend_temp->birthday);
            $to   = new DateTime('today');
            $friend_temp->yob = $from->diff($to)->y;
            array_push($friendList,$friend_temp);
        }
        return view('whoiknow',[
            'listPending'   => $pendingList,
            'listFriend'   => $friendList,
        ]);
    }
}