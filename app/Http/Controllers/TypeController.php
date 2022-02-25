<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {$types = Type::all();
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();

        return view('doctors.social media.Type.dashboard',compact('types','mash','f','doctors'));
    }


    // start destroy
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect("/dashboard7");
    }



    public function insert()
    {

        return view('doctors.social media.Type.create');
    }
    public function create(Request $request)
    {



        $data = new Type();




        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;

        $data->save();
        return redirect('/dashboard7');
    }
}
