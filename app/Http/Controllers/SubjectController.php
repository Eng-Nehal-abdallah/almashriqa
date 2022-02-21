<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Activity;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lab;
use App\Models\Social;
use App\Models\Studentfirst;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{public function index()
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subjectfac', compact('subjects','faculties','departments'));
    }

    public function indexp(Facutly $facutly)
    {      $faculties = Facutly::all();
        $doctors = Doctors::all();
        $subjects = Subject::all();
        $socials=Social::all();
        $activities=Activity::All();
        $departments = Department::all();

         $students=Studentfirst::all();
         $achieve=achievement::all();
         $labs=Lab::all();
        return view('studentfac',['facutly'=>$facutly] ,compact('labs','students','achieve','faculties','departments','socials','activities','doctors','subjects'));
    }
    public function subject(Facutly $facutly)
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subject', ['facutly'=>$facutly],compact('subjects','faculties','departments'));
    }


    public function department(Department $department)
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subjects', ['department'=>$department],compact('subjects','faculties','departments'));
    }

    public function subjectp(Facutly $facutly)
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subjectprivate', ['facutly'=>$facutly],compact('subjects','faculties','departments'));
    }


    public function departmentp(Department $department)
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subjectp', ['department'=>$department],compact('subjects','faculties','departments'));
    }

    public function indexen()
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();


        return view('lang\subjectfac', compact('subjects','Facutlies','departments'));
    }

    public function index2(Doctors $doctor)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $subjects = Subject::all();

        return view('subject\dashboard',['doctor'=>$doctor],compact('subjects','facutlies','departments'));
    }


    // start edit
    public function edit(Subject $subject)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        return view('subject\edit', ['subject' => $subject], compact('facutlies','departments'));
    }

    // start update
    public function update(Request $request, Subject $subject)
    {

        $subject->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'level_ar' => request('level_ar'),
            'level_en' => request('level_en'),
            'link' => request('link'),
            'code' => request('code'),

        ]);

        $input = $request->all();

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
            $subject->update($input);
            $subject['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $subject->save();
        return redirect()->back();
    }
    // start destroy
    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->back();
    }


    public function insert(Doctors $doctor)
    { $facutlies = Facutly::all();
        $departments = Department::all();

        return view('subject\create',['doctor'=>$doctor], compact('facutlies','departments'));
    }
    public function create(Request $request)
    {


        $data = new Subject();

        $input = $request->all();

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
        $data->level_ar = $request->level_ar;
        $data->level_en = $request->level_en;
        $data->code = $request->code;
        $data->link = $request->link;
        $data->id_doctor = $request->id_doctor;
        $data->id_facutly = $request->id_facutly;
        $data->id_department = $request->id_department;
        $data->type = $request->type;
        $data->save();
        return redirect()->back();
    }
}
