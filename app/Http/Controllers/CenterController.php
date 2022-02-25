<?php

namespace App\Http\Controllers;

use App\Models\Center;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use Illuminate\Http\Request;

class CenterController extends Controller
{ public function magazin()
    {
        $faculties  = Facutly::all();
        $departments = Department::all();
        return view('magazin',compact('faculties','departments'));
    }

    public function magazinen()
    {
        $faculties  = Facutly::all();
        $departments = Department::all();
        return view('lang.magazin',compact('faculties','departments'));
    }
    public function fees()
    {      $mash=Mash::all()->first();
        $faculties  = Facutly::all();
        $departments = Department::all();

        return view('fees',compact('mash','faculties ','departments'));
    }
      public function feesen()
    {     $mash=Mash::all()->first();
         $faculties  = Facutly::all();
        $departments = Department::all();

        return view('lang.fees',compact('mash','faculties','departments'));
    }
    public function strategy()
    {    $faculties  = Facutly::all();
        $departments = Department::all();
        $mash=Mash::all()->first();
        return view('strategy',compact('mash','faculties','departments'));
    }
     public function strategyen()
    {    $faculties  = Facutly::all();
        $departments = Department::all();
        $mash=Mash::all()->first();

        return view('lang.strategy',compact('mash','faculties','departments'));
    }
    public function index2()
    {
        $centers = Center::all();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        return view('center.dashboard', compact('centers','mash','f','doctors'));
    }
    public function index()
    {
        $center = Center::all()->first();
$faculties  = Facutly::all();
        $departments = Department::all();
        return view('center', compact('center','faculties','departments'));
    }

    public function indexen()
    {
        $center = Center::all()->first();
$faculties  = Facutly::all();
        $departments = Department::all();
        return view('lang.center', compact('center','faculties','departments'));
    }
    // start destroy
    public function destroy(Center $center)
    {
        $center->delete();

        return redirect("/dashboard16");
    }



    public function insert()
    {

        return view('center.create');
    }
    public function create(Request $request)
    {



        $data = new Center();

        $input = $request->all();


        $data->tablecode = $request->tablecode;

        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_en = $request->details_en;
        $data->details_ar = $request->details_ar;
        $data->save();
        return redirect('/dashboard16');
    }
    // start edit
    public function edit(Center $center)
    {
        return view('center.edit', ['center' => $center]);
    }

    // start update
    public function update( Center $center)
    {

        $center->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'tablecode' => request('tablecode'),
        ]);


        $center->save();
        return redirect('/dashboard16');
    }
}
