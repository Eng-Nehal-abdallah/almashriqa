<?php

namespace App\Http\Controllers;
use App\Models\achievement;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Images;
use App\Models\Lab;
use App\Models\Leader;
use App\Models\Leaderuni;
use App\Models\Typeachievement;
use Illuminate\Http\Request;


class AchievementController extends Controller
{
    public function index(Doctors $doctor)
    {
        $departments = Department::all();
        $facutlies = Facutly::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('dashbord.achievement.dashboard',['doctor'=>$doctor] ,compact('departments', 'facutlies', 'achievements','types'));
    }
    public function indexdoc(Doctors $doctor)
    {
        $departments = Department::all();
        $facutlies = Facutly::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('dashbord.achievement.dashboarddoc',['doctor'=>$doctor] ,compact('departments', 'facutlies', 'achievements','types'));
    }
    public function indexleader(Leader $leader)
    {
        $departments = Department::all();
        $facutlies = Facutly::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('dashbord.achievement.dashboardleader',['leader'=>$leader] ,compact('departments', 'facutlies', 'achievements','types'));
    }
    public function indexleaderuni(Leaderuni $leaderuni)
    {
        $departments = Department::all();
        $facutlies = Facutly::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('dashbord.achievement.dashboardleaderuni',['leaderuni'=>$leaderuni] ,compact('departments', 'facutlies', 'achievements','types'));
    }
    public function facultyen(Facutly $faculty)
    {
        $Facutlies = Facutly::all();
        $departments = Department::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('lang.patentinner',['Facutly'=>$faculty] ,compact('achievements','types','Facutlies','departments'));
    }


    public function departmenten(Department $department)
    {
        $Facutlies = Facutly::all();
        $departments = Department::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('lang.patentin',['Department'=>$department] ,compact('achievements','types','Facutlies','departments'));
    }
 public function achievement(achievement $achievement)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();
$labs=Lab::all();
$images=Images::all();

        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('research1',['achievement'=>$achievement] ,compact('labs','achievements','types','Facutlies','departments','images'));
    }
 public function achievementen(achievement $achievement)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();
$images=Images::all();
        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('lang.research1',['achievement'=>$achievement] ,compact('achievements','types','Facutlies','departments','images'));
    }

    public function faculty(Facutly $faculty)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();

        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('patentinner',['Facutly'=>$faculty] ,compact('achievements','types','Facutlies','departments'));
    }

    public function doctor(Doctors $doctor)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();

        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('researchinner',['doctor'=>$doctor] ,compact('achievements','types','Facutlies','departments'));
    }
    public function doctoren(Doctors $doctor)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();

        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('lang.researchinner',['doctor'=>$doctor] ,compact('achievements','types','Facutlies','departments'));
    }


    public function department(Department $department)
    {    $Facutlies = Facutly::all();
        $departments = Department::all();

        $achievements = achievement::all();
        $types = Typeachievement::all();
        return view('patentin',['Department'=>$department] ,compact('achievements','types','Facutlies','departments'));
    }


    // start edit
    public function edit(Achievement $achievement)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $types = Typeachievement::all();
        return view('dashbord.achievement.edit', compact('facutlies', 'departments','types'), ['achievement' => $achievement]);
    }

    // start update
    public function update(Request $request, achievement $achievement)
    {

        $achievement->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'id_types' => request('id_types'),
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $achievement->update($input);
            $achievement['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
            $achievement->update($input);
            $achievement['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $achievement->save();
        return redirect()->back();

    }
    // start destroy
    public function destroy(achievement $achievement)
    {
        $achievement->delete();

        return redirect("/dashboard4");
    }

    public function insertleader(Leader $leader)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $types = Typeachievement::all();

        return view('dashbord.achievement.createleader', compact('facutlies','departments','types'),['leader'=>$leader]);
    }
    public function insertleaderuni(Leaderuni $leaderuni)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $types = Typeachievement::all();

        return view('dashbord.achievement.createleaderuni', compact('facutlies','departments','types'),['leaderuni'=>$leaderuni]);
    }
    public function insert(Doctors $doctor)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $types = Typeachievement::all();

        return view('dashbord.achievement.create', compact('facutlies','departments','types'),['doctor'=>$doctor]);
    }
    public function create(Request $request)
    {


        $data = new achievement();

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

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";

            $data['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_ar = $request->details_ar;

        $data->details_en = $request->details_en;

        $data->id_doctor = $request->id_doctor;
        $data->id_types = $request->id_types;
        $data->save();
        return redirect()->back();
    }

    public function createachievement(Request $request)
    {


        $data = new achievement();

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

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";

            $data['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_ar = $request->details_ar;

        $data->details_en = $request->details_en;

        $data->id_leader = $request->id_leader;
        $data->id_types = $request->id_types;
        $data->save();
        return redirect('/dashboard25');
    }




    public function createachievementuni(Request $request)
    {


        $data = new achievement();

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

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";

            $data['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_ar = $request->details_ar;

        $data->details_en = $request->details_en;

        $data->id_leaderuni = $request->id_leaderuni;
        $data->id_types = $request->id_types;
        $data->save();
        return redirect('/dashboard25');
    }
}
