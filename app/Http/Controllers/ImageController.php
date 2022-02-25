<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Image;
use App\Models\Images;
use App\Models\Mash;
use App\Models\Video;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {

$image=Image::all();

$mash = Mash::all()->first();
$f=Facutly::all();
$doctors=Doctors::all();

        return view('image.dashboard',compact('image','mash','f','doctors'));
    }
    public function indexshow(Image $image)
    {

$images=Images::all();

$videos = Video::all();
$faculties=Facutly::all();
$departments=Department::all();

        return view('gallery',['image'=>$image],compact('images','videos','faculties','departments'));
    }
    public function indexshowen(Image $image)
    {

$images=Images::all();

$videos = Video::all();
$faculties=Facutly::all();
$departments=Department::all();

        return view('lang.galleryEn',['image'=>$image],compact('images','videos','faculties','departments'));
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
