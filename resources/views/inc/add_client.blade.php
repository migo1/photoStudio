
<div class="container">

 <div class="card-body">
    <form method="post" action="{{ route('clients.store')}}" enctype="multipart/form-data">
            @csrf
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
            
            
        </form>
    </div>
</div>