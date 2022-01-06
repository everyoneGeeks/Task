@extends('layouts.app',['title'=>'category'])

@section('content')

@component('components.panel',['subTitle'=>' category '])
@if($categories->isEmpty())

<div class="col-md-12 mb-1">
  <a class="btn btn-info"  style="
margin-bottom: 14px;
" href="category/add"><i class="ft-plus"></i>Add Category</a>

</div>

@else
<div class="col-md-12 mb-1">

        <a class="btn btn-info"  style="
      margin-bottom: 14px;
  " href="category/add"><i class="ft-plus"></i>Add Category</a>

  <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-min-width mr-1 mb-1" id="Delete">
    <i class="fa fa-trash-o"></i> delete (0)</button>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> delete  category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          </button>
        </div>
        <div class="modal-body">
<span aria-hidden="true"> conform delete  category ?</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="position: relative;right: 308px;">Close</button>
          <form class="control-form" id="deleteFormcategory" action="/category/delete" method="get"></form>
          <button type="submit" class="btn btn-primary" form="deleteFormcategory">conform</button>
        </div>
      </div>
    </div>
  </div>
</div>
<table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>name</th>
            <th>slug</th>
            <th>icon</th>
            <th>edit</th>
            <th> delete </th>

        </tr>
        </thead>
        <tbody>
@foreach($categories as $category)
        <tr>
<th> <a href="/category/info/{{$category->id}}">{{$category->name}}</a></th>
<th><a href="/category/info/{{$category->id}}"> {{$category->slug}}</a></th>
<th><i class="fa {{$category->icon}}">  </th>

<th><a href="/category/edit/{{$category->id}}" class="btn btn-block btn-info btn-flat"> edit </a></th>
<td>
  <input type="checkbox" class="checkbox" id="{{$category->id}}" name="deletecategory[]"
  form="deleteFormcategory" value="{{$category->id}}"></td>

        </tr>

        @endforeach
        </tbody>

        </table>

@endif

@slot('footer')
<div class="col-lg-4">

<a  href="/category/add" class="btn btn-block btn-success btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> اضافة متجر  </a>
</div>
@endslot

@endcomponent
 @endsection


  @section('javascript')

 <!-- page script -->
 <script>
 $(document).ready(function(){
 var buttonDelete=$('#Delete');
 var countCheckboxInput=0;

 $(".checkbox").change(function() {

     if(this.checked) {
       countCheckboxInput++;
       buttonDelete.html('<i class="fa fa-trash-o"></i> delete ('+countCheckboxInput+')')
     }
   else
     {
       countCheckboxInput--;
       buttonDelete.html('<i class="fa fa-trash-o"></i> delete ('+countCheckboxInput+')')
     }
 });
 });
 </script>

  @endsection
