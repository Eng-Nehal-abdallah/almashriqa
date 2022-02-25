<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Activity;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lab;
use App\Models\Mash;
use App\Models\Social;
use App\Models\Studentfirst;
use App\Models\Typeachievement;
use App\Models\University;
use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    //
    public function insert()
    {

        return view('dashbord.faculty.insert');
    }
    public function create(Request $request)
    {


        $data = new Facutly();

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";

            $data['image']=$destinationPath."$profileImage";

        }else{
            unset($input['image']);
        }

        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            $input['images'] = "$profileImage";
            $data->update($input);
            $data['images']=$destinationPath."$profileImage";
            $data->save();
        }else{
            unset($input['images']);
        }
        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->about_facutly_ar = $request->about_facutly_ar;
        $data->about_facutly_en = $request->about_facutly_en;
        $data->message_ar = $request->message_ar;
        $data->message_en = $request->message_en;
        $data->goal_ar = $request->goal_ar;
        $data->goal_en = $request->goal_en;
        $data->message_dean_ar = $request->message_dean_ar;
        $data->message_dean_en = $request->message_dean_en;
        $data->view_ar = $request->view_ar;

        $data->view_en = $request->view_en;

        $data->color = $request->color;
        $data->save();
        return redirect('/dashboard2');



    }


    //
    public function show()
    {
        $Facutlies = Facutly::all();



        return view('dashboard_Facutly', compact('Facutlies'));

        // return view('Certifieds');
    }

        public function char()
    {
        $faculties = Facutly::all();


     $departments=Department::all();

        return view('chart.ChartAr', compact('faculties','departments'));

        // return view('Certifieds');
    }


            public function charEn()
    {
        $faculties = Facutly::all();


     $departments=Department::all();

        return view('chart.ChartEn', compact('faculties','departments'));

        // return view('Certifieds');
    }




    public function indexdash()
    {
        $Facutlies = Facutly::all();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();


        return view('dashbord.faculty.dashboard', compact('Facutlies','mash','f','doctors'));

        // return view('Certifieds');
    }

    public function shen(Facutly $Facutly)
    { $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();
        $faculties = Facutly::all();
        $students=Studentfirst::all();

        $achievements=achievement::all();
        $labs=Lab::all();
        $doc = Doctors::all()->where('id_facutly','=',$Facutly->id);
        $act=Activity::All()->where('id_faculty','=',$Facutly->id);
        $ach=achievement::all()->where('id_facutly','=',$Facutly->id);
        $l=Lab::all()->where('id_faculty','=',$Facutly->id);
        $d = Department::all()->where('id_facutly','=',$Facutly->id);
        return view('lang\facutly', ['facutly' => $Facutly], compact('doc','act','ach','l','d','labs','students','achievements','faculties','departments','socials','activities','doctors'));
    }
    public function sh(Facutly $Facutly)
    { $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();
         $faculties  = Facutly::all();
         $students=Studentfirst::all();
         $achieve=achievement::all();
         $labs=Lab::all();
         $doc = Doctors::all()->where('id_facutly','=',$Facutly->id);
         $act=Activity::All()->where('id_faculty','=',$Facutly->id);
         $ach=achievement::all()->where('id_facutly','=',$Facutly->id);
         $l=Lab::all()->where('id_faculty','=',$Facutly->id);
         $d = Department::all()->where('id_facutly','=',$Facutly->id);
        return view('facutly', ['facutly' => $Facutly], compact('doc','act','ach','l','d','labs','students','achieve','faculties','departments','socials','activities','doctors'));
    }
    public function shst(Facutly $Facutly)
    { $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();
         $faculties  = Facutly::all();
         $students=Studentfirst::all();
         $achieve=achievement::all()->where('id_facutly',$Facutly)->last();
        return view('studentfac', ['facutly' => $Facutly], compact('students','faculties','departments','socials','activities','doctors'));
    }
    public function showresearch()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('researchfac', compact('faculties','departments','socials','activities','doctors'));
    }
    public function showresearchen()
    { $faculties  = Facutly::all();
        $departments = Department::all();

        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();
        return view('lang.researchfac', compact('faculties','departments','socials','activities','doctors'));
    }
    public function showlab()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('labfac', compact('faculties','departments','socials','activities','doctors'));
    }
    public function showlec()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('lecfac', compact('faculties','departments','socials','activities','doctors'));
    }
    public function showlecen()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('lang.lecfac', compact('faculties','departments','socials','activities','doctors'));
    }




    public function showexamtable()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('examsfac', compact('faculties','departments','socials','activities','doctors'));
    }

    public function showexamtableen()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('lang.examfac', compact('faculties','departments','socials','activities','doctors'));
    }

    public function showlecturetable()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

        return view('lecturefac', compact('faculties','departments','socials','activities','doctors'));
    }



    public function showlaben()
    { $Facutlies = Facutly::all();
        $departments = Department::all();


        return view('lang.labfac', compact('Facutlies','departments'));
    }


    public function showexam()
    { $faculties = Facutly::all();
        $departments = Department::all();


        return view('examfac', compact('faculties','departments'));
    }
    public function showexamen()
    { $faculties = Facutly::all();
        $departments = Department::all();


        return view('lang.examfac', compact('faculties','departments'));
    }
    public function showleadw()
    {$faculties=Facutly::all();
        $university = University::all();
         $departments = Department::all();
         $mash=Mash::all()->first();
        return view('leaderword',  compact('mash','university','faculties','departments'));
    }
    public function showleadwen()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $university = University::all();
        $mash=Mash::all()->first();
        return view('lang.leaderword',  compact('mash','university','faculties','departments'));
    }
    public function showlead()
    { $faculties  = Facutly::all();
        $departments = Department::all();
        $university = University::all();
        return view('leaderuni',  compact('university','faculties','departments'));
    }
    public function showleaden()
    { $faculties  = Facutly::all();
        $departments = Department::all();
        $university = University::all();
        return view('lang.leaderuni',  compact('university','faculties','departments'));
    }


    public function shows(University $university)
    {
        $university = University::all();
        return view('requirement',  compact('university'));
    }
    public function showsen(University $university)
    {
        $university = University::all();
        return view('lang.requirement',  compact('university'));
    }
    public function index2()
    {
        $departments = Department::all();
        $faculties = Facutly::all();
        return view('patent', compact('faculties', 'departments'));

        // return view('Certifieds');
    }
    public function index2en()
    {
        $departments = Department::all();
        $faculties = Facutly::all();
        return view('lang.patent', compact('faculties', 'departments'));

        // return view('Certifieds');
    }
    public function indexlabexam()
    {
        $departments = Department::all();
        $faculties = Facutly::all();
        return view('labexamfac', compact('faculties', 'departments'));

        // return view('Certifieds');
    }
    public function indexlabexamen()
    {
        $departments = Department::all();
        $faculties = Facutly::all();
        return view('lang.labexamfac', compact('faculties', 'departments'));

        // return view('Certifieds');
    }

    public function index()
    {
        $departments = Department::all();
        $faculties  = Facutly::all();
        return view('facutlies', compact('faculties', 'departments'));

        // return view('Certifieds');
    }
    public function indexen()
    {
        $departments = Department::all();
        $faculties = Facutly::all();
        return view('lang.facutlies', compact('faculties', 'departments'));

        // return view('Certifieds');
    }
    public function show_Facutly()
    {
        $faculties = Facutly::all();
        return view('create_department', compact('faculties'));

        // return view('Certifieds');
    }

    public function show_Facutly2()
    {
        $faculties = Facutly::all();
        return view('create_doctor', compact('faculties'));

        // return view('Certifieds');
    }
    // start edit
    public function edit(Facutly $facutly)
    {
        return view('dashbord.faculty.edit', ['facutly' => $facutly]);
    }
    public function showrallesearch(Facutly $facutly)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('researches', ['facutly' => $facutly],compact('achievements','types','faculties','departments'));
    }
    public function showallresearch(Department $department)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('researchess', ['department' => $department],compact('achievements','types','faculties','departments'));
    }


    public function showrallesearchen(Facutly $facutly)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('lang.researches', ['facutly' => $facutly],compact('achievements','types','faculties','departments'));
    }
    public function showallresearchen(Department $department)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('lang.researchess', ['department' => $department],compact('achievements','types','faculties','departments'));
    }


    // start update
    public function update(Request $request,Facutly $Facutly)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $Facutly->update($input);
            $Facutly['image']=$destinationPath."$profileImage";
            $Facutly->save();
        }else{
            unset($input['image']);
        }

        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            $input['images'] = "$profileImage";
            $Facutly->update($input);
            $Facutly['images']=$destinationPath."$profileImage";
            $Facutly->save();
        }else{
            unset($input['images']);
        }

        $Facutly->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'about_facutly_ar' => request('about_facutly_ar'),
            'about_facutly_en' => request('about_facutly_en'),
            'message_ar' => request('message_ar'),
            'message_en' => request('message_en'),
            'goal_ar' => request('goal_ar'),
            'message_dean_ar' => request('message_dean_ar'),
            'goal_en' => request('goal_en'),
            'message_dean_en' => request('message_dean_en'),
            'color'=>request('color'),
        ]);

        return redirect('/dashboard2');
    }
    // start destroy
    public function destroy(Facutly $Facutly)
    {
        $Facutly->delete();

        return redirect("/dashboard2");
    }



    public function doctor(Doctors $doctor)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('researchesdoc', ['doctor' => $doctor],compact('achievements','types','faculties','departments'));
    }



    public function doctoren(Doctors $doctor)
    { $achievements=achievement::all();
        $types = Typeachievement::all();
        $faculties =Facutly::all();
        $departments=Department::all();
        return view('lang.researchesdocen', ['doctor' => $doctor],compact('achievements','types','faculties','departments'));
    }

}







// public function store(Request $request)
    // {

    //     request()->validate([

    //         'name' => 'required',
    //         'details' => 'required'
    //     ]);

    //     $Facutly = new Facutly([
    //         'name_ar' => request('name_ar'),
    //         'name_en' => request('name_en'),
    //         'about_facutly_ar' => request('about_facutly_ar'),
    //         'about_facutly_en' => request('about_facutly_en'),
    //         'message_ar' => request('message_ar'),
    //         'message_en' => request('message_en'),
    //         'image' => request('image'),
    //         'goal_ar' => request('goal_ar'),
    //         'message_dean_ar' => request('message_dean_ar'),
    //         'goal_en' => request('goal_en'),
    //         'message_dean_en' => request('message_dean_en'),

    //     ]);

    //     $Facutly->save();
    //     return redirect('/dashboard2');
    // }
