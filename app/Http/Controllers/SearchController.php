<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DateTime;
use Illuminate\Contracts\View\View;


class SearchController
{
    public function getSearch()
    {
        if (Auth::check()) {
            $getSearch = DB::table('users')->where('id', '!=', Auth::id())->orderBy('id', 'desc')->paginate(12);

            $cities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->select('*')
                ->get();

            return view('search', array('listPeople' => $getSearch, 'listUser' => $cities))->render();

        } else {
            return view('error.404');
        }
    }

    public function initPage($id) {
        if(!$id){
            return redirect('/');
        }else {
            $info = DB::table('users')->where('id', $id)->first();
            $sex = DB::table('users')
                ->join('option_sex', 'sex', '=', 'option_sex.id')
                ->where('users.id', $id)
                ->select('users.id', 'option_sex.id','option_sex.value')
                ->first();

            $option_sex = DB::table('option_sex')->get();

            $bodies = DB::table('user_description')
                ->join('option_body', 'body', '=', 'option_body.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_body.id','option_body.value')
                ->first();

            $finances = DB::table('user_description')
                ->join('option_finace', 'finance', '=', 'option_finace.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_finace.id','option_finace.value')
                ->first();

            $findSubs = DB::table('user_description')
                ->join('option_subject_find', 'subject_find', '=', 'option_subject_find.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_subject_find.id','option_subject_find.value')
                ->first();

            $findAges = DB::table('user_description')
                ->join('option_subject_eag', 'subject_eag', '=', 'option_subject_eag.id')
                ->where('user_description.user_id', $id)
                ->select('user_description.id', 'option_subject_eag.id','option_subject_eag.value')
                ->first();

            $cities = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where('users.id', $id)
                ->select('users.id', 'province.id_province','province.value')
                ->first();

            $schools = DB::table('users')
                ->join('option_school', 'school', '=', 'option_school.id')
                ->where('users.id', $id)
                ->select('users.id', 'option_school.id','option_school.value')
                ->first();

            $findAge = DB::table('option_subject_eag')->get();
            $findSub = DB::table('option_subject_find')->get();
            $finance = DB::table('option_finace')->get();
            $province =  DB::table('province')->get();
            $school = DB::table('option_school')->get();
            $body = DB::table('option_body')->get();
            $infoDes =  DB::table('user_description')->where('user_id', $id)->first();
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
            $infoHobby =  DB::table('user_hobby')->where('user_id', $id)->first();
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
}
