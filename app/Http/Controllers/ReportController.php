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
                        'reason'    => 'Tên tài khoản không hợp lệ.',
                        'status'    => '0'
                    ]);
                }elseif ($radio == '2'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Ảnh cá nhân không hợp lệ.',
                        'status'    => '0'
                    ]);
                }elseif ($radio == '3'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Thông tin cá nhân không hợp lệ.',
                        'status'    => '0'
                    ]);
                }elseif ($radio == '4'){
                    DB::table('report')->insert([
                        'user_id' => $id,
                        'user_name'  => $user->name,
                        'user_email'    => $user->email,
                        'reason'    => 'Khác...',
                        'status'    => '0'
                    ]);
                }
                echo "<script>
                alert('Đã gửi tố cáo thành công, chúng tôi sẽ xem xét yêu cầu của bạn!');
                window.location = '".url('/user/profile/'.$id)."'
                </script>";
            }
        }
    }

    public function getList(){
        $user = DB::table('report')
            ->orderby('create_report', 'desc')->paginate(6);
        return view('admin.report',[
            'user' => $user
        ]);
    }

    public function delReport($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/report-member');
        }else{
            DB::table('relationship')
                ->where('user_one',$id)
                ->orWhere('user_two', $id)
                ->delete();
            DB::table('users')
                ->where('id', '=', $id)->delete();
            DB::table('report')
                ->where('user_id', '=', $id)->delete();
            return back();
        }
    }

    public function cancelReport($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/report-member');
        }else{
            DB::table('report')
                ->where('user_id', $id)
                ->update(['status' => '1']);//status = 0: dang bi to cao; status = 1: da bi huy to cao
            return back();
        }
    }

    public function blockReport($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/report-member');
        }else{
            DB::table('report')
                ->where('user_id', $id)
                ->update(['status' => '2']); //status = 2 dang bi block
            return back();
        }
    }
}
