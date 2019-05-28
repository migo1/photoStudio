@extends('layouts.app')

@section('content')

  <!--creative states-->
  <div class="creative-state-area">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h4 class="creative-state-title">Dashboard</h4>
            </div>
            <div class="col-lg-5  col-12 text-lg-right">
                <div class="row short-states mb-lg-0 mb-4">
                    <div class="col-6">
                        <span class="pr-2">unique visitors</span>
                        <span id="unique_visitors"></span>
                    </div>
                    <div class="col-6">
                        <span class="pr-2">total visitors</span>
                        <span id="total_visitors"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-danger text-center pull-left">
                    <i class="vl_clip-board"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">9808</h3>
                    <p class="mb-0">order received</p>
                    <div class=" widget-action-link ">
                        <small class="text-danger weight700">5% <i class="fa fa-long-arrow-down"></i></small>
                    </div>

                    <div class="">
                        <canvas id="state_order_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-warning text-center pull-left">
                    <i class="vl_cart-full"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">1231</h3>
                    <p class="mb-0">total sales</p>
                    <div class=" widget-action-link">
                        <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                    </div>
                    <div class="">
                        <canvas id="state_sale_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="creative-state-icon bg-purple text-center pull-left">
                    <i class="vl_dollar-on-hand"></i>
                </div>
                <div class="creative-state-info text-center pull-left">
                    <h3 class="mt-4">23214</h3>
                    <p class="mb-0">total profit</p>
                    <div class=" widget-action-link">
                        <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                    </div>
                    <div class="">
                        <canvas id="state_profit_chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/creative states-->

