
@extends('layouts.app',['title'=>'product'])

@section('content')

@component('components.panel',['subTitle'=>' product ','addbuttomActive'=>0,'addbuttomlink'=>'/product/add','addbuttomText'=>'Add product '])
<div class="container-fluid">

  <div class="text-center">
  <img src="{{$product->image}}" width="200px" height="200px">
  </div>

        <div class="row">

          <div class="col-md-12 text-center">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                     <li class="list-group-item">
                    <span>{{$product->name}}</span> <b class="float-right">name    </b>
                  </li>

                  <li class="list-group-item">
                 <span>{{$product->description }}</span> <b class="float-right">description    </b>
               </li>

               <li class="list-group-item">
              <span><a href="/category/info/{{$product->categories->id}}"> {{$product->categories->name}}</a></span> <b class="float-right">cateory    </b>
            </li>

            <li class="list-group-item">
           <span>{{$product->slug}}</span> <b class="float-right">slug    </b>
         </li>

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
 @endsection
