@extends('layouts.app')





@section('content')
<div class="container">

<div class="card card-shadow mb-4">
    <div class="card-header border-0">
        <div class="custom-title-wrap bar-primary">
            <div class="custom-title"> <span> <i class="fa fa-user-plus"></i> </span> book app</div>
        </div>
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('bookings.store')}}" enctype="multipart/form-data">
            @csrf
@can('booking-list')
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                    <label>CLIENT:</label>
                    <select name="client_id" class="form-control">
                            @foreach ($cls as $cl)
                        <option value="{{$cl->id}}">{{$cl->name}}</option>                                   
                            @endforeach
                    </select>
                    </div>
              </div>
              @endcan

              <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                    <label>CLIENT:</label>
                    <select name="photographer_id" class="form-control">
                            @foreach ($cls as $cl)
                        <option value="{{$cl->id}}">{{$cl->name}}</option>                                   
                            @endforeach
                    </select>
                    </div>
              </div>


            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <strong> Date : </strong>  
                      <input class=" form-control"  type="text"  name="date" id="tarehe">   
                   </div>
                  </div>
              
                  <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-4">
                            <strong> start-time : </strong>  
                            <input class=" form-control"  type="time"  name="start_time" >   
                         </div>
                        </div>
          
                        <div class="row">
                              <div class="col-md-4"></div>
                              <div class="form-group col-md-4">
                                <strong> end-time : </strong>  
                                <input class=" form-control"  type="time"  name="end_time" >   
                             </div>
                            </div>
          
                            <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="form-group col-md-4">
                                    <strong> total photos : </strong>  
                                    <input class=" form-control"  type="number"  name="photo" >   
                                 </div>
                                </div>
                                <div class="row">
                                      <div class="col-md-4"></div>
                                      <div class="form-group col-md-4">
                                      <label>CATEGORY:</label>
                                      <select name="type_id" class="form-control">
                                              @foreach ($tps as $tp)
                                          <option value="{{$tp->id}}">{{$tp->type}}</option>                                   
                                              @endforeach
                                      </select>
                                      </div>
                                </div>
                    
                                <div class="row">
                                      <div class="col-md-4"></div>
                                      <div class="form-group col-md-4">
                                              <label>BRIEF NOTE:</label>
                                              <textarea name="note" cols="30" rows="5"></textarea> 
                                     </div>
                                    </div>
                                    {{--<input type="hidden" name="client_id" value="{{$client->id}}">--}}
                                    <input type="hidden" name="status">
                                    <input type="hidden" name="created_by" >
                                    <button type="submit" class="btn btn-primary">submit</button>
                
              </div>
              
            
               {{--
                <div class="form-group">
                        <label><strong>NAME:</strong></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
                    </div>

            <div class="form-group">
                <label><strong>EMAIL ADDRESS:</strong></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><strong>MOBILE NUMBER:</strong></label>
                <input type="tel" class="form-control"  placeholder="+254712345678" name="mobile">
            </div>
            <div class="form-group">
                <label><strong>GENDER</strong></label>
            <div class="form-check form-group">
                <input type="radio" class="form-check-input" name="gender" value="male">
                <label class="form-check-label">MALE</label>
            </div>
            <div class="form-check form-group">
                    <input type="radio" class="form-check-input" name="gender" value="female">
                    <label class="form-check-label">FEMALE</label>
                </div>
            </div>

            <div class="form-group">
                    <label for="exampleInputPassword1"><strong>PROFILE PICTURE:</strong></label>
                    <input type="file" class="form-control" name="picture">
                </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-purple">Submit</button>
             <button type="submit" class="btn btn-outline-secondary">Cancel</button>
            </div>--}}
        </form>
    </div>
</div>

</div>
<script type="text/javascript">  
    $('#tarehe').datepicker({ 
        autoclose: true,   
        format: 'yyyy-mm-dd'  
     });
</script>

@endsection