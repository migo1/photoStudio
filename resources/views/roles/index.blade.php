@extends('layouts.app')


@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        @can('role-create')
            <a class="btn btn-success btn-sm" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
           
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">

<div class="card-header border-0">
        <div class="custom-title-wrap bar-primary">
            <div class="custom-title">ROLES <button class="btn btn-outline-primary btn-sm float-right" data-toggle="modal" data-target="#assign"><span><i class="fa fa-plus"></i></span> add role</button></div>
        </div>
    </div>

<div class="card-body- pt-3 pb-4">
        <div class="table-responsive">
<table class="table table-bordered table-striped" cellspacing="0">
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
{!! $roles->render() !!}
        </div>
</div>
</div>
        </div>
</div>


       <!-- assign new Modal -->
       <div class="modal fade" id="assign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content">
               {{-- <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>--}}
                <form action="{{route('roles.store')}}" method="POST">
                <div class="modal-body">
                  
                 @include('modals.role')
                 
                </div>
              
              </form>
                </div>
              </div>
            </div>
            <!--end of assign new Modal -->

</div>





@endsection