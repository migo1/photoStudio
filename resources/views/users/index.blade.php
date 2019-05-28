@extends('layouts.app')


@section('content')

<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          
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
            <div class="custom-title">USERS<button class="btn btn-outline-primary btn-sm pull-right" {{--href="{{ route('users.create') }}"--}} data-toggle="modal" data-target="#add"><span><i class="fa fa-plus"></i></span> add new User</button></div>
        </div>
    </div>

<div class="card-body- pt-3 pb-4">
        <div class="table-responsive">
<table class="table table-bordered table-striped" cellspacing="0">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-dark">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
{!! $data->render() !!}
        </div>
</div>
            </div>
        </div>
</div>


       <!-- assign new Modal -->
       <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content">
               {{-- <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>--}}
                <form action="{{route('users.store')}}" method="POST">
                <div class="modal-body">
                  
                 @include('modals.add')
                 
                </div>
              
              </form>
                </div>
              </div>
            </div>
            <!--end of assign new Modal -->

</div>

        
     
        <script type="text/javascript">  
            $('#tarehe').datepicker({ 
                autoclose: true,   
                format: 'yyyy-mm-dd'  
             });
        </script>
@endsection