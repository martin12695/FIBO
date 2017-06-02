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


class ReportController
{
    public function postReport(Request $request, $id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/user/profile/'.$id.'');
        }else{
            $user = DB::table('users')->where('id', $id)->first();
            $info = $request->input();
            if( isset($info['btn-submit-rp']) ){
                $radio = $info['report'];
                if ( $radio == '1'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Tên tài khoản không hợp lệ.'
                    ]);
                }elseif ($radio == '2'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Ảnh cá nhân không hợp lệ.'
                    ]);
                }elseif ($radio == '3'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Thông tin cá nhân không hợp lệ.'
                    ]);
                }elseif ($radio == '4'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Khác...'
                    ]);
                }
                return \Response::json(1);
            }
        }
    }
}
