<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Leaderuni;
use App\Models\Social;
use App\Models\Type;
use App\Models\Typeachievement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\type;

class DoctorsController extends Controller
{
    public function indexdoctor()
    {
        $departments = Department::all();
        $Facutlies = Facutly::all();
        return view('Facutliesdoc', compact('Facutlies', 'departments'));

        // return view('Certifieds');
    }
    public function indexdocen()
    {
        $departments = Department::all();
        $Facutlies = Facutly::all();
        return view('lang\Facutliesdoc', compact('Facutlies', 'departments'));

        // return view('Certifieds');
    }




    public function doctors(Facutly $facutly)
    { $types=Type::all();
        $departments = Department::all();
        $Facutlies = Facutly::all();
        $leaders=Leaderuni::all();
        $doctors=Doctors::all();
        $socials=Social::all();
        return view('doctor-card',['facutly'=>$facutly] ,compact('types','doctors','Facutlies', 'departments','leaders','socials'));

        // return view('Certifieds');
    }
    public function doctorsen(Facutly $facutly)
    {  $leaders=Leaderuni::all();
        $doctors=Doctors::all();
        $departments = Department::all();
        $Facutlies = Facutly::all();
        $types=Type::all();
        $socials=Social::all();
        return view('lang\doctor-card',['facutly'=>$facutly] ,compact('types','doctors','Facutlies', 'departments','leaders','socials'));

        // return view('Certifieds');
    }



    public function doctorsdepart(Department $department)
    { $types=Type::all();
        $departments = Department::all();
        $Facutlies = Facutly::all();
        $leaders=Leaderuni::all();
        $doctors=Doctors::all();
        $socials=Social::all();
        return view('doctor-cardde',['department'=>$department] ,compact('types','doctors','Facutlies', 'departments','leaders','socials'));

        // return view('Certifieds');
    }
    public function doctorsendepart(Department $department)
    {  $leaders=Leaderuni::all();
        $doctors=Doctors::all();
        $departments = Department::all();
        $Facutlies = Facutly::all();
        $types=Type::all();
        $socials=Social::all();
        return view('lang\doctor-cardde',['department'=>$department] ,compact('types','doctors','Facutlies', 'departments','leaders','socials'));

        // return view('Certifieds');
    }


    public function show(Facutly $Facutly)
    { $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();

        return view('doctors\search', ['facutly' => $Facutly], compact('doctors','Facutlies','departments'));
    }
    public function sh(Facutly $Facutly)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();

