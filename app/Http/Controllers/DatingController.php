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
use Illuminate\Http\Request;

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

    public function bookDating(Request $request){
        $info = $request->input();
        $location = json_encode($info['location']);
        $date = date_create_from_format('d/m/Y', $info['day']);
        $date = $date->format('Y-m-d');
        DB::table('dating')->insert(
            [
                'user_one' => Auth::id(), 'user_two' => $info['id_couple'],
                'location_name' => $info['location_name'], 'time' => $info['time'],
                'date' => $date, 'location' => $location
            ]
        );
        return \Response::json(0);
    }
}