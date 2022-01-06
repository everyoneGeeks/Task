
@extends('layouts.app',['title'=>'products'])

@section('content')

@component('components.panel',['subTitle'=>' products '])
@if($products->isEmpty())

@component('components.empty',['section'=>'not found products ']) @endcomponent

  <div class="col-md-12 mb-1">

          <a class="btn btn-info"  style="
        margin-bottom: 14px;
    " href="product/add"><i class="ft-plus"></i>Add products</a>
</div>
@else

  <div class="col-md-12 mb-1">

          <a class="btn btn-info"  style="
        margin-bottom: 14px;
    " href="product/add"><i class="ft-plus"></i>Add products</a>
</div>

                        <table class="table table-responsive table-striped table-bordered cat-configuration">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>

                                    <th>Slug</th>

                                    <th>description</th>
                                    <th>image</th>
                                    <th> edit </th>
                                    <th> delete </th>
                                </tr>
                            </thead>
                            <tbody>

                              @foreach($products as $product)
                                      <tr>
                             <td>
                               <a href="/product/info/{{$product->id}}">{{$product->name}}</a>
                             </th>
                              <td> {{$product->categories->name}}</td>
                              <td> {{$product->slug}}</td>
                              <td> {{Str::limit($product->description,100,'(.....)')}}</td>
                              <td> <img src="{{$product->image}}" width="100px" height="100px"/></th>
                              <td><a href="/product/edit/{{$product->id}}"class="btn btn-info" href="#"><i class="fa fa-cog fa-fw"></i> Edit</a></td>
                              <td><a href="/product/delete/{{$product->id}}"class="btn btn-danger" href="#"><i class="fa fa-cog fa-fw"></i> delete</a></td>


                                      </tr>

                              @endforeach


                            </tbody>

                        </table>


@endif

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
