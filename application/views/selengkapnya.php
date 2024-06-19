<script scr="<?= base_url('asset/ckeditor/ckeditor.js')?>"></script>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    </head>

    <body id="page-top">
        
    

    <!-- Page Wrapper -->
    <div id="wrapper">
    <div class="container-fluid">

<!-- Page Heading -->


    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary"><?php echo $selengkapnya->judul ?></h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                        
								   
									<div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Penjelasan</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $selengkapnya->keterangan ?></label>
									</div>

                                    <div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Gejala</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $selengkapnya->gejala ?></label>
</div>

                                    <div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Penyebab</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $selengkapnya->penyebab ?></label>
									</div>
 
                                    <div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Cara Penanganan</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $selengkapnya->penanganan ?></label>
									</div>
                                    

                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $selengkapnya->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $selengkapnya->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('BahayaRingan/editData') ?>" method="post">
                                                                                                           
                                        <div class="form-group">                                                  
                                        <input type="hidden" value="<?php echo $selengkapnya->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $selengkapnya->judul ?>" name= "judul" class="form-control" id="focusedinput" >
                                        </div>
                                       
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Keterangan</h5></label>                                                                      
                                        <input type="text" value="<?php echo $selengkapnya->keterangan?>" name= "keterangan"  class="form-control" id="focusedinput">
                                        </div>

                                        <div class="col-mb-3">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Gejala</h5></label>                                                                                                                
                                        <textarea type="text" value="<?php echo $selengkapnya->gejala?>" name= "gejala"  class="form-control" id="focusedinput"></textarea>
                                        </div>
                                       

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Penyebab</h5></label>                                                                       
                                        <input type="text" value="<?php echo $selengkapnya->penyebab?>" name= "penyebab"  class="form-control" id="focusedinput">
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Cara Penanganan</h5></label>                                                                      
                                        <input type="text" value="<?php echo $selengkapnya->penanganan?>" name= "penanganan"  class="form-control" id="focusedinput">
                                        </div>
                                        


                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                                                                      
                                           
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class=" btn"  style="background-color:	#B0E0E6;">Save</button>
                                              
                                        </div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
                                        
              
                                      
                                      </div>     
                                      </div>     
                                      </div>     
                                      
                            </div>
                        </div>
                    </div>
                    
                    <script>
		CKEDITOR>replace('gejala');
		</script>