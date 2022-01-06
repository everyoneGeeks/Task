<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;


use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| adminsController
|--------------------------------------------------------------------------
| this will handle login/out admins part
|
*/
/*
           | |         (_)
   __ _  __| |_ __ ___  _ _ __  ___
  / _` |/ _` | '_ ` _ \| | '_ \/ __|
 | (_| | (_| | | | | | | | | | \__ \
  \__,_|\__,_|_| |_| |_|_|_| |_|___/
 */
class AdminLoginController extends Controller
{


public function showLoginForm()
{
return view('auth.login');
}




public function login(AdminLoginRequest $request)
{
  $userdata = array(
      'email'     => $request->email,
      'password'  => $request->password
  );

  // attempt to do the login
  if (\Auth::guard('admin')->attempt($userdata)) {

        return \Redirect::to('/supervisors');

  } else {

      return \Redirect::to('login');

  }
}



public function logout(Request $request) {
  \Auth::guard('admin')->logout();
  return redirect('/admin/login');
}
}
