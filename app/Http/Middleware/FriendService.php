<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/23/2017
 * Time: 4:04 PM
 */

namespace App\Http\Middleware;
use DB;
use DateTime;

class FriendService
{
    public static function friendList () {
        $friendList = array();
        $list_friend = DB::table('relationship')
            ->where(function ($query) {
                $query->where('user_one', session('userId'))
                    ->orwhere('user_two', session('userId'));
            })
            ->where(function ($query) {
                $query->where('status', 2)
                    ->orwhere('status', 3)
                    ->orwhere('status', 4);
            })
            ->get();
        foreach ($list_friend as $request) {
            if ($request->user_one != session('userId')) {
                $userTemp = $request->user_one;
            } else {
                $userTemp = $request->user_two;
            }
            $friend_temp = DB::table('users')
                ->where('id', $userTemp)
                ->first();
            $friend_temp->latest_position = json_decode($friend_temp->latest_position);
            $from = new DateTime($friend_temp->birthday);
            $to = new DateTime('today');
            $friend_temp->yob = $from->diff($to)->y;
            array_push($friendList, $friend_temp);
        }
        return $friendList;
    }

    public static function peddingList () {
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
            if ($request->user_one != session('userId')) {
                $userTemp = $request->user_one;
            } else {
                $userTemp = $request->user_two;
            }
            $pending_temp = DB::table('users')
                ->where('id', $userTemp)
                ->first();
            $from = new DateTime($pending_temp->birthday);
            $to = new DateTime('today');
            $pending_temp->yob = $from->diff($to)->y;
            array_push($pendingList, $pending_temp);
        }
        return $pendingList;
    }

    public static function peddingCouple () {
        $pendingList = array();
        $list_pending = DB::table('relationship')
            ->where(function ($query) {
                $query->where('user_one', session('userId'))
                    ->orwhere('user_two', session('userId'));
            })
            ->where('status', 3)
            ->where('action_user','!=', session('userId'))
            ->get();

        foreach ($list_pending as $request) {
            if ($request->user_one != session('userId')) {
                $userTemp = $request->user_one;
            } else {
                $userTemp = $request->user_two;
            }
            $pending_temp = DB::table('users')
                ->where('id', $userTemp)
                ->first();
            $from = new DateTime($pending_temp->birthday);
            $to = new DateTime('today');
            $pending_temp->yob = $from->diff($to)->y;
            array_push($pendingList, $pending_temp);
        }
        return $pendingList;
    }

    public static function getCouple () {
        $couple = null;
        $couple_temp = DB::table('relationship')
            ->where(function ($query) {
                $query->where('user_one', session('userId'))
                    ->orwhere('user_two', session('userId'));
            })
            ->where('status', 4)
            ->first();
            if (!empty($couple_temp)) {
                if ($couple_temp->user_one != session('userId')) {
                    $userTemp = $couple_temp->user_one;
                } else {
                    $userTemp = $couple_temp->user_two;
                }
                $couple = DB::table('users')
                    ->where('id', $userTemp)
                    ->first();
                $couple->latest_position = json_decode($couple->latest_position);
            }
        return $couple;
    }

    public static function checkCouple($id){
        $check = DB::table('relationship')
            ->where(function ($query) use ($id){
                $query->where('user_one', $id)
                    ->orwhere('user_two', $id);
            })
            ->where('status', 4)
            ->first();
        if ($check != null) {
            return true;
        } else {
            return false;
        }
    }


}