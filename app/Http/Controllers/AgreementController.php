<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Department;
use App\Models\Facutly;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function indexen()
    {
        $agreements = Agreement::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang.agreement', compact('agreements','faculties','departments'));
    }
    public function indexenag()
    {
        $agreements = Agreement::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang.agree', compact('agreements','faculties','departments'));
    }
    public function index()
    {    $faculties = Facutly::all();
        $departments = Department::all();
        $agreements = Agreement::all();

        return view('agreement', compact('agreements','faculties','faculties','departments'));
    }
    public function detailsen(Agreement $agreement)
    {    $faculties = Facutly::all();
        $departments = Department::all();
        $agreements = Agreement::all();

        return view('lang.agreement-inner', ['agreement'=>$agreement],compact('agreements','faculties','faculties','departments'));
    }
    public function details(Agreement $agreement)
    {    $faculties = Facutly::all();
        $departments = Department::all();
        $agreements = Agreement::all();

        return view('agreement-inner', ['agreement'=>$agreement],compact('agreements','faculties','faculties','departments'));
    }
    public function index2()
    {

$agreement=Agreement::all();
        return view('agreement.dashboard',compact('agreement'));
    }
    public function indexag()
    {    $faculties = Facutly::all();
        $departments = Department::all();
        $agreements = Agreement::all();

        return view('agree', compact('agreements','faculties','faculties','departments'));
    }



    // start edit
    public function edit(Agreement $agreement)
    {

        return view('agreement.edit', ['agreement' => $agreement]);
    }

    // start update
    public function update(Request $request, Agreement $agreement)
    {

        $agreement->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'abstract_ar' => request('abstract_ar'),
            'abstract_en' => request('abstract_en'),

        ]);

        $input = $request->all();

        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            $input['images'] = "$profileImage";
            $agreement->update($input);
            $agreement['images'] = $destinationPath . "$profileImage";
        } else {
            unset($input['images']);
        }
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $agreement->update($input);
            $agreement['image'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image']);
        }
        if ($pdf = $request->file('pdf')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['pdf'] = "$profileImage";
            $agreement->update($input);
            $agreement['pdf'] = $destinationPath . "$profileImage";
        } else {
            unset($input['pdf']);
        }
        if ($image2 = $request->file('image2')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $input['image2'] = "$profileImage";
            $agreement->update($input);
            $agreement['image2'] = $destinationPath . "$profileImage";
        } else {
            unset($input['image2']);
        }

        $agreement->save();
        return redirect('/dashboard12');
    }
    // start destroy
    public function destroy(Agreement $agreement)
    {
        $agreement->delete();

        return redirect("/dashboard12");
    }


    public function insert()
    {

        return view('agreement.create');
    }
    public function create(Request $request)
    {


        $data = new Agreement();

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

        if ($images = $request->file('images')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $images->getClientOriginalExtension();
            $images->move($destinationPath, $profileImage);
            $input['images'] = "$profileImage";
            $data->update($input);
            $data['images'] = $destinationPath . "$profileImage";
        } else {
            unset($input['images']);
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
        $data->abstract_en = $request->abstract_en;
        $data->abstract_ar = $request->abstract_ar;

        $data->save();
        return redirect('/dashboard12');
    }

}
