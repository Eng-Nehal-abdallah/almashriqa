<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facutly;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index()
    { $Facutlies = Facutly::all();
        $departments = Department::all();
        $requirements = Requirement::all();
        return view('requirement',  compact('requirements','Facutlies','departments'));
    }

}
