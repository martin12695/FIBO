<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14/01/2017
 * Time: 9:58 CH
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use App\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserManagerController
{
    public function getUser(){
        $user = DB::table('users')->where([['id', '!=', Auth::id()], ['level','!=', 'Admin']])->get();
        $sex = DB::table('option_sex')
            ->join('users', 'option_sex.id', '=', 'sex')
            ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin']])
            ->select('*')
            ->get();
        $come_form = DB::table('users')
            ->join('province', 'come_from', '=', 'province.id_province')
            ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin']])
            ->select('users.id', 'province.id_province','province.value')
            ->get();
        return view('admin.member',[
           'user' => $user,
            'sex' => $sex,
            'come_from' => $come_form,
        ]);
    }
}
