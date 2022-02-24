<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Facutly;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {

$image=Image::all();
        return view('image.dashboard',compact('image'));
    }
    // start destroy
    public function destroy(Image $image)
    {
        $image->delete();

        return redirect("/dashboard22");
    }


    public function insert(Image $image)
    {

        return view('image.insert',['image'=>$image]);
    }
    public function create(Request $request)
    {


        $data = new Image();

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

            $data['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }




        $data->save();
        return redirect('/dashboard22');
    }
}
