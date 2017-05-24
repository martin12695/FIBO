<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 14/01/2017
 * Time: 9:58 CH
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Auth\Access\Response;
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
use DateTime;


class AdminManagerController
{
    public function getAdmin(){
        $user = DB::table('users')
            ->where('level','=', 'Admin')
            ->orderBy('created', 'desc')
            ->paginate(6);
        $sex = DB::table('option_sex')
            ->join('users', 'option_sex.id', '=', 'sex')
            ->where('users.level','=', 'Admin')
            ->select('*')
            ->get();
        $come_form = DB::table('users')
            ->join('province', 'come_from', '=', 'province.id_province')
            ->where('users.level','=', 'Admin')
            ->select('users.id', 'province.id_province','province.value')
            ->get();
        return view('admin.staff',[
            'user' => $user,
            'sex' => $sex,
            'come_from' => $come_form,
        ]);
    }

    public function addUser(Request $request){

        $info = $request->input();
        $check_email = DB::table('users')->where('email', $info['email'])->first();
        if ( !empty($check_email) ) {
            return \Response::json(2);
        }else {
            $passMd5 = Hash::make($info['password']);
            $date = $info['birthday'];
            $member = 'Admin';
            $from = new DateTime($date);
            $to = new DateTime('today');
            try {

                DB::table('users')->insert(
                    ['email' => $info['email'],'sex' => $info['sex'],'password' => $passMd5, 'name' => $info['name'],
                        'phone' => $info['phone'],'come_from' => $info['province'], 'birthday' => $date,'level' => $member,
                        'age' => $from->diff($to)->y]
                );
                return \Response::json(1);
            }
            catch(Exception $e) {
                return \Response::json(0);
            }
        }
    }

    public function getEdit($id){
        $id = intval($id);
        if(!$id){
            return Redirect::to('/admin/staff');
        }
        $user = DB::table('users')->where('id','=',$id)->first();
        $province = DB::table('province')->get();
        return view('admin.editStaff', [
            'user' => $user,
            'province' => $province
        ]);
    }

    public function postEdit(Request $request,$id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/staff');
        }else{
            $user = DB::table('users')->where('id','=',$id)->first();
            $info = $request->input();
            $email = $info['email'];
            $password = $info['password'];
            $passHash = Hash::make($password);
            if($email != $user->email){
                DB::table('users')
                    ->where('id', $id)
                    ->update(['email' => $email]);
                return \Response::json(0);
            }
            if ($email == $user->email)
            {
                if( Input::has('name') ){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['name' => $info['name']]);
                }
                if( Input::has('sex') ){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['sex' => $info['sex']]);
                }
                if( Input::has('birthday') ){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['birthday' => $info['birthday']]);
                }
                if( Input::has('province') ){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['come_from' => $info['province']]);
                }
                if( Input::has('phone') ){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['phone' => $info['phone']]);
                }
                if ($password){
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['password' => $passHash]);
                }
                $term = '';
                if( Input::has('level') ){
                    if($info['level'] == '1'){
                        $term = 'Admin';
                    }
                    if($info['level'] == '2'){
                        $term = 'Member';
                    }
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['level' => $term]);
                }
            }
            return \Response::json(1);
        }
    }

}
