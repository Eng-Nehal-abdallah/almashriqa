<?php

namespace App\Http\Controllers;

use App\Models\Admindepart;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use Illuminate\Http\Request;

class AdmindepartController extends Controller
{
    public function index2()
    {
        $admin = Admindepart::all()->first();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        return view('admindepart\dashboard', compact('admin','mash','f','doctors'));
    }
    public function index()
    {    $Facutlies = Facutly::all();
        $departments = Department::all();
        $admins = Admindepart::all();

        return view('admindepart', compact('admins','Facutlies','departments'));
    }
    public function indexen()
    {    $Facutlies = Facutly::all();
        $departments = Department::all();
        $admins = Admindepart::all();

        return view('lang\admindepart', compact('admins','Facutlies','departments'));
    }
    // start edit
    public function edit(Admindepart $admindepart)
    {
        return view('admindepart\edit', ['admindepart' => $admindepart]);
    }

    // start update
    public function update( Admindepart $admindepart)
    {

        $admindepart->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('name_ar'),
            'details_en' => request('name_en'),
            'tablecode' => request('tablecode'),
        ]);


        $admindepart->save();
        return redirect('/dashboard12');
    }
}
