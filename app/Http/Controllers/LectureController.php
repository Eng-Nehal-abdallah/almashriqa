<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lecture;
use App\Models\Mash;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function indexfac(Facutly $faculty)
    {

        $lectures = Lecture::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lecs',compact('lectures','faculties','departments'),['faculty'=>$faculty]);
    }

    public function indexfacd(Department $department)
    {$lectures = Lecture::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lecsd',compact('lectures','faculties','departments'),['department'=>$department]);
    }

    public function indexfacen(Facutly $faculty)
    {

        $lectures = Lecture::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang.lecs',compact('lectures','faculties','departments'),['faculty'=>$faculty]);
    }

    public function indexfacden(Department $department)
    {$lectures = Lecture::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang.lecsd',compact('lectures','faculties','departments'),['department'=>$department]);
    }

    public function index()
    {
        $lectures = Lecture::all();
$Facutlies =Facutly::all();
$departments=Department::all();
$mash = Mash::all()->first();
$f=Facutly::all();
$doctors=Doctors::all();

        return view('lecture\dashboard', compact('departments','Facutlies','lectures','mash','f','doctors'));
    }

    public function indexp(Facutly $facutly)
    {
        $lectures = Lecture::all();
$Facutlies =Facutly::all();
$departments=Department::all();
        return view('lecture\dashboardp',['facutly'=>$facutly] ,compact('departments','Facutlies','lectures'));
    }

    // start destroy
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();

        return redirect()->back();
    }



    public function insert(Facutly $facutly)
    {
$facutlies=Facutly::all();
        return view('lecture\create',compact('facutlies'),['facutly'=>$facutly]);
    }
    public function create(Request $request)
    {



        $data = new Lecture();

        $input = $request->all();



        $data->id_facutly = $request->id_facutly;
        $data->table = $request->table;
        $data->day = $request->day;

        $data->save();
         return redirect()->back();
    }
    // start edit
    public function edit(Lecture $lecture)
    {
        return view('lecture\edit', ['lecture' => $lecture]);
    }
  // public function update(Lecture $lecture)
    // {

    //     $lecture->update([
    //         'lecture' => request('lecture'),
    //         'day' => request('day'),

    //     ]);


    //     $lecture->save();
    //     return response()->json($lecture);
    // }
    // start update

    public function update(Lecture $lecture)
    {


            $lecture->update([
                'table' =>request('table'),
            'day' => request('day'),



            ]);

            return redirect('/dashboard8');

    }
}
