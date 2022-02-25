<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Department;
use App\Models\Doctors;
use App\Models\Facutly;
use App\Models\Leaderuni;
use App\Models\Mash;
use App\Models\Social;
use App\Models\Type;
use App\Models\Typeachievement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LeaderuniController extends Controller
{    public function insert()
    {
        $facutlies = Facutly::all();
        $departments=Department::all();
        return view('leaderuni.create',compact('facutlies','departments'));
    }
    public function insert_socialmedia(Leaderuni $leaderuni)
    {$types=Type::all();
        return view('leaderuni\social media\create',compact('types'),['leaderuni' => $leaderuni]);
    }
    public function social(Leaderuni $leaderuni)
    {      $Facutlies = Facutly::all();
        $departments = Department::all();
        $socials = Social::all();
        return view('leaderuni\social media\dashboard', ['leaderuni' => $leaderuni], compact('socials','Facutlies','departments'));
    }

    public function create_social(Request $request)
    {


        $data = new Social();


        $data->name_ar = $request->name_ar;
        $data->link = $request->link;
        $data->id_leaderuni = $request->id_leaderuni;
        $data->name_en = $request->name_en;


        $data->save();
      return redirect()->back();
    }
    //search live


    public function create(Request $request)
    {
        $datas = new User();

        $data = new Leaderuni();

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
        $doctors = Leaderuni::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('doctors\dashboardp',['facutly'=>$facutly], compact('doctors','facutlies','departments'));
    }
    public function index()
    {
        $mash = Mash::all()->first();
        $f=Facutly::all();
        $d=Doctors::all();

        $doctors = Leaderuni::all();
        $facutlies =Facutly::all();
        $departments=Department::all();
        return view('leaderuni\dashboard', compact('doctors','facutlies','departments','mash','f','d'));
    }
   //start edit
   public function editdoc(Leaderuni $leaderuni)
   {$facutlies =Facutly::all();
       $departments=Facutly::all();
       return view('leaderuni\edit' ,compact('facutlies','departments'),['leaderuni' => $leaderuni]);
   }

    //start edit
    public function edit(Leaderuni $leaderuni)
    {$facutlies =Facutly::all();
        $departments=Facutly::all();
        return view('leaderuni\edit' ,compact('facutlies','departments'),['leaderuni' => $leaderuni]);
    }
    //start edit
    public function profile(Leaderuni $doctor)
    {$faculties =Facutly::all();
        $departments=Facutly::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
      public function profileen(Leaderuni $doctor)
    {$faculties =Facutly::all();
        $departments=Department::all();
        $achievementes=achievement::all();
        $socials=Social::all();
        $types=Typeachievement::all();
        $typs=Type::all();
        return view('lang\profile' ,compact('faculties','departments','achievementes','socials','types','typs'),['doctor' => $doctor]);
    }
    // start update
    public function update(Request $request, Leaderuni $data)
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
    public function destroy(Leaderuni $doctor)
    {
        $doctor->delete();

        return redirect("/dashboard26");
    }
    public function destroysocial(Social $social)
    {
        $social->delete();

        return redirect("/dashboard26");
    }













    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('search');
      if($query != '')
      {
       $data =Leaderuni::where('name_ar', 'like', '%'.$query.'%')
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

}
