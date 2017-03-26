<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 3/25/2017
 * Time: 10:48 PM
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;


class UserController
{
    public function initPage() {
        if(!session()->has('userId')){
            return redirect('/');
        }else {
            $info = DB::table('user')->where('id', session('userId'))->first();
            $findAge = DB::table('option_subject_eag')->get();
            $findSub = DB::table('option_subject_find')->get();
            $finace = DB::table('option_finace')->get();
            $body = DB::table('option_body')->get();
            $infoDes =  DB::table('user_description')->where('user_id', session('userId'))->first();
            if (empty($infoDes)) {
                $infoDes = new \stdClass();
                $infoDes->height = '';
                $infoDes->weight = '';
                $infoDes->body = 1;
                $infoDes->finance = 1;
                $infoDes->hair = '';
                $infoDes->priority_in_life = '';
                $infoDes->subject_find = 1;
                $infoDes->subject_eag = 1;
            }
            $infoHobby =  DB::table('user_hobby')->where('user_id', session('userId'))->first();
            if (empty($infoHobby)) {
                $infoHobby = new \stdClass();
                $infoHobby->music = '';
                $infoHobby->movie = '';
                $infoHobby->sport = '';
                $infoHobby->hobby = '';
            }

            return view('user_profile',[
                'info_basic' => $info,
                'infoDes'    => $infoDes,
                'infoHobby'  => $infoHobby,
                'findAge'    => $findAge,
                'findSub'    => $findSub,
                'finace'     => $finace,
                'body'       => $body
            ]);
        }
    }

    public function updateInfo(Request $request) {
        $info = $request->input();
        DB::insert('INSERT INTO user_hobby (user_id, music, movie, sport, hobby) VALUES(?, ?, ?, ?, ?) 
                   ON DUPLICATE KEY UPDATE music= ?, movie= ?, sport= ?, hobby= ?',
                    [session('userId'),$info['music'],
                    $info['movie'], $info['sport'],
                    $info['hobby'], $info['music'],
                    $info['movie'], $info['sport'],
                    $info['hobby'],
                    ]);
        return redirect('/user/profile');
    }
}