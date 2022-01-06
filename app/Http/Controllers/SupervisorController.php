<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SupervisorRequest;
use App\Http\Requests\UpdateSupervisor;
use App\Supervisor;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| SupervisorController
|--------------------------------------------------------------------------
| this will handle all Supervisor part (CRUD)
|
*/

/*
_____                             _
/ ____|                           (_)
| (___  _   _ _ __   ___ _ ____   ___ ___  ___  _ __
\___ \| | | | '_ \ / _ \ '__\ \ / / / __|/ _ \| '__|
____) | |_| | |_) |  __/ |   \ V /| \__ \ (_) | |
|_____/ \__,_| .__/ \___|_|    \_/ |_|___/\___/|_|
           | |
           |_|
*/
class SupervisorController extends Controller
{
  /**
  * show list of Supervisors
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function list(){
  $Supervisors=Supervisor::get();
  return view('pages.supervisor.list',compact('Supervisors'));
  }
  /**
  * show info of  Supervisor By id
  * @pararm int $id Supervisor id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function info($id){
  $Supervisor=Supervisor::where('id',$id)->first();

  return view('pages.supervisor.info',compact('Supervisor'));
  }

  /**
  *  edit  Supervisor By id
  * @pararm int $id Supervisor id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formEdit($id){
      $Supervisor=Supervisor::where('id',$id)->first();
      return view('pages.supervisor.edit',compact('Supervisor'));
  }

  /**
  * edit  of  Supervisor By id
  * @pararm int $id Supervisor id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitEdit(UpdateSupervisor $request,$id){


          $Supervisor=Supervisor::where('id',$id)->first();
          $Supervisor->username=$request->username;
          $Supervisor->email=$request->email;
          $Supervisor->phone=$request->phone;
          $this->SaveFile($Supervisor,'avatar','avatar','SupervisorImage');
          $request->password == NULL ? :$Supervisor->password=\Hash::make($request->password);
          $request->active ==null ? $Supervisor->is_active=0 :$Supervisor->is_active=1;
          $Supervisor->created_at=Carbon::now();
          $Supervisor->save();
        \Notify::success('update success','update Supervisor ');

            return redirect()->back();
  }


  /**
  * show  form add  of  Supervisors
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function formAdd(){
      return view('pages.supervisor.add');
  }

  /**
  * save add  of  Supervisor
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function submitAdd(SupervisorRequest $request){

    $Supervisor=new Supervisor();
    $Supervisor->username=$request->username;
    $Supervisor->email=$request->email;
    $Supervisor->phone=$request->phone;
    $this->SaveFile($Supervisor,'avatar','avatar','SupervisorImage');
    $Supervisor->password =\Hash::make($request->password);
    $Supervisor->is_active=$request->active;
    $Supervisor->created_at=Carbon::now();
    $Supervisor->save();
  \Notify::success('add success','add Supervisor ');
      return redirect()->back();
  }




  /**
  * delete Supervisor By id
  * @pararm int $id Supervisor id
  * -*-*-*-*-*-*-*-*-*-*-*-*-*-*-*-*
  * @author ಠ_ಠ Abdelrahman Mohamed <abdomohamed00001@gmail.com>
  */
  public function delete(Request $request){
      foreach ($request->deleteSupervisors as $key => $value) {

        $Supervisor=Supervisor::where('id',$value)->delete();

      }
      \Notify::success('delete success','delete Supervisors ');
      return redirect()->back();
  }





}
