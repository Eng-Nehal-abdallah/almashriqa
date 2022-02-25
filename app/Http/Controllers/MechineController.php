<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use App\Models\Mechine;
use Illuminate\Http\Request;

class MechineController extends Controller
{
    public function indexen()
    {
        $agreements = Mechine::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang.agree', compact('agreements','faculties','departments'));
    }
  public function index()
    {    $faculties = Facutly::all();
        $departments = Department::all();
        $agreements = Mechine::all();

        return view('agree', compact('agreements','faculties','faculties','departments'));
    }



    public function index1()
    {$mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();



        $mechine = Mechine::all();
        return view('mechine.dashboard', compact('mechine','mash','f','doctors'));
    }
    // start destroy
    public function destroy(Mechine $Mechine)
    {
        $Mechine->delete();

        return redirect()->back();
    }


    public function insert()
    {

        return view('mechine.create');
    }
    public function create(Request $request)
    {


        $data = new Mechine();


        $data->details_ar = $request->details_ar;
        $data->details_en = $request->details_en;
        $data->save();
        return redirect()->back();
    }
}
