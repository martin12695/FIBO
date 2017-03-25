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



class HomeController
{

    public function signin(Request $request) {
        $info = $request->input();
        $passMd5 = md5($info['pass']);;
        $login = DB::select('select * from user where email = ? and password = ? limit 1', [$info['email'], $passMd5]);
        if (!empty($login)) {
            session(['userId' => $login[0]->id,
                'fullname' => $login[0]->name
            ]);
            return \Response::json(0);

        }
        else {
            return \Response::json(1);
        }
    }

    public function signup(Request $request) {
        $info = $request->input();
        if ( $info['pass'] != ($info['repass']) ) {
            return \Response::json(1);
        }
        $check_email = DB::table('user')->where('email', $info['email'])->first();
        if ( !empty($check_email) ) {
            return \Response::json(2);
        }else {
            $passMd5 = md5($info['pass']);
            try {
                DB::table('user')->insert(
                    ['email' => $info['email'], 'password' => $passMd5, 'name' => $info['name'], 'phone' => $info['phone']]
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
