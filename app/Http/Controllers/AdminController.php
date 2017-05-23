<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14/01/2017
 * Time: 9:58 CH
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
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminController
{
    public function getLogin(){
        $authCheck = DB::table('users')->where([['id', '=', Auth::id()],['level', '=', '1']])->first();
        if( $authCheck ){
            return view('admin.login');
        }else{
            return Redirect::to('/');
        }
    }

    public function postLogin(Request $request) {
        $info = $request->input();
        if (Auth::attempt(['email' => $info['email'], 'password' => $info['password']])) {
            session(['AdminId' => Auth::id()]);
            return view('admin.index');
        }
        else {
            return view('admin.login');
        }
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return Redirect::to('/');
    }
}
