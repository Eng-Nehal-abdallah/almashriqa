<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Exam;
use App\Models\Facutly;
use App\Models\Mash;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function indexfac(Facutly $faculty)
    {

        $exams = Exam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('exams',compact('exams','faculties','departments'),['faculty'=>$faculty]);
    }

    public function indexfacd(Department $department)
    {$exams = Exam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('examsd',compact('exams','faculties','departments'),['department'=>$department]);
    }

    public function index1(Department $department)
    {
        $exam = exam::all();

        return view('exam2', compact('exam'),['department'=>$department]);
    }
    public function index2(Facutly $facutly)
    {
        $exam = exam::all();

        return view('exam', compact('exam'),['facutly'=>$facutly]);
    }
    public function index1en(Department $department)
    {
        $exam = exam::all();

        return view('lang\exam2', compact('exam'),['department'=>$department]);
    }
    public function index2en(Facutly $facutly)
    {
        $exam = exam::all();

        return view('lang\exam', compact('exam'),['facutly'=>$facutly]);
    }


    public function index()
    {
        $exams = Exam::all();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        return view('exams\exam\dashboard', compact('exams','mash','f','doctors'));
    }


    public function indexp(Facutly $facutly)
    {
        $exams = Exam::all();

        return view('exams\exam\dashboardp',['facutly'=>$facutly], compact('exams'));
    }

    // start destroy
    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect("/dashboard10");
    }



    public function insert()
    {

        return view('exams\exam\create');
    }
    public function create(Request $request)
    {



        $data = new Exam();

        $input = $request->all();




        $data->lecture = $request->lecture;
        $data->day = $request->day;

        $data->save();
        return redirect('/dashboard10');
    }
    // start edit
    public function edit(Exam $exam)
    {
        return view('exams\exam\edit', ['exam' => $exam]);
    }

    // start update
    public function update( Exam $exam)
    {

        $exam->update([
            'lecture' => request('lecture'),
            'day' => request('day'),

        ]);


        $exam->save();
        return redirect('/dashboard10');
    }
}
