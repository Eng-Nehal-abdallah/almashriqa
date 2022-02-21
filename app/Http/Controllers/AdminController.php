<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function adminlogin()
    {
        return view('auth.adminlogin');
    }
    public function checklogin(Request $request)
    {$this->validate( $request,[
        'email'=>'required|email',
        'password'=>'required|min:6',


    ]);
    if(Auth::guard('admins')->Auth::attempt(['email' => $request->email, 'password' => $request->password]))
      { return redirect()->intended(default:'/admin');
    }


    return back()->withInput($request->only(keys:'email'));
}
}