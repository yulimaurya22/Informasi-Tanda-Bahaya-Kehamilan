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
                        <a class="fas fa-arrow-left" href="<?= base_url('BahayaLainnya')?>"></a>
                        <font size="5"><span class="col-sm-8 font-weight-bold text-primary"><?php echo $detail->judul ?></span></font>
                          </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                        
								   
									<div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Penjelasan</label></h4>						
								<p>	<label for="disabledinput" class="control-label"><?php echo $detail->keterangan ?></label></p>
									</div> 

                                    <div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Gejala</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $detail->gejala ?></label>
                                    </div>

                                    <div class="form-group">		
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Penyebab</label></h4>						
									<p><label for="disabledinput" class="control-label"><?php echo $detail->penyebab ?></label></p>
									</div>

                                    <div class="form-group">			
                                    <h4>  <label for="disabledinput" class="m-0 font-weight-bold" >Cara Penanganan</label></h4>						
									<label for="disabledinput" class="control-label"><?php echo $detail->penanganan ?></label>
									</div>
                                    
                                                                
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $detail->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $detail->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000; "><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal"  name="username" action="<?= base_url('BahayaLainnya/editData') ?>" method="post">
                                                                                                           
                                        <div class="form-group">                                                  
                                        <input type="hidden" value="<?php echo $detail->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $detail->judul ?>" name= "judul" class="form-control" id="focusedinput" >
                                        </div>
                                       
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Keterangan</h5></label>
                                                                                                   
                                        <input type="text" value="<?php echo $detail->keterangan?>" name= "keterangan"  class="form-control" id="focusedinput">
                                        </div>
                                        

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Gejala</h5></label>
                                                                                                             
                                        <input type="text" value="<?php echo $detail->gejala?>" name= "gejala"  class="form-control" id="focusedinput">
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Penyebab</h5></label>
                                                                                                           
                                        <input type="text" value="<?php echo $detail->penyebab?>" name= "penyebab"  class="form-control" id="focusedinput">
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Cara Penanganan</h5></label>
                                                                                                             
                                        <input type="text" value="<?php echo $detail->penanganan?>" name= "penanganan"  class="form-control" id="focusedinput">
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
                    
