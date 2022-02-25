<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lab;
use App\Models\Mash;
use Illuminate\Http\Request;

class LabController extends Controller
{ public function indexxen(Department $department)
    {
        $labs = Lab::all();
$Facutlies = Facutly::all();
        $departments = Department::all();
        return view('lang\lab2', compact('labs','departments','Facutlies'),['department'=>$department]);
    }
    public function indexen(Facutly $facutly)
    {
        $labs = Lab::all();
$Facutlies = Facutly::all();
        $departments = Department::all();
        return view('lang\lab', compact('labs','departments','Facutlies'),['facutly'=>$facutly]);
    }
    public function showen(Lab $lab)
    {$Facutlies = Facutly::all();
        $departments = Department::all();
        $labs = Lab::all();

        return view('lang\labinner',['lab'=>$lab],compact('departments','Facutlies'));
    }


    public function indexx(Department $department)
    {$Facutlies = Facutly::all();
        $departments = Department::all();
        $labs = Lab::all();

        return view('lab2', compact('labs','departments','Facutlies'),['department'=>$department]);
    }
    public function index(Facutly $facutly)
    {
        $labs = Lab::all();
$Facutlies = Facutly::all();
        $departments = Department::all();
        return view('lab', compact('labs','departments','Facutlies'),['facutly'=>$facutly]);
    }
    public function show(Lab $lab)
    {
        $labs = Lab::all();
$Facutlies = Facutly::all();
        $departments = Department::all();
        return view('labinner',['lab'=>$lab],compact('departments','Facutlies'));
    }


    // start destroy
    public function index2()
    {
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

$labs=Lab::all();
        return view('lab\dashboard',compact('labs','mash','f','doctors'));
    }


    // start edit
    public function edit(Lab $lab)
    {

        return view('lab\edit', ['Lab' => $lab]);
    }

    // start update
    public function update(Request $request, Lab $lab)
    {

        $lab->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'id_faculty' => request('id_faculty'),

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $lab->update($input);
            $lab['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }
        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            $input['images'] = "$profileImage";
            $lab->update($input);
            $lab['images'] = $destinationPath . "$profileImage";
        } else {
            unset($input['images']);
        }
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
            $lab->update($input);
            $lab['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $lab->save();
        return redirect('/dashboard13');
    }
    // start destroy
    public function destroy(Lab $lab)
    {
        $lab->delete();

        return redirect("/dashboard13");
    }


    public function insert()
    {

        return view('lab\create');
    }
    public function create(Request $request)
    {


        $data = new Lab();

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

        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";

            $data['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }


        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;
        $data->details_ar = $request->details_ar;
        $data->details_en = $request->details_en;


        $data->save();
        return redirect('dashboard13');
}
}
