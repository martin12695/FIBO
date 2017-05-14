<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 5/13/2017
 * Time: 11:37 PM
 */

namespace App\Http\Middleware;
use DB;
use auth;
class CommentService
{
    public function getComment ($type, $postID) {
        $list_comment = DB::table('comment')
            ->where('type', $type)
            ->where('post_id', $postID)
            ->join('users', 'users.id', '=', 'user_id')
            ->get();
        return $list_comment;

    }

    public function setComment ($detail, $postID) {
        try {
            DB::table('comment')->insert(
                ['user_id' => Auth::id(), 'detail' => $detail, 'post_id' => $postID, 'type' => '1']
            );
            return 0;
        }
        catch(\Illuminate\Database\QueryException $ex){
            return 1;
        }


    }



}