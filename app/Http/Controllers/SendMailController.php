<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendEmail;

class SendMailController extends Controller
{
   function index(){
       return view('sendmail');
   }
   function send(Request $request){
    $this->validate($request,[
'name'=>'required',

'email'=>'required',
'message'=>'required',

    ]);
    $data=array(
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message

    );
    $datas=array(
        'name'=>'جامعه المشرق',
        'email'=>'nehalabdallah0315@gmail.com',
        'message'=>'تم ارسال الطلب و جاري المراجعه'

    );
    Mail::to('nehalabdallah0315@gmail.com')->send(new SendMail($data));

    Mail::to($data['email'])->send(new SendEmail($datas));
    // Mail::send('emails.contact', $data, function($message) use ($data) {
    //     $message->from('$data['email']');
    //     $message->to('mohammad.a.z@uom.edu.iq');
    //     $message->subject($data['message']);
    //   });
    return back()->with('success','thank for contacing');
}
}
