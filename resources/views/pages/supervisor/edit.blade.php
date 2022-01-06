

@extends('layouts.app',['title'=>'supervisor'])
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>' supervisor ','addbuttomlink'=>'/supervisor/edit/{{$Supervisor->id}}','addbuttomText'=>'edit Supervisor','addbuttomActive'=>0])
<div class="row">
  <div class="col-md-6 ">

  <div class="text-center">
  <img src="{{$Supervisor->avatar}}" width="200px" height="200px">
  </div>
  <form role="form"
  action="{{route('supervisor.edit.submit',$Supervisor->id)}}"
  method="post"
  enctype="multipart/form-data" >
  @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="InputNameAr"> username </label>
            <input type="text" class="form-control" id="InputNameAr"  value="{{$Supervisor->username}}" name="username">
          </div>

          <div class="form-group">
            <label for="InputNameEn"> email </label>
            <input type="text" class="form-control" id="InputNameEn"  value="{{$Supervisor->email}}"  name="email">
          </div>

          <div class="form-group">
            <label for="InputNameEn"> phone </label>
            <input type="number" class="form-control" id="InputNameEn"   value="{{$Supervisor->phone}}" name="phone">
          </div>


          <div class="form-group">
            <label for="InputNameEn"> avatar </label>
            <input type="file" class="form-control" id="InputNameEn"    name="avatar">
          </div>

          <div class="form-group">
            <label for="Inputpassword">password  </label>
            <input type="text" class="form-control" id="Inputpassword"   name="password">
          </div>

          <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="active"   name="active" {{$Supervisor->is_active ==0  ?  :'checked'}}>
            <label  for="exampleCheck1" style="margin-left: 20px;" style="
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
$('input[type="checkbox"][name="active"]').change(function() {
if(this.checked) {
$("input[type=checkbox]").not('#active').prop('checked', $(this).prop('checked')).attr("disabled", true);
}else{
$("input[type=checkbox]").not('#active').prop('checked', false).attr("disabled", false);
}
});

</script>
 @endsection

@section('javascript')
<script>
$('input[type="checkbox"][name="Supervisor"]').change(function() {
     if(this.checked) {
      $("input[type=checkbox]").not('#Supervisor').prop('checked', $(this).prop('checked')).attr("disabled", true);
     }else{
      $("input[type=checkbox]").not('#Supervisor').prop('checked', false).attr("disabled", false);
     }
 });

</script>
@endsection
@endsection
