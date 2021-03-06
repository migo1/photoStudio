@extends('layouts.app')

@section('content')
 <!--main content wrapper-->
 

        <!--profile banner-->
        <div class="profile-banner" style="background-image:{{ asset('assets/img/profile-banner.jpg')}}">

            <div class="row ">
                <div class="col-md-6 ml-auto text-lg-right">

                    <div class="text-right">
                        <div class="dropdown mb-5">
                            <a href="#" class="btn btn-transparent text-light dropdown-hover p-0" data-toggle="dropdown">
                                <i class=" vl_ellipsis-fill-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                <a class="dropdown-item" href="#"> Edit</a>
                                <a class="dropdown-item" href="#"> Delete</a>
                                <a class="dropdown-item" href="#"> Settings</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a  class="btn btn-sm btn-info btn-pill pl-5 pr-5">Edit</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/profile banner-->

        <!--profile nav-->
        <div class="profile-nav bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ml-auto">
                        <div class="profile-nav-links">
                            <ul class="nav f12">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">TIMELINE</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/profile nav-->

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-4 col-md-6 profile-info-position">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mt-4 mb-3">
                                    <img class="rounded-circle" src="{{ asset('assets/img/avatar/avatar-large3.jpg')}}" width="85" alt=""/>
                                </div>
                                <h5 class="text-uppercase mb-0"> {{$client->name}}</h5>
                                <p class="text-muted mb-0">{{$client->mobile}}</p>
                                <p class="text-muted mb-0">{{$client->email}}</p>
                                <p class="text-muted mb-0">{{$client->created_at->diffForHumans()}}</p>

                            </div>

                        </div>
                    </div>

                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">Client's Review</div>
                            </div>
                            
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row f12 mb-3">
                                <div class="col-6">Total Bookings</div>
                                <div class="col-6">
                                    <div class="row">

                                        <div class="col-6">{{$client->bookings->count()}}</div>
                                        <div class="col-6">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row f12 mb-3">
                                <div class="col-6">Total Ammount Paid</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-10">Ksh.{{$client->bookings->sum('ammount')}}</div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <p>category selected</p>

                            <div class="row f12 mb-3">
                                <div class="col-6">Family Photos</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">{{$client->bookings->where('type_id',1)->count()}}</div>
                                        <div class="col-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                         <div class="row f12 mb-3">
                                <div class="col-6">Modeling Photos</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">{{$client->bookings->where('type_id',2)->count()}}</div>
                                        <div class="col-6">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row f12 mb-3">
                                    <div class="col-6">Baby Photos</div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-6">{{$client->bookings->where('type_id',3)->count()}}</div>
                                            <div class="col-6">
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>


                </div>

                <div class="col-xl-8 col-md-6">


                        <div class="card card-shadow mb-4">
                                <div class="card-header border-0">
                                    <div class="custom-title-wrap bar-warning">
                                        <div class="custom-title">APPOINTMENT HISTORY <button class="btn btn-purple btn-sm float-right btn-pill" data-toggle="modal" data-target="#assign"><i class="fa fa-plus"></i> Add appointment</button></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Check-in</th>
                                            <th scope="col">Check-out</th>
                                            <th scope="col">No.</th>
                                            
                                            <th scope="col">Ammount</th>
                                            <th scope="col">modify</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                @can('role-create')
                                                @foreach($client->bookings as $booking)
                                        <tr>
                                            <td>{{$booking->date}}</td>
                                            <td>{{$booking->start_time}}</td>
                                            <td>{{$booking->end_time}}</td>
                                            <td>{{$booking->photo}}</td>
                                            
                                            <td>{{$booking->ammount = number_format($booking->ammount, 2, '.', ',')}}</td>
                                        <td> {{-- <a class="btn btn-primary btn-sm" href="{{ route('bookings.edit',$booking->id) }}">Edit</a>--}}
                                        <button class="btn btn-info btn-sm btn-pill"data-mydate="{{$booking->date}}" data-mystime="{{$booking->start_time}}" data-myetime="{{$booking->end_time}}" data-mytots="{{$booking->photo}}" data-mytype={{$booking->type_id}} data-mynote="{{$booking->note}}" data-myamm={{$booking->ammount}} data-mycid="{{$booking->client_id}}" data-myuser="{{$booking->user_id}}" data-mystats="{{$booking->status}}" data-mybid="{{$booking->id}}" data-toggle="modal" data-target="#app">edit</button>
                                        </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        @endcan
                                    </table>
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
            <form action="{{route('bookings.store')}}" method="POST">
            <div class="modal-body">
              @csrf
             @include('inc.index')
             
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm"><span><i class="fa fa-check"></i></span> SUBMIT</button>
              <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal"><span><i class="fa fa-times"></i></span> Close</button>
            </div>
          </form>
            </div>
          </div>
        </div>
        <!--end of assign new Modal -->

                <!-- edit appointments new Modal -->
<div class="modal fade" id="app" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
          <div class="modal-content">
           {{-- <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">edit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>--}}
            <form action="{{route('bookings.update','test')}}" method="POST">
            <div class="modal-body">
                    {{method_field('patch')}}
              @csrf
             @include('inc.app')
             <input type="hidden" name="booking_id" id="bid" value="">
            
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm"><span><i class="fa fa-check"></i></span> SUBMIT</button>
                    <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal"><span><i class="fa fa-times"></i></span> Close</button>
            </div>
          </form>
            </div>
          </div>
        </div>
        <!--end edit appointmentsnew Modal -->

      




<script>
        $('#app').on('show.bs.modal', function (event) {


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
          })
        </script>
@endsection