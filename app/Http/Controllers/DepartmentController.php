<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Activity;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Lab;
use App\Models\Social;
use App\Models\Studentfirst;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function sh(Department $Department)
    {
$faculties = Facutly::all();
$departments = Department::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $labs = Lab::all();
        $achievements=achievement::all();
        $students=Studentfirst::all();
        return view('depart',compact('students','achievements','labs','doctors','socials','activities','faculties','departments'),['department' => $Department]);
    }
    public function shen(Department $Department)
    {      $faculties = Facutly::all();
        $departments = Department::all();
        $labs = Lab::all();
        $doctors = Doctors::all();
        $socials=Social::all();
        $activities=Activity::All();
        $achievements=achievement::all();
        $students=Studentfirst::all();
        return view('lang\depart',compact('students','labs','doctors','socials','activities','faculties','departments','achievements'),['department' => $Department]);
    }
    public function index()
    {
        ;
        $departments = Department::all();
        $facutlies = Facutly::all();
        return view('department/dashboard', compact('departments', 'facutlies'));
    }


    // start edit
    public function edit(department $department)
    {$facutlies=Facutly::all();
        return view('department\edit',compact('facutlies') ,['department' => $department]);
    }

    // start update
    public function update(Request $request, department $Department)
    {

        $Department->update([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'details_ar' => request('details_ar'),
            'details_en' => request('details_en'),
            'id_facutly' => request('id_facutly'),
            'color' => request('color'),
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $Department->update($input);
            $Department['image'] = $destinationPath . "$profileImage";

        } else {
            unset($input['image']);
        }

$Department->save();
        return redirect('/dashboard3');
    }
    // start destroy
    public function destroy(Department $Department)
    {
        $Department->delete();

        return redirect("/dashboard3");
    }



    public function finddepartment($id)
    {
            $department = Department::where("category_id",$id)->pluck("name","id");
            return json_encode($department);
    }

	// public function finddepartment(Request $request){

    //  //then sent this data to ajax success
	//     //if our chosen id and products table prod_cat_id col match the get first 100 data

    //     //$request->id here is the id of our chosen option id
    //     $data=Department::where('id_facutly',$request->id)->pluck('name_ar', 'id');
    //     return json_encode($data);//then sent this data to ajax success
	// }

  public function getState(Request $request){
		$id_facutly=$request->post('id_facutly');
		$department=Department::where('id_facutly',$id_facutly)->get();
		$html='<option value="">Select State</option>';
		foreach($department as $list){
			$html.='<option value="'.$list->id.'">'.$list->name_ar.'</option>';
		}
		echo $html;
	}


    public function insert()
    {
        $facutlies = Facutly::all();
        return view('department\create', compact('facutlies'));
    }
    public function create(Request $request)
    {


        $data = new Department();

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
        $data->id_facutly = $request->id_facutly;
        $data->details_en = $request->details_en;
        $data->color = $request->color;
        $data->save();
        return redirect('/dashboard3');
    }
}
