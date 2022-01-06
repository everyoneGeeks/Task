
@extends('layouts.app',['title'=>'supervisor'])

@section('content')

@component('components.panel',['subTitle'=>' supervisor ','addbuttomActive'=>0,'addbuttomlink'=>'/supervisor/add','addbuttomText'=>'Add Supervisor '])
<div class="container-fluid">

  <div class="text-center">
  <img src="{{$Supervisor->avatar}}" width="200px" height="200px">
  </div>
  
        <div class="row">

          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$Supervisor->username}}</span> <b class="float-right">name    </b>
                  </li>

                  <li class="list-group-item">
                 <span>{{$Supervisor->phone}}</span> <b class="float-right">phone    </b>
               </li>

               <li class="list-group-item">
              <span>{{$Supervisor->email}}</span> <b class="float-right">email    </b>
            </li>
                @if($Supervisor->is_active == 1)

                <li class="list-group-item">
                <span class="badge badge-success h3">active</span><b class="float-right"> active/deactive </b>
                </li>

                @else

                <li class="list-group-item">
                <span class="badge badge-danger h1">deactive</span> <b class="float-right">  active/deactive </b>
                </li>

                @endif


                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      @endcomponent

 @endsection
