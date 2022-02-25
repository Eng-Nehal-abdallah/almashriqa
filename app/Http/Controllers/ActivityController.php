<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Image;
use App\Models\Images;
use App\Models\Mash;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        $departments = Department::all();
        $facutlies = Facutly::all();
$activity=Activity::all();
        return view('dashbord\activity\dashboard',compact('activity','departments', 'facutlies','mash','f','doctors'));
    }
   // start edit
    public function activity(Activity $activity)
    {$activities=Activity::all();
        $Facutlies = Facutly::all();
        $departments = Department::all();
        $Facutlies  = Facutly::all();
        $images=Images::all();
        return view('activityar', compact('activities','Facutlies', 'departments','images'), ['activity' => $activity]);
    }

  public function activityen(Activity $activity)
    {$activities=Activity::all();
        $Facutlies  = Facutly::all();
        $departments = Department::all();
        $images=Images::all();
        return view('lang\activityen', compact('activities','Facutlies', 'departments','images'), ['activity' => $activity]);
    }

    // start edit
    public function edit(Activity $activity)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        return view('dashbord\activity\edit', compact('facutlies', 'departments'), ['activity' => $activity]);
    }

    // start update
    public function update(Request $request, Activity $activity)
    {

        $activity->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'id_faculty' => request('id_faculty'),
            'id_department' => request('id_department'),

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $activity->update($input);
            $activity['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
            $activity->update($input);
            $activity['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $activity->save();
        return redirect('/dashboard5');
    }
    // start destroy
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect("/dashboard5");
    }


    public function insert()
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        return view('dashbord\activity\create', compact('facutlies','departments'));
    }
    public function create(Request $request)
    {


        $data = new Activity();

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

        if ($video = $request->file('video')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $video->getClientOriginalExtension();
            $video->move($destinationPath, $profileImage);
            $input['video'] = "$profileImage";

            $data['video'] = $destinationPath . "$profileImage";
        } else {
            unset($input['video']);
        }


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_ar = $request->details_ar;
        $data->details_en = $request->details_en;
        $data->id_faculty = $request->id_faculty;

        $data->id_department = $request->id_department;

        $data->save();
        return redirect('/dashboard5');
    }
}
