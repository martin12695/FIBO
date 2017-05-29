<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 5/29/2017
 * Time: 10:00 PM
 */

namespace App\Http\Controllers;
use App\Http\Middleware\FriendService;
use DB;
use Auth;

class DatingController
{
    public function initPage() {
        $couple = FriendService::getCouple ();
        $mylocation = json_decode(Auth::user()->latest_position);
        return view('dating',[
            'myLocation'   => $mylocation,
            'couple'       =>$couple
        ]);
    }
}