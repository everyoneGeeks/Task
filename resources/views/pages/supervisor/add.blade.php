

@extends('layouts.app',['title'=>'supervisor'])
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>' supervisor ','addbuttomlink'=>'/supervisor/add','addbuttomText'=>'Add Supervisor','addbuttomActive'=>0])

        <div class="row">
          <div class="col-md-6 ">

          <form role="form" action="{{route('supervisor.add.submit')}}" method="post" enctype="multipart/form-data" >
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> username </label>
                    <input type="text" class="form-control" id="InputNameAr"  name="username">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> email </label>
                    <input type="text" class="form-control" id="InputNameEn"  name="email">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> phone </label>
                    <input type="number" class="form-control" id="InputNameEn"  name="phone">
                  </div>


                  <div class="form-group">
                    <label for="InputNameEn"> avatar </label>
                    <input type="file" class="form-control" id="InputNameEn"  name="avatar">
                  </div>

                  <div class="form-group">
                    <label for="Inputpassword">password  </label>
                    <input type="text" class="form-control" id="Inputpassword"  name="password">
                  </div>

                  <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="admin" value=1   name="active">
                    <label class="form-check-label" for="exampleCheck1" style="
    margin-left: 20px;
"> Active </label>
                  </div>

                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
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

@section('javascript')
<script>
$('input[type="checkbox"][name="admin"]').change(function() {
     if(this.checked) {
      $("input[type=checkbox]").not('#admin').prop('checked', $(this).prop('checked')).attr("disabled", true);
     }else{
      $("input[type=checkbox]").not('#admin').prop('checked', false).attr("disabled", false);
     }
 });

</script>
@endsection
 @endsection
