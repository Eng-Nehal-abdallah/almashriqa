<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facutly;
use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    public function index2()
    { $faculties  = Facutly::all();
        $departments = Department::all();
        $paper = Paper::all();

        return view('paper\dashboard', compact('paper','faculties','departments'));
    }
    public function index()
    { $Facutlies   = Facutly::all();
        $departments = Department::all();
        $paper = Paper::all();

        return view('paper', compact('paper','Facutlies','departments'));
    }
    public function indexen()
    { $faculties   = Facutly::all();
        $departments = Department::all();
        $paper = Paper::all();

        return view('lang\paper', compact('paper','faculties','departments'));
    }


    // start destroy
    public function destroy(Paper $paper)
    {
        $paper->delete();

        return redirect("/dashboard15");
    }



    public function insert()
    {

        return view('paper\create');
    }
    public function create(Request $request)
    {



        $data = new Paper();

        $input = $request->all();




        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->tablecode = $request->tablecode;

        $data->save();
        return redirect('/dashboard15');
    }
    // start edit
    public function edit(Paper $paper)
    {
        return view('paper\edit', ['paper' => $paper]);
    }
    public function paperinner(Paper $paper)
    {$faculties  = Facutly::all();
        $departments = Department::all();
        return view('paperinner', ['paper' => $paper],compact('faculties','departments'));
    }

    public function paperinneren(Paper $paper)
    {$faculties  = Facutly::all();
        $departments = Department::all();
        return view('lang\paperinner', ['paper' => $paper],compact('faculties','departments'));
    }
    // start update
    public function update( Paper $paper)
    {

        $paper->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'tablecode' => request('tablecode'),

        ]);


        $paper->save();
        return redirect('/dashboard15');
    }
}

