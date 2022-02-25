<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use App\Models\Typeachievement;
use Illuminate\Http\Request;

class TypeahievementController extends Controller
{
    public function index()
    {$types = Typeachievement::all();

        $mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();
        return view('achievement\Type\dashboard',compact('types','mash','f','doctors'));
    }



    // start destroy
    public function destroy(Typeachievement $type)
    {
        $type->delete();

        return redirect("/dashboard6");
    }



    public function insert()
    {

        return view('achievement\Type\create');
    }
    public function create(Request $request)
    {


        $data = new Typeachievement();

        $input = $request->all();




        $data->name_ar = $request->name_ar;
        $data->name_en = $request->name_en;

        $data->save();
        return redirect('/dashboard6');
    }
}
