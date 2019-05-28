@extends('layouts.app')

@section('content')

@section('calendar_scripts')

<script src="{{ asset('assets/vendor/fullcalendar-3.7.0/lib/moment.min.js')}}"></script>
 <script src="{{ asset('assets/vendor/fullcalendar-3.7.0/fullcalendar.js')}}"></script>   
 {{--<script src="{{ asset('assets/vendor/js-init/init-calendar-external-events.js')}}"></script>--}}
@endsection


@section('calendar_style')
<link href="{{ asset('assets/vendor/fullcalendar-3.7.0/fullcalendar.css')}}"  rel='stylesheet' />
@endsection


    <div class=" col-md-9">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-warning">
                        <div class="custom-title">CLIENTS CALENDAR</div>
                    </div>
                </div>
                <div class="card-body">
                   <div>
                        {!! $calendar->calendar() !!}
                        {!! $calendar->script() !!}
                   </div>
                </div>
            </div>
        </div>
    
    
@endsection