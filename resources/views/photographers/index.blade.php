@extends('layouts.app')

@section('content')



@foreach($photographer as $photograph)

<div class="col-xl-6">
        <div class="card card-shadow mb-4 ">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">
                       PHOTOGRAPHER
                    </div>
                </div>
            </div>
<div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                <ul class="list-unstyled mb-0 list-widget">

    <div class="text-center">
        <div class="mt-4 mb-3">
                @php
                $pic_url =  asset('assets/img/avatar/Noimage.jpg');
                if($photograph->pic){
                    $pic_url =  "/storage/cover_images/".$photograph->pic->picture;
                }

            @endphp
            <img class="rounded-circle" src="{{$pic_url}}" width="85" alt=""/>
        </div>
    <h5 class="text-uppercase mb-0">{{$photograph->name}}</h5>
        <p class="text-muted mb-0">{{$photograph->email}} </p>
        <p class="text-muted mb-0"> {{$photograph->mobile}} </p>
        <div class="rattings mb-4">
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
        </div>
        <div class="mb-2">
            {{--<a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
            <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>--}}
        </div>
    </div>

</ul>
</div>
</div>
</div>
        </div>
</div>
@endforeach

@endsection