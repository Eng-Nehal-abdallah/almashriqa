<?php

namespace App\Http\Controllers;

use App\Models\achievement;
use App\Models\Department;
use App\Models\Facutly;
use App\Models\Labexam;
use Illuminate\Http\Request;

class LabExamController extends Controller
{
    public function index()
    {

        $labexams = Labexam::all();

        return view('exams\labexam\dashboard',compact('labexams'));
    }
    public function indexp(Facutly $facutly )
    {

        $labexams = Labexam::all();

        return view('exams\labexam\dashboardp',compact('labexams'),['facutly'=>$facutly ]);
    }
    public function indexfac(Facutly $faculty)
    {$labexams = Labexam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('labexam',compact('labexams','faculties','departments'),['faculty'=>$faculty]);
    }

    public function indexfacd(Department $department)
    {$labexams = Labexam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('labexamd',compact('labexams','faculties','departments'),['department'=>$department]);
    }

    public function indexfacen(Facutly $faculty)
    {$labexams = Labexam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang\labexam',compact('labexams','faculties','departments'),['faculty'=>$faculty]);
    }
    public function indexfacden(Department $department)
    {$labexams = Labexam::all();
        $faculties = Facutly::all();
        $departments = Department::all();
        return view('lang\labexamd',compact('labexams','faculties','departments'),['department'=>$department]);
    }


    // start destroy
    public function destroy(Labexam $labexam)
    {
        $labexam->delete();

        return redirect()->back();
    }



    public function insert(Facutly $facutly)
    {
$departments=Department::all();
        return view('exams\labexam\create',compact('departments'),['facutly'=>$facutly]);
    }
    public function create(Request $request)
    {



        $data = new Labexam();

        $input = $request->all();



        $data->id_faculty = $request->id_facutly;
        $data->lecture = $request->lecture;
        $data->day = $request->day;

        $data->save();
        return redirect()->back();
    }
     // start edit
public function edit(Labexam $labexam)
{
    return view('exams\labexam\edit',['labexam' => $labexam]);
}

// start update
public function update(Request $request, Labexam $labexam)
{

    $labexam->update([
        'day' => request('day'),
        'lecture' => request('lecture'),
    ]);


$labexam->save();
    return redirect('/dashboard9');
}


public function getStateprofileen(Request $request){
    $id_types=$request->post('id_types');
    $id_doctor=$request->post('id_doctor');
    $achievement=achievement::where('id_types',$id_types)->get();
    $html='';
    foreach($achievement as $list){
        if($list->id_types== $id_types && $list->id_doctor == $id_doctor){

            $html= ' <div class="row">


                <div class="row" >
                    <div class="timeline">
                        <div class="row" >
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fas fa-briefcase icon"></i>
                                    <span>'.$list->date.'  </span>

                                    <h3>'.$list->details_en.'</h3>
                                    <a href="'.$list->pdf.' ">Download  </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


    @endif


';
    }}

    echo $html;
}


public function getStateprofile(Request $request){
    $id_types=$request->post('id_types');
    $id_doctor=3;
    $facutlies=Facutly::all();
    $achievement=achievement::where('id_types',$id_types)->get();
    $html='';
    foreach($achievement as $list){
       if($list->id_types== $id_types && $list->id_doctor == $id_doctor){

        $html= '<div class="row">


                <div class="row">
                    <div class="timeline">
                        <div class="row">
                            <!-- timeline item start -->
                            <div class="timeline-item">
                                <div class="timeline-item-inner outer-shadow">
                                    <i class="fas fa-briefcase icon"></i>
                                    <span>'.$list->date.'  </span>

                                    <h3>{{ '.$list->details_ar.' }}</h3>
                                    <a href="{{ '.$list->pdf.' }}">تحميل الملف </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        <!-- experience end -->



';
    }}

    echo $html;
}



public function getState(Request $request){
    $day=$request->post('day');
    $fac=$request->post('fac');
    $labexams=Labexam::where('day',$day)->where('id_faculty',$fac)->get();
    $html='';
    foreach($labexams as $list){
        $html= $list->lecture;
    }

    echo $html;
}
public function getStateen(Request $request){
    $dayen=$request->post('dayen');
    $fac=$request->post('fac');
    $labexams=Labexam::where('dayen',$dayen)->where('id_faculty',$fac)->get();
    $html='';
    foreach($labexams as $list){
        $html= $list->lecture;
    }

    echo $html;
}

}
