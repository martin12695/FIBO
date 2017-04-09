<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/1/2017
 * Time: 5:06 PM
 */

namespace App\Http\Controllers;
use DB;
use Illuminate\Database\QueryException;

class FriendController
{
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
    }
}