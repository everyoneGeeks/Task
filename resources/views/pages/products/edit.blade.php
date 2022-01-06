

@extends('layouts.app',['title'=>'product'])
@section('content')
@component('components.error',['errors'=>$errors ?? NULL]) @endcomponent
@component('components.panel',['subTitle'=>' product '])
<div class="container-fluid">
<div class="row">
  <div class="col-md-6 ">

  <div class="text-center">
  <img src="{{$product->image}}" width="200px" height="200px">
  </div>

  <form role="form"
  action="{{route('product.edit.submit',$product->id)}}"
  method="post"
  enctype="multipart/form-data" >
  @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="InputNameAr"> name </label>
            <input type="text" class="form-control" id="InputNameAr"  value="{{$product->name}}" name="name">
          </div>


          <div class="form-group">
            <label for="InputNameAr"> slug </label>
            <input type="text" class="form-control" id="InputNameAr"  value="{{$product->slug}}" name="slug">
          </div>


          <div class="form-group">
            <label for="InputNameEn"> category </label>
            <select class="form-control js-example-basic-single" name="category">
              @foreach($categories as $category)
              @if($product->category ==$category->id )
              <option value="{{$category->id}}" selected>{{$category->name}}</option>
              @else
            <option value="{{$category->id}}" >{{$category->name}}</option>
            @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="InputNameEn"> description </label>
            <textarea  class="form-control"   name="description">
{{$product->description}}
            </textarea>
          </div>


          <div class="form-group">
            <label for="InputNameEn"> image </label>
            <input type="file" class="form-control" id="InputNameEn"    name="image">
          </div>

          <div class="form-group">
            <label for="InputNameEn"> product  image </label>
            <input type="file" class="form-control" id="InputNameEn"    name="images[]" multiple>
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



@endcomponent

@component('components.panel',['subTitle'=>'product Images'])
<div class="row ">
@foreach($product->productImages as $image)


<div class="col-xl-3 col-md-4 col-sm-12">
      <div class="card">
        <div class="card-content">
          <img class="card-img-top img-fluid" src="{{$image->image}}" alt="Card image cap" style="
    height: 240px;
">
          <div class="card-body">
          <a href="/product/image/delete/{{$image->id}}" class="btn btn-danger text-center" > delete</a>

          </div>
        </div>
      </div>
    </div>



@endforeach
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
