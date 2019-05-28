








<div class="container">
 
   
      
     
   
    
    
     
        
    
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
      
    </div>
    
    <script type="text/javascript">  
        $('#tarehe').datepicker({ 
            autoclose: true,   
            format: 'yyyy-mm-dd'  
         });
    </script>
    
    
    
