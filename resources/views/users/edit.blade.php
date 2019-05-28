@extends('layouts.app')


@section('content')

<div class="container">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="row">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">

<div class="card-header border-0">
        <div class="custom-title-wrap bar-primary">
            <div class="custom-title">EDIT USER DETAILS</div>
        </div>
    </div>


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id],'enctype' => 'multipart/data']) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-pill')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-pill')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                {!! Form::text('mobile', null, array('placeholder' => '+254712345678','class' => 'form-control form-pill')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                   Female: {!! Form::radio('gender', 'female', true)!!}
                   Male: {!! Form::radio('gender', 'male', false)!!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>date of birth</strong>
                        {!! Form::text('dob',null, array('id' => 'tarehe', 'placeholder' => 'date 0f birth','class' => 'form-control form-pill')) !!}
                    </div>
                </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control form-pill')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control form-pill')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control form-pill','multiple')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>
</div>
{!! Form::close() !!}


</div>
</div>
</div>


</div>

@endsection