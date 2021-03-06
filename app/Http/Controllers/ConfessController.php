<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\Http\Middleware\CommentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ConfessController {
    public function submitPost()
    {
        $title = Input::get('title');
        $author = Input::get('author');
        $detail = Input::get('detail');
        DB::table('confession')->insert(
            ['title' => $title, 'author' => $author, 'detail' => $detail,'status' => '0']
        );
        echo "<script>
                alert('Chúng tôi sẽ duyệt bài viết của bạn nếu bài viết đảm bảo thì confession của bạn sẽ được đăng');
                window.location = '".url('/')."'
                </script>";
    }

    public function initPage($postid){
        $info = DB::table('confession')->where('id', $postid)->first();
        $listComment = new CommentService();
        $listComment = $listComment->getComment(1,$postid);
        return view('confession.detail', ['info' => $info,
                                        'listComment' => $listComment
                                        ]);
    }

    public function addComment(Request $request){
        $info = $request->input();
        $comment = new CommentService();
        $status = $comment->setComment($info['detail'],$info['postId']);
        return \Response::json($status);
    }

    public function initPageOver(){
        $info = DB::table('confession')->get();
        return view('confession.index',
            [
            'listPost' => $info
            ]);
    }

}