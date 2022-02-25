<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Leader;
use App\Models\Leaderuni;
use App\Models\Mash;
use App\Models\Social;
use App\Models\Type;
use App\Models\Typeachievement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LeaderController extends Controller
{//show all leaders of
    public function show()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();
        $socials=Social::all();
        $types=Type::all();
        $leaders=Leaderuni::all();
        return view('leaderuni', compact('socials','types','doctors','faculties','departments','leaders'));
    }

    public function showen()
    { $faculties = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();
        $socials=Social::all();
        $types=Type::all();
        $leaders=Leaderuni::all();
        return view('lang.leaderuni', compact('socials','types','doctors','faculties','departments','leaders'));
    }
    public function sh(Facutly $Facutly)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();

        return view('doctors', ['facutly' => $Facutly], compact('doctors','Facutlies','departments'));
    }
    public function shen(Facutly $Facutly)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();

        return view('lang.doctors', ['facutly' => $Facutly], compact('doctors','Facutlies','departments'));
    }
    public function social(Leader $leader)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $socials = Social::all();
        return view('leader.social media.dashboard', ['leader' => $leader], compact('socials','Facutlies','departments'));
    }
    public function shD(Department $Department)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();
        return view('doctor', ['Department' => $Department], compact('doctors','Facutlies','departments'));
    }
    public function shDen(Department $Department)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $doctors = Leader::all();
        return view('lang.doctor', ['Department' => $Department], compact('doctors','Facutlies','departments'));
    }
    public function insert()
    {
        $facutlies = Facutly::all();
        $departments=Department::all();
        return view('leader.create',compact('facutlies','departments'));
    }
    public function insert_socialmedia(Leader $leader)
    {$types=Type::all();
        return view('leader.social media.create',compact('types'),['leader' => $leader]);
    }

    public function create_social(Request $request)
    {


        $data = new Social();


        $data->name_ar = $request->name_ar;
        $data->link = $request->link;
        $data->id_leader = $request->id_leader;
        $data->name_en = $request->name_en;


        $data->save();
      return redirect()->back();
    }
    //search live

    Public function search(Request $request)
{
if($request->ajax())
{
$data = Leader::search($request->get('full_text_search_query'))->get();;
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
       $data =Leader::where('name_ar', 'like', '%'.$query.'%')
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

        $data = new Leader();

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
        $doctors = Leader::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('leader.dashboardp',['facutly'=>$facutly], compact('doctors','facutlies','departments'));
    }
    public function index()
    {
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $d=Doctors::all();

        $doctors = Leader::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('leader.dashboard', compact('doctors','facutlies','departments','mash','f','d'));
    }
   //start edit
   public function editdoc(Leader $doctor)
   {$facutlies =Facutly::all();
       $departments=Facutly::all();
       return view('leader.edit' ,compact('facutlies','departments'),['doctor' => $doctor]);
   }

    //start edit
    public function edit(Leader $leader)
    {$facutlies =Facutly::all();
        $departments=Facutly::all();
        return view('leader.edit' ,compact('facutlies','departments'),['leader' => $leader]);
    }
    //start edit
    public function profile(Leader $doctor)
    {$faculties =Facutly::all();
        $departments=Facutly::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
      public function profileen(Leader $doctor)
    {$faculties =Facutly::all();
        $departments=Facutly::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('lang.profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
    // start update
    public function update(Request $request, Leader $data)
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
        return redirect('/dashboard25');
    }
    public function destroy(Leader $leader)
    {
        $leader->delete();

        return redirect("/dashboard25");
    }
    public function destroysocial(Social $social)
    {
        $social->delete();

        return  redirect()->back();
    }
}
