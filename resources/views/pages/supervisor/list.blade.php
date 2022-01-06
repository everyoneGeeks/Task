
@extends('layouts.app',['title'=>'supervisor'])

@section('content')

@component('components.panel',['subTitle'=>' supervisor '])
@if($Supervisors->isEmpty())

@component('components.empty',['section'=>'not found Supervisor ']) @endcomponent

@else

  <div class="col-md-12 mb-1">

          <a class="btn btn-info"  style="
        margin-bottom: 14px;
    " href="supervisor/add"><i class="ft-plus"></i>Add Supervisor</a>

    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-min-width mr-1 mb-1" id="Delete">
      <i class="fa fa-trash-o"></i> delete (0)</button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> delete  Supervisor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            </button>
          </div>
          <div class="modal-body">
  <span aria-hidden="true"> conform delete  Supervisor ?</span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="position: relative;right: 308px;">Close</button>
            <form class="control-form" id="deleteForm" action="/supervisor/delete" method="get"></form>
            <button type="submit" class="btn btn-primary" form="deleteForm">conform</button>
          </div>
        </div>
      </div>
    </div>
  </div>


                        <table class="table table-responsive table-striped table-bordered cat-configuration">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>avatar</th>

                                    <th>email</th>

                                    <th>active/deactive</th>
                                    <th>Edit</th>
                                    <th> delete </th>
                                </tr>
                            </thead>
                            <tbody>

                              @foreach($Supervisors as $Supervisor)
                                      <tr>
                             <th> <a href="/supervisor/info/{{$Supervisor->id}}">{{$Supervisor->username}}</a></th>
                              <th> <img src="{{$Supervisor->avatar}}" width="100px" height="100px"/></th>
                              <th> {{$Supervisor->email}}</th>
                              @if($Supervisor->is_active == 1)
                              <th> <span class="badge badge-success h1">active </span></th>
                              @else
                              <th><span class="badge badge-warning">deactive </span> </th>
                              @endif
                              <td><a href="/supervisor/edit/{{$Supervisor->id}}"class="btn btn-info" href="#"><i class="fa fa-cog fa-fw"></i> Edit</a></td>
                              <td>
                                <input type="checkbox" class="checkbox" id="{{$Supervisor->id}}" name="deleteSupervisors[]" form="deleteForm" value="{{$Supervisor->id}}"></td>


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
