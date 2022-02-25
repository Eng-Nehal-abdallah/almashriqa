<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Mash;
use App\Models\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {$mash = Mash::all()->first();
        $f=Facutly::all();
        $doctors=Doctors::all();



        $pdf = Pdf::all();
        return view('pdf.dashboard', compact('pdf','mash','f','doctors'));
    }
    // start destroy
    public function destroy(Pdf $pdf)
    {
        $pdf->delete();

        return redirect()->back();
    }


    public function insert()
    {

        return view('pdf.create');
    }
    public function create(Request $request)
    {


        $data = new Pdf();

        $input = $request->all();

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
        $data->save();
        return redirect()->back();
    }
}
