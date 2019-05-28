@extends('layouts.app')


@section('content')

<br>
<div class="container">
    
<form action="{{ URL::to('/search')}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search clients"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span ><li class="fa fa-search"></li></span>
            </button>
        </span>
    </div>
</form>



<div class="container">
        @if(isset($details))
<p> The Search results for your query <b> {{ $query }} </b> are :   {{$details->count()}}</p>
        <h2>Client's Details</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile number</th>
                    <th>gender</th>
                    <th>view</th>
                </tr>
            </thead>
            <tbody>
                @foreach($details as $apps)
                <tr>
                    <td>{{$apps->name}}</td>
                    <td>{{$apps->mobile}}</td>
                    <td>{{$apps->gender}}</td>
                    <td><a class="btn btn-info btn-sm" href="/clients/{{$apps->id}}">view</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>



</div>
@endsection