<div class="container">
    <div class="row">


            <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">
                                   TODAYS BOOKINGS
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
        
                                            @foreach($books as $book)
                                            <li>
                                                <div class="media mb-4">
                                                        @php
                                                        $pic_url =  asset('assets/img/avatar/Noimage.jpg');
                                                        if($book->photographer->pic){
                                                            $pic_url =  "/storage/cover_images/".$book->photographer->pic->picture;
                                                        }
                                        
                                                    @endphp
                                                    <img class="mr-3 rounded-circle" src="{{$pic_url}}" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                        <h5 class="text-uppercase mb-0">{{$book->photographer->name}}</h5>
                                                        Client's name:<span class="text-muted"> {{$book->client->name}}</span><br>
                                                         Phone Number<span class="text-muted"> {{$book->client->mobile}}</span><br>
                                                        Photo Type<span class="text-muted"> {{$book->type->type}}</span><br>
                                                        Start-time<span class="text-muted"> {{$book->start_time}}</span><br>
                                                        End-time<span class="text-muted"> {{$book->end_time}}</span>
                                                        </div>
                                                        <div class=" float-right">
                                                           Booked By <span class="text-muted"> {{$book->create->name}}</span><br>
                                                           @can('client-create')
                                                        <button class="btn btn-outline-info btn-sm"data-mydate="{{$book->date}}" data-mystime="{{$book->start_time}}" data-myetime="{{$book->end_time}}" data-mytots="{{$book->photo}}" data-mytype={{$book->type_id}} data-mynote="{{$book->note}}" {{--data-myamm={{$book->ammount}}--}} data-mycid="{{$book->client_id}}" data-myuser="{{$book->photographer_id}}" data-mystats="{{$book->status}}" data-mybid="{{$book->id}}" data-mycby="{{$book->created_by}}" data-toggle="modal" data-target="#dash">Change Photographer</button>
                                                       @endcan
                                                    </div>
                                                    </div>
            
                                                </div>
                                            </li>
                                            @endforeach
                                        {{$books->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        
  
{{--
        <div class="col-xl-6">
                <div class="card card-shadow mb-4 ">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">
                              BIRTHDAYS
                            </div>
                        </div>
                    </div>
                  
                    <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
        
                                        @foreach($birthdays as $birthday)
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                    <h5 class="text-uppercase mb-0">{{$birthday->name}}</h5>
                                                     Email:<span class="text-muted"> {{$birthday->email}}</span><br>
                                                     Phone Number<span class="text-muted"> {{$birthday->mobile}}</span><br>                               
                                                    </div>
                                                    <div class=" float-right">
                                                         {{--   <button class="btn btn-outline-info btn-sm btn-pill"data-mydate="{{$book->date}}" data-mystime="{{$book->start_time}}" data-myetime="{{$book->end_time}}" data-mytots="{{$book->photo}}" data-mytype={{$book->type_id}} data-mynote="{{$book->note}}" data-myamm={{$book->ammount}} data-mycid="{{$book->client_id}}" data-myuser="{{$book->user_id}}" data-mystats="{{$book->status}}" data-mybid="{{$book->id}}" data-toggle="modal" data-target="#dash">Change Photographer</button>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </li>
                                        @endforeach
                                        {{$birthdays->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>


                </div>
            </div>--}}


   <div class="col-xl-6 col-md-6">
                <div class="card card-shadow mb-4 ">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">
                              BIRTHDAY(S)
                            </div>
                        </div>
                    </div>
        
                    @foreach($birthdays as $birthday)
                        <div class="card-body">
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <div class="mt-4 mb-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                                </div>
                                <h5 class="text-uppercase mb-0">{{$birthday->name}}</h5>
                                <p class="text-muted mb-0">{{$birthday->email}} </p>
                                <p class="text-muted mb-0"> {{$birthday->mobile}} </p>
                                <div class="rattings mb-4">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-o text-warning"></i>
                                </div>
                                <div class="badge-icon mb-4">
                                    <img src="{{ asset('assets/img/badge/Christmas_Candle.svg')}}" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                    <img src="{{ asset('assets/img/badge/Christmas_Floral_Monogram_Frame.svg')}}" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                    <img src="{{ asset('assets/img/badge/Its_party_time_7048.svg')}}" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                    <img src="{{ asset('assets/img/badge/Pop_the_Champagne.svg')}}" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                    <img src="{{ asset('assets/img/badge/Christmas_Candle.svg')}}" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                                </div>
                                <div class="mb-2">
                                    {{--<a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
                                    <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>--}}
                                </div>
                            </div>

                        </div>
                        @endforeach
                        {{$birthdays->links()}}
                </div>
                </div>

{{---

            <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">
                                   PHTOGRAPHERS
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled mb-0 list-widget">
        
                                        @foreach($books as $book)
                                        <li>
                                            <div class="media mb-4">
                                                <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                <div class="media-body list-widget-border">
                                                    <div class="float-left">
                                                    <h5 class="text-uppercase mb-0">{{$book->name}}</h5>
                                                     Email:<span class="text-muted"> {{$book->email}}</span><br>
                                                     Phone Number<span class="text-muted"> {{$book->mobile}}</span><br>                               
                                                    </div>
                                                    <div class=" float-right">
                                                    </div>
                                                </div>
        
                                            </div>
                                        </li>
                                        @endforeach
                                        {{$books->links()}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}


    </div>
</div>



<div class="modal fade" id="dash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
           {{-- <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>--}}
            <form action="{{route('dashboards.update','test')}}" method="POST">
            <div class="modal-body">
                    {{method_field('patch')}}
              @csrf
             @include('inc.dash')
             <input type="hidden" name="booking_id" id="bid" value="">
            
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm float-left"><span><i class="fa fa-check"></i></span> CHANGE</button>
                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal"><span><i class="fa fa-times"></i></span> Close</button>
            </div>
          </form>
            </div>
          </div>
        </div>

        <script>
                $('#dash').on('show.bs.modal', function (event) {
        
        
                    var button = $(event.relatedTarget) 
                    var date = button.data('mydate')
                    var stime = button.data('mystime')
                    var etime = button.data('myetime')
                    var tots = button.data('mytots')
                    var type = button.data('mytype')
                    var note = button.data('mynote')
                    var ammount = button.data('myamm')
                    var cid = button.data('mycid')
                    var uid = button.data('myuser')
                    var status = button.data('mystats')
                    var bid = button.data('mybid')
                    var cby = button.data('mycby');
                    
                    
                    var modal = $(this)
                    modal.find('.modal-body #date').val(date)
                    modal.find('.modal-body #stime').val(stime)
                    modal.find('.modal-body #etime').val(etime)
                    modal.find('.modal-body #tots').val(tots)
                    modal.find('.modal-body #type').val(type)
                    modal.find('.modal-body #note').val(note)
                    modal.find('.modal-body #amm').val(ammount)
                    modal.find('.modal-body #cid').val(cid)
                    modal.find('.modal-body #uid').val(uid)
                    modal.find('.modal-body #stat').val(status)
                    modal.find('.modal-body #bid').val(bid)
                    modal.find('.modal-body #cby').val(cby)
                  })
                </script>

@endsection