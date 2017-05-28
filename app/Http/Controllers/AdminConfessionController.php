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


class AdminConfessionController
{
    public function getConfess(){
        if (Auth::check()){
            $cfs = DB::table('confession')->orderby('date_create', 'desc')->paginate(6);
            return view('admin.confession',compact('cfs', $cfs));
        }
    }

    public function CheckConfess(){

    }

    public function getEditConfess(){

    }

    public function postEditConfess(){

    }

    public function delConfess(){


    }
}
