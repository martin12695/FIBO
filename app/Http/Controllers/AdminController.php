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


class AdminController
{

    public function initHome() {

        $user = DB::table('users')->where('id', '=', Auth::id())->first();
        $comment = DB::table('comment')->count();
        $cfs = DB::table('confession')->where('status', '=', '1')->count();
        $check_cfs = DB::table('confession')->where('status', '=', '0')->count();
        $admin = DB::table('users')
            ->where('level','=', 'Admin')
            ->count();
        $member = DB::table('users')
            ->where('level','=', 'Member')
            ->count();
        $check_member = DB::table('users')
            ->where('level','=', 'Quest')
            ->count();
        return view('admin.index',[
            'user'         => $user,
            'comment'      => $comment,
            'cfs'          => $cfs,
            'admin'        => $admin,
            'member'       => $member,
            'check_cfs'    => $check_cfs,
            'check_member' => $check_member,
        ]);
    }

    public function index (){
        if (Auth::check()) {
            return $this->initHome();
        }else
            return view('admin.login');
    }

    public function getLogin(){
        $authCheck = DB::table('users')->where([['id', '=', Auth::id()],['level', '=', 'Admin']])->first();
        if( $authCheck ){
            return view('admin.login');
        }else{
            return Redirect::to('/');
        }
    }

    public function postLogin(Request $request) {
        $info = $request->input();
        if (Auth::attempt(['email' => $info['email'], 'password' => $info['password']])) {
            session(['UserName' => Auth::user()->name]);
            return Redirect::to('/admin/index');
        }
        else
            return Redirect::to('/admin/login');
    }

    public function logout() {
        session()->flush();
        Auth::logout();
        return Redirect::to('/');
    }

}
