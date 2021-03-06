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
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Events\Notify;
use DateTime;
use App;

class HomeController
{
    var $pusher, $user, $chanel;

    const DEFAULT_CHAT_CHANEL = 'presence-online';

    public function __construct()
    {
        $this->pusher = App::make('pusher');
        $this->user = Auth::user();
        $this->chanel = self::DEFAULT_CHAT_CHANEL;
    }
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
        $events = DB::table('dating')
            ->where(function ($query) {
                $query->where('user_one', Auth::id())
                    ->orwhere('user_two', Auth::id());
            })
            ->where('date', '>=' ,date('Y-m-d'))
            ->get();
        foreach ( $events as $event){
            $event->location = json_decode($event->location);
            $event->date =  date('d/m/Y', strtotime($event->date));
        }

        return view('index',[
            'listPeople'   => $recommen,
            'user'         =>$user,
            'chanel'    => $this->chanel,
            'events'    => $events
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
        $get_email = DB::table('report')->where('user_email','=', $info['email'])->first();
        if ($get_email != null){
            if ($get_email->status == '2'){
                $term = $get_email->user_email;
                if (Auth::attempt(['email' => $term, 'password' => $info['pass']])) {
                    return \Response::json(2);
                }
            }
            if ($get_email->status == '0' || $get_email->status == '1'){
                $term_char = $get_email->user_email;
                if (Auth::attempt(['email' => $term_char, 'password' => $info['pass']])) {
                    session(['userId' => Auth::id(),
                    ]);
                    return \Response::json(0);

                }
                else {
                    return \Response::json(1);
                }
            }

        } else{
            if (Auth::attempt(['email' => $info['email'], 'password' => $info['pass']])) {
                session(['userId' => Auth::id(),
                ]);
                return \Response::json(0);

            }
            else {
                return \Response::json(1);
            }
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

    public function sendNotifi(Request $request)
    {
        $info = $request->input();
        if ($info['message'] == 1 ) {
            event(new Notify(Auth::user()->name, 'notify-'.$info['to_user_id'], 'muốn kết bạn với bạn'));
        }
        return \Response::json(0);
    }


    public function getNotifi()
    {
        $list = DB::table('notification')
            ->where('user_id', Auth::id())
            ->join('users', 'notification.sender_id', '=', 'users.id')
            ->join('nofication_type', 'notification.type_id', '=', 'nofication_type.id')
            ->select('notification.*', 'users.name', 'users.avatar', 'nofication_type.value')
            ->orderBy('created', 'desc')
            ->get();
        return \Response::json($list);
    }
}
