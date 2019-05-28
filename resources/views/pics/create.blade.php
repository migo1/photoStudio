@extends('layouts.app')

@section('content')


<div class="container">
{!! Form::open(['action' => 'PicController@store', 'method'=>'post', 'enctype' => 'multipart/form-data']) !!}


<div class="form-group">
{{Form::file('picture')}}
{{Form::hidden('user_id')}}
</div>
{{ Form::submit('Submit',['class' => 'btn btn-outline-primary btn-sm'])}}
{!! Form::close()!!}
</div>
@endsection