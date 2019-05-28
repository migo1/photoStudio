
<div class="container">
     
        <div class="row" >
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" >
            <strong> Date : </strong>  
            <input class=" form-control"  type="text"  name="date" id="date" >   
         </div>
        </div>
    
        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <strong> start-time : </strong>  
                  <input class=" form-control"  type="time"  name="start_time" id="stime">   
               </div>
              </div>

              <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <strong> end-time : </strong>  
                      <input class=" form-control"  type="time"  name="end_time" id="etime">   
                   </div>
                  </div>

                  <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                          <strong> total photos : </strong>  
                          <input class=" form-control"  type="number"  name="photo" id="tots">   
                       </div>
                      </div>
                      <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4" id="type">
                            <label>CATEGORY:</label>
                            <select name="type_id" class="form-control" >
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
                                    <textarea name="note" cols="30" rows="5" id="note"></textarea> 
                           </div>
                          </div>
                          <input type="hidden" name="user_id" id="uid">
                          <input type="hidden" name="client_id"  id="cid">
                          <input type="hidden" name="ammount" id="amm">
                          <input type="hidden" name="status" id="stat">
      
    </div>
   
    <script type="text/javascript">  
        $('#tarehe').datepicker({ 
            autoclose: true,   
            format: 'yyyy-mm-dd'  
         });
    </script>
    
    
    
