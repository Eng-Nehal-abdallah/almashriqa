<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Activity;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lab;
use App\Models\Mash;
use App\Models\Typeachievement;
use Illuminate\Http\Request;

class MashController extends Controller
{ //show all data of main page  in main page
    public function index()
    {
        $mash = Mash::all()->first();
        $faculties = Facutly::all();
        $fs = Facutly::all()->random(3);
        $activities = Activity::all();
        $achievements = achievement::all();
        $doctors = Doctors::all();
        $types = Typeachievement::all();
        $departments=Department::all();
        $labs=Lab::all();
        return view('index',  compact('labs','mash', 'faculties', 'activities','fs','doctors','achievements','types','departments'));
    }

    public function indexen()
    {
        $mash = Mash::all()->first();
        $faculties = Facutly::all();
        $fs = Facutly::all()->random(3);
        $activities = Activity::all();
        $achievements = achievement::all();
        $doctors = Doctors::all();
        $types = Typeachievement::all();
        $departments=Department::all();
        $labs=Lab::all();
        return view('lang\index',  compact('labs','mash', 'faculties', 'activities','fs','doctors','achievements','types','departments'));
    }

    public function about()
    {  $departments=Department::all();
        $mash = Mash::all()->first();
        $faculties   = Facutly::all();
        $fs = Facutly::all()->random(3);
        $activities = Activity::all();
        $achievements = achievement::all();
        $doctors = Doctors::all();
        $types = Typeachievement::all();
        return view('about',  compact('mash', 'faculties', 'activities','fs','doctors','achievements','types','departments'));
    }
      public function abouten()
    {  $departments=Department::all();
        $mash = Mash::all()->first();
        $faculties  = Facutly::all();
        $fs = Facutly::all()->random(3);
        $activities = Activity::all();
        $achievements = achievement::all();
        $doctors = Doctors::all();
        $types = Typeachievement::all();
        return view('lang\about',  compact('mash', 'faculties', 'activities','fs','doctors','achievements','types','departments'));
    }
//show all data in dashboard of main page
    public function index2()
    {
        $mash = Mash::all()->first();

        return view('dashbord.main.dashboard',  compact('mash'));
    }
// edit after hide show
    public function edit(Mash $mash)
    {
        return view('dashbord\main\afterhead\after-head-edit', ['mash' => $mash]);
    }

    //update all data after head
    public function update(Mash $mash)
    {
        request()->validate([]);

        $mash->update([

            'abstract_title_ar' => request('abstract_title_ar'),
            'abstract_title_en' => request('abstract_title_en'),
            'abstract_small_ar' => request('abstract_small_ar'),
            'abstract_small_en' => request('abstract_small_en'),
            'abstract_details_en' => request('abstract_details_en'),
            'abstract_details_ar' => request('abstract_details_ar'),
            'strategy_en' => request('strategy_en'),
            'strategy_ar' => request('strategy_ar'),
            'fees_en' => request('fees_en'),
            'fees_ar' => request('fees_ar'),
            'room' => request('room'),
            'students' => request('students'),
            'word_ar'=>request('word_ar'),
            'word_En'=>request('word_En'),
            'leaderimage'=>request('leaderimage'),
            'pdf'=>request('pdf'),
        ]);

        return redirect('/dashboard');
    }

//show edit section 1
    public function edit_sec1(Mash $mash)
    {
        return view('dashbord\main\section1\edit', ['mash' => $mash]);
    }
    //update data of section 1
    public function update_sec1(Request $request,Mash $mash)
    {
        $input = $request->all();

        if ($image = $request->file('image2')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image2'] = "$profileImage";
            $mash->update($input);
            $mash['image2']=$destinationPath."$profileImage";
            $mash->save();
        }else{
            unset($input['image2']);
        }
        $mash->update([

            'title_image2_ar' => request('title_image2_ar'),
            'title_image2_en' => request('title_image2_en'),
            'small_image2_ar' => request('small_image2_ar'),
            'small_image2_en' => request('small_image2_en'),
            'details_image2_ar' => request('details_image2_ar'),
            'details_image2_en' => request('details_image2_en'),

        ]);

        return redirect('/dashboard');
    }
// show edit sec2

    public function edit_sec2(Mash $mash)
    {
        return view('dashbord\main\section2\edit', ['mash' => $mash]);
    }
    //update section2 data
    public function update_sec2(Request $request,Mash $mash)
    {

        $input = $request->all();

        if ($image = $request->file('image1')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
            $mash->update($input);
            $mash['image1']=$destinationPath."$profileImage";
            $mash->save();
        }else{
            unset($input['image1']);
        }

        $mash->update([
            // 'image1' => "$profileImage",
            'title_image1_ar' => request('title_image1_ar'),
            'title_image1_en' => request('title_image1_en'),
            'small_image1_ar' => request('small_image1_ar'),
            'small_image1_en' => request('small_image1_en'),
            'details_image1_ar' => request('details_image1_ar'),
            'details_image1_en' => request('details_image1_en'),

        ]);


        return redirect('/dashboard');
    }
}
