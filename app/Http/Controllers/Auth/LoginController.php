<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth::user()->usertype == 'admin'){
            return 'test-success';

        }else if(Auth::user()->usertype == 'doctor'){
            return 'test-success-doc';
        }else if(Auth::user()->usertype == 'student'){

            return 'test-success-stu';
        }
        else if(Auth::user()->usertype == 'facutly'){

            return 'test-success-facu';
        }
        else if(Auth::user()->usertype == 'x-team'){
            return 'test-success-xteam';
        }else{
            return redirect('/');
        }


    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
