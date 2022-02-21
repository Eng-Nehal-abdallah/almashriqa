<?php

namespace App\Http\Controllers;

use App\Models\Compus;
use App\Models\Department;
use App\Models\Facutly;
use Illuminate\Http\Request;

class CompusController extends Controller
{

    public function index()
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $compus = Compus::all()->first();

        return view('compus', compact('compus','faculties','departments'));
    }
    public function indexen()
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $compus = Compus::all()->first();

        return view('lang\compus', compact('compus','Facutlies','departments'));
    }

    public function index2()
    {

$compus=Compus::all();
        return view('compus\dashboard',compact('compus'));
    }


    // start edit
    public function edit(Compus $compus)
    {

        return view('compus\edit', ['compus' => $compus]);
    }

    // start update
    public function update(Request $request, Compus $compus)
    {

        $compus->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),


        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $compus->update($input);
            $compus['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }


        $compus->save();
        return redirect('/dashboard14');
    }
    // start destroy
    public function destroy(Compus $compus)
    {
        $compus->delete();

        return redirect("/dashboard14");
    }


    public function insert()
    {

        return view('compus\create');
    }
    public function create(Request $request)
    {


        $data = new Compus();

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
        $data->details_ar = $request->details_ar;
        $data->details_en = $request->details_en;


        $data->save();
        return redirect('/dashboard14');
    }
}
