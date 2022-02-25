<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\achievement;
use App\Models\Activity;
use App\Models\Image;
use App\Models\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{public function index(Image $image)
    {
$images=Images::all();
        return view('images.dashboard',compact('images'),['image'=>$image]);
    }

    public function index2(Activity $activity)
    {
$images=Images::all();
        return view('images.dashboard2',compact('images'),['activity'=>$activity]);
    }

    public function index1(achievement $achievement)
    {
$images=Images::all();
        return view('images.dashboard1',compact('images'),['achievement'=>$achievement]);
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
    public function insert1(achievement $achievement)
    {

        return view('images.insert1',['achievement'=>$achievement]);
    }
    public function insert2(Activity $activity)
    {

        return view('images.insert2',['activity'=>$activity]);
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


    public function create1(Request $request)
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



        $data->id_achievement = $request->id_achievement;

        $data->save();
       return redirect()->back();
    }
    public function create2(Request $request)
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



        $data->id_activity = $request->id_activity;

        $data->save();
       return redirect()->back();
    }
}
