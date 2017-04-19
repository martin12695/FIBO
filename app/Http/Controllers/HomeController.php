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
use Illuminate\Support\Facades\Hash;


class HomeController
{

    public function signin(Request $request) {
        $info = $request->input();
        if (Auth::attempt(['email' => $info['email'], 'password' => $info['pass']])) {
            session(['userId' => Auth::id(),
            ]);
            return \Response::json(0);

        }

        /*$login = DB::select('select * from users where email = ? and password = ? limit 1', [$info['email'], $passMd5]);
        if (!empty($login)) {
            session(['userId' => $login[0]->id,
                'fullname' => $login[0]->name
            ]);
            return \Response::json(1);

        }
        else {
            return \Response::json(1);
        }*/
    }

    public function init_signup() {
        $province =  DB::table('province')->get();
        return view('term_signup',[
            'province'   => $province
        ]);

    }

    public function initHome() {
        $recommen = DB::select('SELECT * FROM users
                            where id != ? and id NOT IN(
                                SELECT user_one
                                FROM relationship )
   	                        and id NOT IN(
                              SELECT user_two	
                              FROM relationship )
                            ',
                    [session('userId')]);
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
            'listPeople'   => $recommen
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

            try {
                DB::table('users')->insert(
                    ['email' => $info['email'], 'password' => $passMd5, 'name' => $info['name'],
                        'phone' => $info['phone'],'come_from' => $info['from'], 'birthday' => $date]
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
        return Redirect::to('/');
    }
}
