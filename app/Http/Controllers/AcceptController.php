<?php

namespace App\Http\Controllers;

use App\Models\Accept;
use App\Models\Department;
use App\Models\Facutly;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    public function index2()
    {    $Facutlies = Facutly::all();
        $departments = Department::all();
        $accepts = Accept::all();

        return view('accept\dashboard', compact('accepts','Facutlies','departments'));
    }
    public function index()
    {$Facutlies = Facutly::all();
        $departments = Department::all();
        $accepts = Accept::all();

        return view('accept', compact('accepts','Facutlies','departments'));
    }
    public function indexenn()
    {$Facutlies = Facutly::all();
        $departments = Department::all();
        $accepts = Accept::all();

        return view('lang\accept2', compact('accepts','Facutlies','departments'));
    }

    public function indexen()
    {$Facutlies = Facutly::all();
        $departments = Department::all();
        $accepts = Accept::all();

        return view('lang\accept', compact('accepts','Facutlies','departments'));
    }


    // start destroy
    public function destroy(Accept $accept)
    {
        $accept->delete();

        return redirect("/dashboard11");
    }



    public function insert()
    {

        return view('accept\create');
    }
    public function create(Request $request)
    {



        $data = new Accept();

        $input = $request->all();




        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_en = $request->details_en;
        $data->details_ar = $request->details_ar;
        $data->save();
        return redirect('/dashboard11');
    }
    // start edit
    public function edit(Accept $accept)
    {
        return view('accept\edit', ['accept' => $accept]);
    }

    // start update
    public function update( Accept $accept)
    {

        $accept->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('name_ar'),
            'details_en' => request('name_en'),
        ]);


        $accept->save();
        return redirect('/dashboard11');
    }
}
