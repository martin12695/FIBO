<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;


class SearchController
{
    public function getSearch()
    {
        if (Auth::check()) {
            $getSearch = $users = DB::table('users')->where('id', '!=', Auth::id())->paginate(4);

            return view('search', ['listPeople' => $getSearch]);

        } else {
            return view('error.404');
        }
    }
}
