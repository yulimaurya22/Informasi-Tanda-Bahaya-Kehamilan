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
 
<h1 class="h3 mb-2 text-gray-800">Tentang Bidan</h1>
<p class="mb-4">Hari biasa buka kecuali hari minggu. libur praktek jika terdapat tanggal merah <a target="_blank"></a></p>
                       

<?php $no = 1;
foreach($profil as $pl): ?>

<div class="card shadow mb-4 " style="position: relative; top: 30px;">
                        <div class="card-header py-3">
                       <center> <img src="<?php echo base_url(); ?>asset/img/<?php echo $pl->foto;?>" width="200" >
                      
                            <h4 class="m-0 font-weight-bold text-primary"><?=$pl->nama ?></h4></center>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                    

                        <div class="form-group" >			
                                   <label for="disabledinput" class="input_label">Alamat</label>
                                    <label for="disabledinput" class="col-sm-9 control-label" style="position: relative; right: -75px;">: <?=$pl->alamat ?></label>
                                        <hr class="sidebar-divider">
                                    </div> 

                                    <div class="form-group" >			
                                   <label for="disabledinput" class="input_label">Jenis Kelamin</label>
                                    <label for="disabledinput"  class="col-sm-9 control-label" style="position: relative; right: -30px;" >: <?=$pl->jeniskelamin ?></label>
                                        <hr class="sidebar-divider">
                                    </div> 

                                    <div class="form-group" >			
                                   <label for="disabledinput" class="input_label">No. Telp</label>
                                    <label for="disabledinput" class="col-sm-9 control-label" style="position: relative; right: -65px;" >: <?=$pl->telp?></label>
                                        <hr class="sidebar-divider">
                                    </div> 
                                    
                                    </div>                        
                                      </div>     
                                      </div> 
                                      </div>     
                                   
                                      
                  
                   
                    <?php endforeach ?>


                    <?php $no = 1;
                    foreach($jadwalPeriksa as $JP) : ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Jam Buka Bidan</h4>
                           </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                       
								    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Senin        :</label>
                                   	<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->senin ?></label>
                                    
									</div>

									<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Selasa    :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->selasa ?></label>
									</div>
                                    
                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Rabu :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->rabu?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Kamis :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->kamis?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Jum'at  :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->jumat?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Sabtu      :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->sabtu?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Minggu  :</label>
									<label for="disabledinput" class="col-sm-5 control-label"><?=$JP->minggu?></label>
									</div>

                                                                  
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $JP->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $JP->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Jam Buka</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('JadwalPeriksa/editData') ?>" method="post">
                                                                                                           
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Senin</h5></label>                                   
                                        <div class="col-sm-8">            
                                        <input type="hidden" value="<?php echo $JP->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $JP->senin ?>" name= "senin" class="form-control1" id="focusedinput" placeholder="username">
                                        </div>
                                        </div>
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Selasa</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->selasa?>" name= "selasa" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Rabu</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->rabu?>" name= "rabu" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Kamis</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->kamis?>" name= "kamis" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Jum'at</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->jumat?>" name= "jumat" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Sabtu</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->sabtu?>" name= "sabtu" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Minggu</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $JP->minggu?>" name= "minggu" class="form-control1" id="focusedinput">
                                        </div>
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
                        </div>
                   

                    <?php endforeach ?>

                    