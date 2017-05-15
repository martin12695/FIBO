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
use DateTime;

class UserController
{
    public function initPage() {
        if(!session()->has('userId')){
            return redirect('/');
        }else {
            $info = DB::table('users')->where('id', session('userId'))->first();
            $sex = DB::table('users')
                ->join('option_sex', 'sex', '=', 'option_sex.id')
                ->where('users.id', Auth::id())
                ->select('users.id', 'option_sex.id','option_sex.value')
                ->first();

            $option_sex = DB::table('option_sex')->get();

            $bodies = DB::table('user_description')
                ->join('option_body', 'body', '=', 'option_body.id')
                ->where('user_description.user_id', Auth::id())
                ->select('user_description.id', 'option_body.id','option_body.value')
                ->first();

            $finances = DB::table('user_description')
                ->join('option_finace', 'finance', '=', 'option_finace.id')
                ->where('user_description.user_id', Auth::id())
                ->select('user_description.id', 'option_finace.id','option_finace.value')
                ->first();

            $findSubs = DB::table('user_description')
                ->join('option_subject_find', 'subject_find', '=', 'option_subject_find.id')
                ->where('user_description.user_id', Auth::id())
                ->select('user_description.id', 'option_subject_find.id','option_subject_find.value')
                ->first();

            $findAges = DB::table('user_description')
                ->join('option_subject_eag', 'subject_eag', '=', 'option_subject_eag.id')
                ->where('user_description.user_id', Auth::id())
                ->select('user_description.id', 'option_subject_eag.id','option_subject_eag.value')
                ->first();

            $cities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where('users.id', Auth::id())
                ->select('users.id', 'province.id_province','province.value')
                ->first();

            $schools = DB::table('users')
                ->join('option_school', 'school', '=', 'option_school.id')
                ->where('users.id', Auth::id())
                ->select('users.id', 'option_school.id','option_school.value')
                ->first();

            $findAge = DB::table('option_subject_eag')->get();
            $findSub = DB::table('option_subject_find')->get();
            $finance = DB::table('option_finace')->get();
            $province =  DB::table('province')->get();
            $school = DB::table('option_school')->get();
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
            $date = new DateTime($info->birthday);
            $info->birthday = $date->format('d/m/Y');
            return view('term_profile',[
                'info_basic' => $info,
                'sex'        => $sex,
                'bodies'      => $bodies,
                'finances'   => $finances,
                'findSubs'   => $findSubs,
                'findAges'   => $findAges,
                'cities'     => $cities,
                'schools'    => $schools,
                'option_sex' => $option_sex,
                'infoDes'    => $infoDes,
                'infoHobby'  => $infoHobby,
                'findAge'    => $findAge,
                'findSub'    => $findSub,
                'finance'    => $finance,
                'body'       => $body,
                'province'   => $province,
                'school'     => $school
            ]);
        }
    }

    public function updateInfo(Request $request) {
        $info = $request->input();

        if( Input::has('phone') ){
            DB::table('users')
                ->where('id', Auth::id())
                ->update(['phone' => $info['phone']]);
        }
        if( Input::has('mssv') ){
            DB::table('users')
                ->where('id', Auth::id())
                ->update(['mssv' => $info['mssv']]);
        }
        if( Input::has('province')){
            DB::table('users')
                ->where('id', Auth::id())
                ->update(['come_from' => $info['province']]);
        }

        if( Input::has('school') ) {
            DB::table('users')
                ->where('id', Auth::id())
                ->update(['school' => $info['school']]);
        }

        DB::insert('INSERT INTO user_hobby (user_id, music, movie, sport, hobby) VALUES(?, ?, ?, ?, ?) 
                   ON DUPLICATE KEY UPDATE music= ?, movie= ?, sport= ?, hobby= ?',
            [session('userId'),$info['music'],
                $info['movie'], $info['sport'],
                $info['hobby'], $info['music'],
                $info['movie'], $info['sport'],
                $info['hobby'],
            ]);

        DB::insert('INSERT INTO user_description (user_id, height, weight, body, finance, hair, priority_in_life, subject_find, subject_eag ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?) 
                   ON DUPLICATE KEY UPDATE height= ?, weight= ?, body = ?, finance= ?, hair = ?, priority_in_life = ?, subject_find = ?, subject_eag = ?',
            [session('userId'),$info['height'],
                $info['weight'], $info['body'],
                $info['finance'], $info['hair'],
                $info['priority_in_life'], $info['sub'],
                $info['sub_age'],$info['height'],
                $info['weight'], $info['body'],
                $info['finance'], $info['hair'],
                $info['priority_in_life'], $info['sub'],
                $info['sub_age'],
            ]);
        return back()->with('success','Cập nhật thành công!');

    }
}