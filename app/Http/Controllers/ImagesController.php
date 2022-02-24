<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{public function index(Image $image)
    {
$images=Images::all();
        return view('images.dashboard',compact('images'),['image'=>$image]);
    }
    // start destroy
    public function destroy(Images $images)
    {
        $images->delete();

        return redirect()->back();
    }


    public function insert(Image $image)
    {

        return view('images.insert',['image'=>$image]);
    }
    public function create(Request $request)
    {


        $data = new Images();

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



        $data->id_image = $request->id_image;

        $data->save();
       return redirect()->back();
    }
}
