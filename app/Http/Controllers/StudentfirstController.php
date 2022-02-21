<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facutly;
use App\Models\Studentfirst;
use Illuminate\Http\Request;

class StudentfirstController extends Controller
{




    public function index(Facutly $facutly )
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $students = Studentfirst::all();

        return view('student\dashboardp',['facutly'=>$facutly],compact('students','facutlies','departments'));
    }





    public function index2( )
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        $students = Studentfirst::all();

        return view('student\dashboard',compact('students','facutlies','departments'));
    }


    // start edit
    public function edit(Studentfirst $student)
    {
        $facutlies = Facutly::all();
        $departments = Department::all();
        return view('student\edit', ['student' => $student], compact('facutlies','departments'));
    }

    // start update
    public function update(Request $request, Studentfirst $student)
    {

        $student->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'level_ar' => request('level_ar'),
            'level_en' => request('level_en'),
            'grade_ar' => request('grade_ar'),
            'grade_en' => request('grade_en'),
            'id_facutly' => request('id_facutly'),
            'id_department' => request('id_department'),

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $student->update($input);
            $student['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }


        $student->save();
        return redirect()->back();
    }
    // start destroy
    public function destroy(Studentfirst $student)
    {
        $student->delete();
        return redirect()->back();
    }


    public function insert()
    { $facutlies = Facutly::all();
        $departments = Department::all();

        return view('student\create', compact('facutlies','departments'));
    }
    public function create(Request $request)
    {


        $data = new Studentfirst();

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


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->level_ar = $request->level_ar;
        $data->level_en = $request->level_en;
        $data->grade_ar = $request->grade_ar;
        $data->grade_en = $request->grade_en;

        $data->id_facutly = $request->id_facutly;
        $data->id_department = $request->id_department;

        $data->save();
        return redirect()->back();
    }

}
