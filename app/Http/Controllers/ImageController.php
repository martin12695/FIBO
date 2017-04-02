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
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/user'), $imageName);

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }
}