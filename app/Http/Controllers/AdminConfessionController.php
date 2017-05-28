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
            $cfs = DB::table('confession')->where('status', '=', '0')->orderby('date_create', 'desc')->paginate(6);
            return view('admin.confession',compact('cfs', $cfs));
        }
    }

    public function CheckConfess(){

    }

    public function getEditConfess($id){
        $id = intval($id);
        if(!$id){
            return Redirect::to('/admin/confession');
        }
        $cfs = DB::table('confession')->where('id','=',$id)->first();
        return view('admin.editConfession', [
            'cfs' => $cfs
        ]);
    }

    public function postEditConfess(Request $request, $id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/term-member');
        }else{
            $cfs = DB::table('confession')->where('id','=',$id)->first();
            $info = $request->input();
            if ( $cfs->views == $info['views']  ){
                if( Input::has('title') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['title' => $info['title']]);
                }
                if( Input::has('detail') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['detail' => $info['detail']]);
                }
                if( Input::has('author') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['author' => $info['author']]);
                }
                if( Input::has('status') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['status' => $info['status']]);
                }
            }
            if( $cfs->views != $info['views'] ){
                if( Input::has('title') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['title' => $info['title']]);
                }
                if( Input::has('detail') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['detail' => $info['detail']]);
                }
                if( Input::has('author') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['author' => $info['author']]);
                }
                if( Input::has('status') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['status' => $info['status']]);
                }
                if( Input::has('views') ){
                    DB::table('confession')
                        ->where('id', $id)
                        ->update(['views' => $info['views']]);
                }
            }
            return \Response::json(1);
        }
    }

    public function delConfess($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/confession');
        }else{
            DB::table('confession')
                ->where('id', '=', $id)->delete();
            return back();
        }
    }
}
