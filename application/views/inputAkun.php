 <div id="wrapper">
    <div class="container-fluid">
	<section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
				<center>  <h3>Input Data User<span></span></h3>   </center> 
                </div>
                <div class="card-body">
				<form class="form-horizontal"  name= "frmuser" action="<?= base_url('TambahAkun/tambahaksi')?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="input__label">Username</label>
                            <input type="text" class="form-control input-style" name="username" id="focusedinput"
                                aria-describedby="emailHelp" placeholder="Enter username">
                            <small id="emailHelp" class="form-text text-muted">masukkan username anda</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <input type="password" name="password" class="form-control input-style" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
						<a href="<?= base_url('TambahAkun')?>"> <button type="button" class="btn btn-secondary btn-style mt-4">Cancel</button>
						
                    </form>
                </div>
            </div>
            <!-- //forms 1 -->

  	  
                               
  
  </div>
      </div>
    
