<form method="post" action="{{ route('bookings.store')}}" enctype="multipart/form-data">
    @csrf
      <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label>PHOTGRAPHER:</label>
            <select name="photographer_id" class="form-control">
       
                    @foreach ($photographers as $photographer)
            <option value="{{$photographer->id}}">{{$photographer->name}}</option>                                   
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
                        <input type="hidden" name="client_id" value="{{$client->id}}">
                            <input type="hidden" name="status">
                            <input type="hidden" name="created_by" >
                            <input type="hidden" name="price">
                          {{--  <button type="submit" class="btn btn-primary">submit</button>--}}
                          <button type="submit" class="btn btn-outline-primary btn-sm float-right"><span><i class="fa fa-check"></i></span> SUBMIT</button>
                          <button type="button" class="btn btn-outline-dark btn-sm float-right" data-dismiss="modal"><span><i class="fa fa-times"></i></span> Close</button>
        
                          <script type="text/javascript">  
                                $('#tarehe').datepicker({ 
                                    autoclose: true,   
                                    format: 'yyyy-mm-dd'  
                                 });
                            </script>
</form>