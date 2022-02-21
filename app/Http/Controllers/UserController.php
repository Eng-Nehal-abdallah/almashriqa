<?php

namespace App\Http\Controllers;

use App\Models\Facutly;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{    /**
    * Create a new controller instance.
    *
    * @return void
    */


    public function index()
    {

$users=User::all();
        return view('user/users/dashboard',compact('users'));
    }


    // start edit
    public function edit(User $user)
    {
$facutlies =Facutly::all();
        return view('user\users\edit', ['user' => $user],compact('facutlies'));
    }

    // start update
    public function update( User $user)
    {

        $user->update([
            'name' => request('name'),
            'usertype' => request('usertype'),
            'email' => request('email'),
            'password' =>Hash::make( request('password')),
            'id_facutly' => request('id_facutly'),
            'pass' => request('password'),

        ]);






        $user->save();
        return redirect('/dashboard21');
    }
    // start destroy
    public function destroy(User $user)
    {
        $user->delete();

        return redirect("/dashboard21");
    }


    public function insert()
    {
        $facutlies=Facutly::all();
        return view('user\users\create',compact('facutlies'));
    }
    public function create(Request $request)
    {


        $data = new User();




        $data->name = $request->name;
        $data->email = $request->email;
        $data->pass = $request->password;
        $data->usertype = $request->usertype;
        $data->id_facutly = $request->id_facutly;
        $data->password =Hash::make( $request->password);


        $data->save();
        return redirect('/dashboard21');
    }


   public function __construct()
   {
       $this->middleware(middleware:'auth:web');
   }
    public function site()
    {
        return view('site');
    }

}
