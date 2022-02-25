<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Facutly;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{   public function indexen(Facutly $Facutly)
    { $Facutlies = Facutly::all();
        $departments = Department::all();
    $reseachments = Research::all();
        return view('lang.patentinner', ['facutly' => $Facutly],  compact('reseachments','Facutlies','departments'));
    }

    public function index2en(Department $department)
    { $Facutlies = Facutly::all();
        $departments = Department::all();
    $reseachments = Research::all();
        return view('lang.patentin', ['department' => $department],  compact('reseachments','Facutlies','departments'));
    }
    public function showen(Research $research)

    {   $Facutlies = Facutly::all();
        $departments = Department::all();
         $reseachments = Research::all();
        return view('lang.patent2', ['research' => $research],  compact('reseachments','Facutlies','departments'));
    }
    public function index(Facutly $Facutly)
    {
        $Facutlies = Facutly::all();
        $departments = Department::all();
        $reseachments = Research::all();
        return view('patentinner', ['facutly' => $Facutly],  compact('reseachments','Facutlies','departments'));
    }

    public function index2(Department $department)
    { $Facutlies = Facutly::all();
        $departments = Department::all();
    $reseachments = Research::all();
        return view('patentin', ['department' => $department],  compact('reseachments','Facutlies','departments'));
    }
    public function show(Research $research)

    {    $Facutlies = Facutly::all();
        $departments = Department::all();
        $reseachments = Research::all();
        return view('patent2', ['research' => $research],  compact('reseachments','Facutlies','departments'));
    }

}
