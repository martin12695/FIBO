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


class AdminCommentController
{
    public function getComment(){
        if (Auth::check()){
            $user = DB::table('users')->select('id','name')->get();
            $ket = DB::table('comment')
                ->join('confession', 'confession.id', '=', 'comment.post_id')
                ->select('confession.title', 'comment.detail', 'comment.created','comment.id','comment.user_id')
                ->orderby('id', 'desc')->paginate(6);
            return view('admin.comment', [
                'user' => $user,
                'ket'   => $ket
            ]);
        }
    }

    public function detailComment($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/comment');
        }else{
            $detail = DB::table('confession')
                ->join('comment', 'confession.id', '=', 'comment.post_id')
                ->join('users', 'users.id', '=', 'comment.user_id')
                ->where('comment.id', '=', $id)
                ->select('confession.title', 'comment.detail', 'comment.created','comment.id','comment.user_id','users.name')
                ->first();
            return view('admin.detailComment', [
                'detail' => $detail,
            ]);
        }
    }

    public function delComment($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/comment');
        }else{
            DB::table('comment')
                ->where('id', '=', $id)->delete();
            return back();
        }
    }

    public function deleteComment($id){
        $id = intval($id);
        if (!$id){
            return Redirect::to('/admin/comment');
        }else{
            DB::table('comment')
                ->where('id', '=', $id)->delete();
            return Redirect::to('/admin/comment');
        }
    }

    public function autocomplete(Request $request)
    {
        // prevent this method called by non ajax
        if ($request->ajax())
        {
            $term = $request->input('term');
            $user = DB::table('users')->select('id','name')->get();
            $comment = DB::table('confession')
                ->join('comment', 'confession.id', '=', 'comment.post_id')
                ->join('users', 'users.id', '=', 'comment.user_id')
                ->where('comment.detail', 'like', '%' . $term . '%')
                ->select('confession.title', 'comment.detail', 'comment.created','comment.id','comment.user_id','users.name')
                ->take(5)
                ->get();

            // convert to json
            $results = [];
            foreach ($comment as $row) {
                foreach ($user as $item) {
                    if ($item->id == $row->user_id){
                        $results[] = [
                            'user_id' => $row->id,
                            'name'  => $item->name,
                            'title' => $row->title,
                            'detail'    => $row->detail,
                            'created'   => $row->created,
                        ];
                    }
                }
            }
            return \Response::json($results);
        }
    }


}
