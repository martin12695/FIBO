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


class HomeController
{
    public function initHome() {
        $recommen = DB::select('SELECT * FROM users
                            where id != ? and id NOT IN(
                                SELECT user_one 
                                FROM relationship
                                 where user_two = ?)
   	                        and id NOT IN(
                              SELECT user_two	
                              FROM relationship 
                              where user_one = ?        
                            )
                            ',
            [session('userId'),Auth::id(),Auth::id()]);
        $user = DB::table('users')->where('id', Auth::id())->first();
        $friend_list = array();
        //$list_user =  DB::table('user')->get();

        /*$list_request = DB::table('relationship')
            ->where('user_one', session('userId'))
            ->orwhere('user_two', session('userId'))
            ->where('status', 1)
            ->get();*/
        /*foreach ($list_request as $request) {
            if ($request->user_one != session('userId') ) {
                $userTemp = $request->user_one;
            }else {
                $userTemp = $request->user_two;
            }
            $friend_temp = DB::table('user')
                ->where('id', $userTemp)
                ->first();
            array_push($friend_list,$friend_temp);
        }*/

        return view('index',[
            'listPeople'   => $recommen,
            'user'         =>$user
        ]);

    }
    public function index (){
        if (Auth::check()) {
            return $this->initHome();
        }
        else {
            return view('intro');
        }
    }
    public function signin(Request $request) {
        $info = $request->input();
        if (Auth::attempt(['email' => $info['email'], 'password' => $info['pass']])) {
            session(['userId' => Auth::id(),
            ]);
            return \Response::json(0);

        }
        else {
            return \Response::json(1);
        }
    }

    public function init_signup() {
        $province =  DB::table('province')->get();
        $sex = DB::table('option_sex')->get();
        $count = DB::table('users')->count();
        return view('term_signup',[
            'province'   => $province,
            'sex'        => $sex,
            'count'      => $count
        ]);

    }


    public function signup(Request $request) {

        $info = $request->input();
        if ( $info['pass'] != ($info['repass']) ) {
            return \Response::json(1);
        }
        $check_email = DB::table('users')->where('email', $info['email'])->first();
        if ( !empty($check_email) ) {
            return \Response::json(2);
        }else {
            $passMd5 = Hash::make($info['pass']);
            $date = date_create_from_format('d/m/Y', $info['birthday']);
            $date = $date->format('Y-m-d');
            $level = 'Quest';
            $from = new DateTime($date);
            $to = new DateTime('today');
            try {
                DB::table('users')->insert(
                    ['email' => $info['email'],'sex' => $info['sex'],'password' => $passMd5, 'name' => $info['name'],
                        'phone' => $info['phone'],'come_from' => $info['from'], 'birthday' => $date,
                        'level' => $level,'age' => $from->diff($to)->y]
                );
                return \Response::json(0);
            }
            catch(Exception $e) {
                return \Response::json(1);
            }
        }
    }

    public function signout() {
        session()->flush();
        Auth::logout();
        return Redirect::to('/');
    }

    public function changePassword()
    {
        return view('change-password');
    }

    public function changePasswordPost(Request $request)
    {
        if (Auth::check()) {
            $info = $request->input();
            if(Hash::check($info['old_password'], Auth::user()->password)){
                $passHash = Hash::make($info['new_password']);
                DB::table('users')
                    ->where('id', Auth::id())
                    ->update(['password' => $passHash]);
                return \Response::json(1);
            }else{
                return \Response::json(2);
            }
        } else {
            return \Response::json(3);
        }
    }
}
