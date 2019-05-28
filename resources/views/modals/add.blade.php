{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control form-pill')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group{{ $errors->has('email') ? ' is-invalid' : '' }}">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control form-pill')) !!}
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
       
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{ $errors->has('mobile') ? ' is-invalid' : '' }}">
                <strong>Mobile:</strong>
                {!! Form::text('mobile', null, array('placeholder' => '+254712345678','class' => 'form-control form-pill')) !!}
            
                @if ($errors->has('mobile'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('mobile') }}</strong>
                </span>
            @endif
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
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control form-pill','multiple')) !!}
        </div>
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </div>
</div>
{!! Form::close() !!}