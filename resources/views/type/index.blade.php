@extends('layouts.app')

@section('content')

<div class="container">


        <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-warning">
                        <div class="custom-title">SERVICES <button class="btn btn-purple btn-sm float-right" data-toggle="modal" data-target="#service"><span><i class="fa fa-plus"></i></span>  CREATE SERVICE</button> </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Category</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($types as $type)
                        <tr>
                        <th scope="row">{{++$i}}</th>
                        <td>{{$type->type}}</td>                      
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                   
                </div>
            </div>

            <div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog " role="document">
                      <div class="modal-content">
                       {{-- <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>--}}
                        <form method="post" action="{{ route('types.store')}}">
                        <div class="modal-body">
                          @csrf
                         @include('inc.service')
                      
                        
                        </div>
                        <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-primary btn-sm float-left"><span><i class="fa fa-check"></i></span> ADD</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                        </div>
                      </div>
                    </div>
</div>


@endsection