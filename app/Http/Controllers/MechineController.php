<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Facutly;
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
}
