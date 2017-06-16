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
use Carbon;

class DatingController
{
    public function initPage() {
        $couple = FriendService::getCouple ();
        $mylocation = json_decode(Auth::user()->latest_position);
        $events = DB::table('dating')
            ->where(function ($query) {
                $query->where('user_one', Auth::id())
                    ->orwhere('user_two', Auth::id());
            })
            ->where('date', '>=' ,date('Y-m-d'))
            ->get();
        foreach ( $events as $event){
            $event->location = json_decode($event->location);
            $event->date =  date('d/m/Y', strtotime($event->date));
        }
        return view('dating',[
            'myLocation'   => $mylocation,
            'couple'       =>$couple,
            'events'        => $events
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