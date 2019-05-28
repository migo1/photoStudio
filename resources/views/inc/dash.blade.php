
<div class="container">
     

        


    
    
     
        <input type="hidden" name="date" id="date">
              <input type="hidden" name="start_time" id="stime">
                  <input type="hidden" name="end_time" id="etime">
                  <input type="hidden" name="photo" id="tots">
                      <input type="hidden" name="type_id" id="type">
          
                      <input type="hidden" name="note" id="note">
                         
                          <div class="row">
                                
                                <div class="form-group col-md-6" id="uid">
                                <label>SELECT PHOTOGRAPHER:</label>
                                <select name="photographer_id" class="form-control" >
                                        @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>                                   
                                        @endforeach
                                </select>
                                </div>
                          </div>



                         
                        <input type="hidden" name="client_id"  id="cid" value={{--"{{$client_id}}" --}}>
                         <input type="hidden" name="created_by" id="cby" value={{--"{{$created_by}}{{----}}>
                        <input type="hidden" name="price" id="amm">
                          <input type="hidden" name="status" id="stat">
      
    </div>
   
    <script type="text/javascript">  
        $('#tarehe').datepicker({ 
            autoclose: true,   
            format: 'yyyy-mm-dd'  
         });
    </script>
    
    
    
