

@extends('layouts.app',['title'=>'product'])
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>' product '])

        <div class="row">
          <div class="col-md-6 ">

          <form role="form" action="{{route('product.add.submit')}}" method="post" enctype="multipart/form-data" >
          @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNameAr"> name </label>
                    <input type="text" class="form-control" id="InputNameAr"  name="name">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> slug </label>
                    <input type="text" class="form-control" id="InputNameEn"  name="slug">
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> category </label>
                    <select class="form-control js-example-basic-single" name="category">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>



                  <div class="form-group">
                    <label for="InputNameEn"> description </label>
                    <textarea class="form-control" id="InputNameEn"  name="description">

                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for="InputNameEn"> main image </label>
                    <input type="file" class="form-control" id="InputNameEn"  name="image" >
                  </div>



                  <div class="form-group">
                    <label for="InputNameEn"> prodctImages </label>
                  <input type="file" class="form-control" id="InputNameEn"  name="images[]" multiple>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();


});
</script>




@endsection
 @endsection