        return view('doctors', ['facutly' => $Facutly], compact('doctors','Facutlies','departments'));
    }
    public function shen(Facutly $Facutly)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();

        return view('lang\doctors', ['facutly' => $Facutly], compact('doctors','Facutlies','departments'));
    }
    public function social(Doctors $doctor)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $socials = Social::all();
        return view('doctors\social media\dashboard', ['doctor' => $doctor], compact('socials','Facutlies','departments'));
    }
    public function shD(Department $Department)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        return view('doctor', ['Department' => $Department], compact('doctors','Facutlies','departments'));
    }
    public function shDen(Department $Department)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Doctors::all();
        return view('lang\doctor', ['Department' => $Department], compact('doctors','Facutlies','departments'));
    }
    public function insert()
    {
        $facutlies = Facutly::all();
        $departments=Department::all();
        return view('doctors\create',compact('facutlies','departments'));
    }
    public function insert_socialmedia(Doctors $doctor)
    {$types=Type::all();
        return view('doctors\social media\create',compact('types'),['doctor' => $doctor]);
    }

    public function create_social(Request $request)
    {


        $data = new Social();


        $data->name_ar = $request->name_ar;
        $data->link = $request->link;
        $data->id_doctor = $request->id_doctor;
        $data->name_en = $request->name_en;


        $data->save();
      return redirect()->back();
    }
    //search live

    Public function search(Request $request)
{
if($request->ajax())
{
$data = Doctors::search($request->get('full_text_search_query'))->get();;
return response()->json($data);
}
}

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('search');
      if($query != '')
      {
       $data =Doctors::where('name_ar', 'like', '%'.$query.'%')
         ->orWhere('name_en', 'like', '%'.$query.'%')
         ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name_ar.'</td>
         <td>'.$row->name_en.'</td>
         <td>'.$row->country_ar.'</td>
         <td>'.$row->country_en.'</td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    public function create(Request $request)
    {
        $datas = new User();

        $data = new Doctors();

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
        $data->phone = $request->phone;
        $data->password =Hash::make( $request->password);
        $data->name_en = $request->name_en;
        $data->grade_en = $request->grade_en;
        $data->	grade_ar = $request->grade_ar;
        $data->details_ar = $request->details_ar;
        $data->id_facutly = $request->id_facutly;
        $data->date_hirement=$request->date_hirement;
        $data->details_en = $request->details_en;
        $data->university_certified_en = $request->	university_certified_en;

        $data->birthday = $request->birthday;
        $data->university_certified_ar = $request->university_certified_ar;
        $data->facutly_certified_ar = $request->facutly_certified_ar;
        $data->facutly_certified_en = $request->facutly_certified_en;
        $data->certified_en = $request->certified_en;
        $data->certified_ar = $request->certified_ar;
        $data->gender_en = $request->gender_en;
        $data->gender_ar  = $request->gender_ar;

        $data->position_ar = $request->position_ar;
        $data->posiotion_en = $request->posiotion_en;
        $data->email = $request->email;
        $data->details_en = $request->details_en;
        $data->notes_ar = $request->notes_ar;
        $data->country_certified_ar = $request->country_certified_ar;
        $data->date_certified  = $request->date_certified;



        $data->mag_certified_en = $request->mag_certified_en;
        $data->mag_certified_ar = $request->mag_certified_ar;
        $data->bac_certified_en = $request->bac_certified_en;
        $data->bac_certified_ar = $request->bac_certified_ar;
        $data->country_certified_en = $request->country_certified_en;
        $data->public_specific_ar = $request->public_specific_ar;
        $data->public_specific_en = $request->public_specific_en;
        $data->private_specific_ar  = $request->private_specific_ar;

        $data->private_specific_en = $request->private_specific_en;
        $data->type_hirement_ar = $request->type_hirement_ar;
        $data->type_hirement_en = $request->type_hirement_en;
        $data->shift_ar = $request->shift_ar;
        $data->shift_en = $request->shift_en;
        $data->Nationality_ar = $request->Nationality_ar;
        $data->	Nationality_en  = $request->Nationality_en;

        $datas->password =Hash::make( $request->password);
        $datas->name = $request->name_ar;
        $datas->email = $request->email;
        $datas->usertype = "doctor";
        $datas->id_facutly = $request->id_facutly;
        $data->country_ar = $request->country_ar;
        $data->country_en = $request->country_en;
        $data->comrades = $request->comrades;
        $data->mother_name_ar = $request->mother_name_ar;
        $data->local = $request->local;
        $data->darcode = $request->darcode;
        $data->mother_name_en = $request->mother_name_en;
        $data->id_department  = $request->id_department;

        $data->notes_en = $request->notes_en;
        $data->details_ar = $request->details_ar;

        $data->save();


        $datas->save();

        return redirect('/dashboard4');
    }

    public function indexp(Facutly $facutly)
    {
        $doctors = Doctors::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('doctors\dashboardp',['facutly'=>$facutly], compact('doctors','facutlies','departments'));
    }
    public function index()
    {
        $doctors = Doctors::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('doctors\dashboard', compact('doctors','facutlies','departments'));
    }
   //start edit
   public function editdoc(Doctors $doctor)
   {$facutlies =Facutly::all();
       $departments=Facutly::all();
       return view('doctors\edit' ,compact('facutlies','departments'),['doctor' => $doctor]);
   }

    //start edit
    public function edit(Doctors $doctor)
    {$facutlies =Facutly::all();
        $departments=Facutly::all();
        return view('doctors\edit' ,compact('facutlies','departments'),['doctor' => $doctor]);
    }
    //start edit
    public function profile(Doctors $doctor)
    {$faculties =Facutly::all();
        $departments=Facutly::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
      public function profileen(Doctors $doctor)
    {$faculties =Facutly::all();
        $departments=Department::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('lang\profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
    // start update
    public function update(Request $request, Doctors $data)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $data->update($input);
            $data['image'] = $destinationPath . "$profileImage";
            $data->save();
        } else {
            unset($input['image']);
        }

        $data->name_ar = $request->name_ar;
        $data->phone = $request->phone;

        $data->name_en = $request->name_en;
        $data->grade_en = $request->grade_en;
        $data->	grade_ar = $request->grade_ar;
        $data->details_ar = $request->details_ar;

        $data->date_hirement=$request->date_hirement;
        $data->details_en = $request->details_en;
        $data->university_certified_en = $request->	university_certified_en;
        $data->birthday = $request->birthday;
        $data->university_certified_ar = $request->university_certified_ar;
        $data->facutly_certified_ar = $request->facutly_certified_ar;
        $data->facutly_certified_en = $request->facutly_certified_en;
        $data->certified_en = $request->certified_en;
        $data->certified_ar = $request->certified_ar;
        $data->gender_en = $request->gender_en;
        $data->gender_ar  = $request->gender_ar;
        $data->position_ar = $request->position_ar;
        $data->posiotion_en = $request->posiotion_en;
        $data->email = $request->email;
        $data->details_en = $request->details_en;
        $data->notes_ar = $request->notes_ar;
        $data->country_certified_ar = $request->country_certified_ar;
        $data->date_certified  = $request->date_certified;
        $data->mag_certified_en = $request->mag_certified_en;
        $data->mag_certified_ar = $request->mag_certified_ar;
        $data->bac_certified_en = $request->bac_certified_en;
        $data->bac_certified_ar = $request->bac_certified_ar;
        $data->country_certified_en = $request->country_certified_en;
        $data->public_specific_ar = $request->public_specific_ar;
        $data->public_specific_en = $request->public_specific_en;
        $data->private_specific_ar  = $request->private_specific_ar;
        $data->private_specific_en = $request->private_specific_en;
        $data->type_hirement_ar = $request->type_hirement_ar;
        $data->type_hirement_en = $request->type_hirement_en;
        $data->shift_ar = $request->shift_ar;
        $data->shift_en = $request->shift_en;
        $data->Nationality_ar = $request->Nationality_ar;
        $data->	Nationality_en  = $request->Nationality_en;
        $data->country_ar = $request->country_ar;
        $data->country_en = $request->country_en;
        $data->comrades = $request->comrades;
        $data->mother_name_ar = $request->mother_name_ar;
        $data->local = $request->local;
        $data->darcode = $request->darcode;
        $data->mother_name_en = $request->mother_name_en;

        $data->notes_en = $request->notes_en;
        $data->details_ar = $request->details_ar;

        $data->save();
        return redirect('/dashboard4');
    }
    public function destroy(Doctors $doctor)
    {
        $doctor->delete();

        return redirect("/dashboard4");
    }
    public function destroysocial(Social $social)
    {
        $social->delete();

        return redirect("/dashboard4");
    }
}
