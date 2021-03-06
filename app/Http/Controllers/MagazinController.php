<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Magazin;
use App\Models\Mash;
use App\Models\Pdf;
use Illuminate\Http\Request;

class MagazinController extends Controller
{
    public function index2()
    {
        $magazins = Magazin::all();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        return view('magazin.dashboard', compact('magazins','mash','f','doctors'));
    }
    public function index()
    {$pdf=Pdf::all();
        $magazins = Magazin::all();
  $faculties  = Facutly::all();
        $departments = Department::all();
        return view('magazin', compact('magazins','faculties','departments','pdf'));
    }

    public function indexen()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $magazins = Magazin::all();
        $pdf=Pdf::all();
        return view('lang.magazin', compact('magazins','faculties','departments','pdf'));
    }
    // start destroy
    public function destroy(Magazin $magazin)
    {
        $magazin->delete();

        return redirect("/dashboard17");
    }



    public function insert()
    {

        return view('magazin.create');
    }
    public function create(Request $request)
    {



        $data = new Magazin();

        $input = $request->all();



        $data->tablecode = $request->tablecode;

        $data->details_en = $request->details_en;
        $data->details_ar = $request->details_ar;
        $data->save();
        return redirect('/dashboard17');
    }
    // start edit
    public function edit(Magazin $magazin)
    {
        return view('magazin.edit', ['magazin' => $magazin]);
    }

    // start update
    public function update( Magazin $magazin)
    {

        $magazin->update([

            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'tablecode' => request('tablecode'),
        ]);


        $magazin->save();
        return redirect('/dashboard17');
    }
}
