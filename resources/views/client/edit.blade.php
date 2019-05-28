@extends('layouts.app')

@section('content')


<form action="{{ route('bookings.update',$booking_id) }}" method="POST">
    @csrf
    @method('PUT')
<div class="card-body row">
   


<div class="col-4">
        <div>
                <label>start-time:</label>
                <input type="time"  value="{{$booking->start_time}}" name="start_time" class="form-control">
            </div>
            <div>
                    <label>end-time:</label>
                    <input type="time"  value="{{$booking->end_time}}" name="end_time" class="form-control">
                </div>
    <div>
    <label>DATE:</label>
    <input type="text"  value="{{$booking->date}}" name="date" class="form-control" id="tarehe">
</div>
<div>
        <label>TOTAL PHOTOS:</label>
<input type="number" name="photo" value="{{$booking->photo}}" class="form-control">
    </div>
   <div>
            <label>CATEGORY:</label>
            <select name="type_id" class="form-control">
                    @foreach ($tps as $tp)
                <option value="{{$tp->id}}">{{$tp->type}}</option>                                   
                    @endforeach
                </select>
        </div>
        <div>
            <label>BRIEF NOTE:</label>
            <textarea name="note" cols="30" rows="5"></textarea>
        </div>
        <div class="float-right">
        <button type="submit" class="btn btn-primary btn-sm" value="{{$booking->note}}">SUBMIT</button>
            </div>
</div>
{{--
<div class="col-4">
    <div>
    <label>user name:</label>
    <input type="text" name="date" value="{{$booking->user->name}}" class="form-control">
</div>--}}


<div>
    <label>CATEGORY:</label>
    <select name="user_id" class="form-control">
            @foreach ($user as $use)
    <option value="{{$use->id}}">{{$use->name}}</option>                                   
            @endforeach
        </select>
</div>

</div>
<input type="hidden" name="client_id" value="{{$booking->client_id}}">
<input type="hidden" name="ammount" value="{{$booking->ammount}}">
<input type="hidden" name="status">
</form>
<script type="text/javascript">  
    $('#tarehe').datepicker({ 
        autoclose: true,   
        format: 'yyyy-mm-dd'  
     });
</script>
@endsection