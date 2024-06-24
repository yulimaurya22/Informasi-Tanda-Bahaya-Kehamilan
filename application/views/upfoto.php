 
                                        <div class="form-group">                     
                                         </div>
                                        

                                        <div id="wrapper">
    <div class="container-fluid">
	<section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
				<center>  <h3>Edit Foto Profil<span></span></h3>   </center> 
                </div>
                <div class="card-body">
				<?php echo form_open_multipart('profil/foto2');?>   <div class="form-group">
                <label for="disabledinput" class="col-sm-8 control-label"><h5>Upload foto</h5></label>                  
             <input type="file" name= "foto" class="form-control" id="focusedinput" >
                                      </div>
                     
                        
                        <button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
						<a href="<?= base_url('Profil')?>"> <button type="button" class="btn btn-secondary btn-style mt-4">Cancel</button>
						
                        <?php echo form_close();?>
                </div>
            </div>
            <!-- //forms 1 -->

  	  
                               
  
  </div>
      </div>
    
