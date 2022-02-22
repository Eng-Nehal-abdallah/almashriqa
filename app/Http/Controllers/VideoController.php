<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Image $image)
    {

$videos=Video::all();
        return view('video.dashboard',compact('videos'),['image'=>$image]);
    }
    // start destroy
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->back();
    }


    public function insert(Image $image)
    {

        return view('video.insert',['image'=>$image]);
    }
    public function create(Request $request)
    {


        $data = new Video();

        $input = $request->all();

        if ($video = $request->file('video')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $profileImage);
            $input['video'] = "$profileImage";

            $data['video'] = $destinationPath . "$profileImage";
        } else {
            unset($input['video']);
        }



        $data->id_image = $request->id_image;

        $data->save();
        return redirect()->back();
    }
}
