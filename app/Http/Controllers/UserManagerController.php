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
use Auth, Mail;
use App\User;
use Illuminate\Support\Facades\Hash;
use DateTime;


class UserManagerController
{
    public function getUser(){
        if(Auth::check()){
            $user = DB::table('users')
                ->where([['id', '!=', Auth::id()], ['level','!=', 'Admin'], ['level', '!=', 'Quest']])
                ->orderBy('created', 'desc')
                ->paginate(6);
            $sex = DB::table('option_sex')
                ->join('users', 'option_sex.id', '=', 'sex')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin'], ['level', '!=', 'Quest']])
                ->select('*')
                ->get();
            $come_form = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin'], ['level', '!=', 'Quest']])
                ->select('users.id', 'province.id_province','province.value')
                ->get();
            return view('admin.member',[
                'user' => $user,
                'sex' => $sex,
                'come_from' => $come_form,
            ]);
        }else
            return view('admin.login');

    }

    public function addUser(Request $request){

        $info = $request->input();
        $check_email = DB::table('users')->where('email', $info['email'])->first();
        if ( !empty($check_email) ) {
            return \Response::json(2);
        }else {
            $passMd5 = Hash::make($info['password']);
            $date = $info['birthday'];
            $member = 'Member';
            $from = new DateTime($date);
            $to = new DateTime('today');
            if($from->diff($to)->y >= '18' && $from->diff($to)->y <= '60'){
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
            }else
                return \Response::json(3);

        }
    }

    public function getEdit($id){
        $id = intval($id);
        if(!$id){
            return Redirect::to('/admin/member');
        }
        $user = DB::table('users')->where('id','=',$id)->first();
        $province = DB::table('province')->get();
        return view('admin.editMember', [
            'user' => $user,
            'province' => $province
        ]);
    }

    public function postEdit(Request $request,$id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/member');
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
                if($user->birthday == $info['birthday']){
                    $from = new DateTime($info['birthday']);
                    $to = new DateTime('today');
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['age' => $from->diff($to)->y]);
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
                    if($info['level'] == '2'){
                        $term = 'Member';
                    }
                    if($info['level'] == '3'){
                        $term = 'Quest';
                    }
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['level' => $term]);
                }
            }
            return \Response::json(1);
        }
    }

    public function getDel($id){

        if (!$id){
            return Redirect::to('/admin/member');
        }else{
            DB::table('users')->where('id', $id)->delete();
            return back();
        }
    }

    public function getTermMember(){
        if(Auth::check()){
            $user = DB::table('users')
                ->where([['id', '!=', Auth::id()], ['level','!=', 'Admin'], ['level', '!=', 'Member']])
                ->orderBy('created', 'desc')
                ->paginate(6);
            $sex = DB::table('option_sex')
                ->join('users', 'option_sex.id', '=', 'sex')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin'], ['level', '!=', 'Member']])
                ->select('*')
                ->get();
            $come_form = DB::table('users')
                ->join('province', 'come_from', '=', 'province.id_province')
                ->where([['users.id', '!=', Auth::id()], ['users.level','!=', 'Admin'], ['level', '!=', 'Member']])
                ->select('users.id', 'province.id_province','province.value')
                ->get();
            return view('admin.term-member',[
                'user' => $user,
                'sex' => $sex,
                'come_from' => $come_form,
            ]);
        }else
            return view('admin.login');
    }

    public function delTermMember($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
        }else{
            DB::table('relationship')
                ->where('action_user', '=', $id)->delete();
            DB::table('users')->where('id', $id)->delete();
            return back();
        }
    }

    public function getEditTermMember($id){
        $id = intval($id);
        if(!$id){
            return Redirect::to('/admin/term-member');
        }
        $user = DB::table('users')->where('id','=',$id)->first();
        $province = DB::table('province')->get();
        return view('admin.editTermMember', [
            'user' => $user,
            'province' => $province
        ]);
    }

    public function postEditTermMember(Request $request, $id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
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
                if($user->birthday == $info['birthday']){
                    $from = new DateTime($info['birthday']);
                    $to = new DateTime('today');
                    DB::table('users')
                        ->where('id', $id)
                        ->update(['age' => $from->diff($to)->y]);
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
            }
            return \Response::json(1);
        }
    }

    public function getCheckTermMember($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
        }else {
            $getImage = DB::table('users')
                ->join('user_image_authen', 'user_id', '=', 'users.id')
                ->where('user_id', $id)
                ->select('users.id','user_id', 'link')
                ->get();
            $getID = DB::table('users')
                ->join('user_image_authen', 'user_id', '=', 'users.id')
                ->where('user_id', $id)
                ->select('users.id','user_id', 'link')
                ->first();
            if (isset($getImage) && isset($getID)){
                return view('admin.checkTermMember', [
                    'getImage' => $getImage,
                    'getID' => $getID
                ]);
            }
            return view('admin.checkTermMember');
        }
    }

    public function getCheckedTermMember($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
        }else {
            $term = 'Member';
            DB::table('users')->where('id', $id)->update(['level' => $term]);
            return Redirect::to('/admin/term-member');
        }
    }

    public function sendMail($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
        }else {
            $user = DB::table('users')->where('id', $id)->first();;

            Mail::send('blank', array(
                'user' => $user,
                'dear' => 'Chào ',
                'firstContent' => 'Rất cám ơn bạn đã đăng ký thành viên tại Website: http://www.fibo.site,',
                'first_conclusion' => 'Thân,',
                'second_conclusion' => 'Mọi thông tin xin liên hệ: support@fibo.site.',
                'content' => 'Chúng tôi vô cùng xin lỗi vì hình ảnh chứng thực của bạn không hợp lệ, nên bạn chưa thể làm thành viên chính thức của Website được.'),
                function ($m) use ($user) {
                $m->from('support@fibo.site', 'FIBO-SUPPORT');
                $m->to($user->email, $user->name)->subject('Your reminder!');
            });

            echo "<script>
                alert('Đã gửi email thành công');
                window.location = '".url('/admin/term-member')."'
                </script>";
        }
    }
}
