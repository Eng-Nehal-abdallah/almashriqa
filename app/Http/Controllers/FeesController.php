<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facutly;
use App\Models\Fees;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function index2()
    {
        $fees = Fees::all();

        return view('fees\dashboard', compact('fees'));
    }
    public function index()
    {
        $fees = Fees::all();
        $Facutlies = Facutly::all();
        $departments = Department::all();
        return view('fees', compact('fees', 'Facutlies', 'departments'));
    }

    public function indexen()
    {
        $faculties = Facutly::all();
        $departments = Department::all();
        $fees = Fees::all();

        return view('lang\fees', compact('fees', 'faculties', 'departments'));
    }
    // start destroy
    public function destroy(Fees $fees)
    {
        $fees->delete();

        return redirect("/dashboard18");
    }



    public function insert()
    {

        return view('fees\create');
    }
    public function create(Request $request)
    {



        $data = new Fees();

        $input = $request->all();


        $data->tablecode_ar = $request->tablecode_ar;
        $data->tablecode = $request->tablecode;


        $data->save();
        return redirect('/dashboard18');
    }
    // start edit
    public function edit(Fees $fees)
    {
        return view('fees\edit', ['fees' => $fees]);
    }

    // start update
    public function update(Fees $fees)
    {

        $fees->update([


            'tablecode_ar' => request('tablecode_ar'),
            'tablecode' => request('tablecode'),
        ]);


        $fees->save();
        return redirect('/dashboard18');
    }
}
