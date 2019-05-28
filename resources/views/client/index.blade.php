@extends('layouts.app')


    <!--data table-->
    @section('table_styles')
    <link href="{{ asset('assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet')}}">
@endsection

@section('content')
<div class="container">
        {{--
    <div class="col-md-6">
        <form action="{{ URL::to('/search')}}" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control "  name="q"
                    placeholder="Search clients"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-purple ">
                        <span ><li class="fa fa-search fa-lg"></li></span>
                    </button>
                </span>
            </div>
        </form>
    </div>
        
        
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
                            <td><a class="btn btn-info btn-sm btn-pill" href="/clients/{{$apps->id}}">view</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>{--}}

     
            <br>
<div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-warning">
            <div class="custom-title">CLIENTS{{--<button class="btn btn-purple btn-sm btn-pill float-right" data-toggle="modal" data-target="#add_client"><span><i class="fa fa-plus"></i></span> add new client</button>--}}</div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover" id="data_table">
                <thead>
                <tr>
                   <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Client's Page</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                <tr>
               <td scope="row">{{++$i}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->email}}</td>
                <td>{{$book->mobile}}</td>
                <td>{{$book->gender}}</td>
                <td><a class="btn btn-primary btn-sm btn-pill" href="/users/{{$book->id}}">view</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
           {{$books->links()}}
        </div>
    </div>
    
</div>

{{--
        <!-- assign new Modal -->
        <div class="modal fade" id="add_client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog " role="document">
              <div class="modal-content">
                {{--<div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('clients.store')}}" method="POST">
                <div class="modal-body">
                  @csrf
                 @include('inc.add_client')
                 <button type="submit" class="btn btn-outline-primary btn-sm"> <span><i class="fa fa-check"></i></span> ADD</button>
                </div>
                <div class="modal-footer">
                        
    
                             
                            
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
              </form>
                </div>
              </div>
            </div>
            <!--end of assign new Modal -->--}}
<!--datatables-->
@section('table_scripts')
    <script src="{{ asset('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
    <!--init datatable-->
    <script src="{{ asset('assets/vendor/js-init/init-datatable.js')}}"></script>
@endsection
    
@endsection