<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SupervisorLoginRequest;

use App\Supervisor;



class SupervisorLoginController extends Controller
{
  public function showLoginForm()
  {
  return view('auth.supervisorLogin');
  }




  public function login(SupervisorLoginRequest $request)
  {
    $userdata = array(
        'email'     => $request->email,
        'password'  => $request->password
    );


$Supervisor = Supervisor::where('email',$request->email)->first();

    if ($Supervisor->is_active == 0){
      return \Redirect::to('login');
    }

    // attempt to do the login
    if (\Auth::guard('supervisor')->attempt($userdata)) {

          return \Redirect::to('/categories');

    } else {

        return \Redirect::to('login');

    }
  }



  public function logout(Request $request) {
    \Auth::guard('supervisor')->logout();
    return redirect('/supervisor/login');
  }
}
