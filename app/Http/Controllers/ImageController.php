<?php
/**
 * Created by PhpStorm.
 * User: tuanh
 * Date: 4/2/2017
 * Time: 11:47 PM
 */

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Imagine;
use DB;
use Auth;
class ImageController extends Controller
{
    public function imageUpload()
    {
        return view('image-upload');
    }

    /**
     * Manage Post Request
     *
     * @return void
     */
    public function imageUploadPost(Request $request)
    {
        $info = $request->input();
        $imageData = explode(',', $info['image']);
        $imageData = base64_decode($imageData[1]);
        $png_url = "avatar-".time().".jpg";
        $path = public_path('images/user/' . $png_url);
        file_put_contents($path, $imageData);
        DB::table('users')
            ->where('id', Auth::id())
            ->update(['avatar' => 'images/user/' .$png_url]);
        return \Response::json(0);
    }
}