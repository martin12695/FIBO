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
            return view('user_profile',[
                'info_basic' => $info,
                'infoDes'    => $infoDes,
                'findAge'    => $findAge,
                'findSub'    => $findSub,
                'finace'     => $finace,
                'body'       => $body
            ]);
        }
    }
}