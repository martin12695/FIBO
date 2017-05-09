<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class ConfessController {
    public function submitPost()
    {
        $title = Input::get('title');
        $author = Input::get('author');
        $detail = Input::get('detail');
        DB::table('confession')->insert(
            ['title' => $title, 'author' => $author, 'detail' => $detail,'status' => '0']
        );
    }
}