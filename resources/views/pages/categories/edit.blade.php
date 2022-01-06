
@extends('layouts.app',['title'=>'category'])
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>' category '])

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 ">

          <form role="form" action="{{route('category.edit.submit',$category->id)}}" method="post" enctype="multipart/form-data" >
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name</label>
                    <input type="text" class="form-control" id="InputNameAr" value="{{$category->name}}"  name="name">
                  </div>
                  <div class="form-group">
                    <label for="InputNameEn"> slug </label>
                    <input type="text" class="form-control" id="InputNameEn"  name="slug" value="{{$category->slug}}">
                  </div>

                  <div class="form-group">


                    <label for="InputNameEn"> Icon Font Awesome    <i class="fa {{$category->icon}}"></i> </label>
                    <input type="text" class="form-control"
                     id="InputNameEn" value="{{$category->icon}}"
                    name="icon">

                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">send</button>
                </div>
              </form>
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
