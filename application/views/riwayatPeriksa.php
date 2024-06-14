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
<h1 class="h3 mb-2 text-gray-800">History / Riwayat Periksa Bunda</h1>
<p class="mb-4">data bunda yang sudah periksa ke bidan akan dicantumkan di Riwayat Periksa <a target="_blank"></a></p>

<div style = "position: relative; left: 1000px;">
<div style = "position: relative; top: -70px;">
<a href=<?= base_url('RiwayatPeriksa/tambah') ?> ><input class="btn"   style="background-color:	#B0E0E6;"  type=button value="+ Tambah Data"></a>
</div> 
</div> 

<?php $no = 1;
                                    foreach($riwayatPeriksa as $RY) : ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h9 class="m-0 font-weight-bold text-primary"></h9>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                        
								    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Nama Bunda</label>
                                   	<label for="disabledinput" class="control-label">: <?=$RY->namabunda ?></label>
                                    
									</div>

									<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Usia Kehamilan</label>
									<label for="disabledinput" class="control-label">: <?=$RY->usiakehamilan ?></label>
									</div>
                                    
                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?=$RY->beratbadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tinggi Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?=$RY->tinggibadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tekanan darah</label>
									<label for="disabledinput" class="control-label">: <?=$RY-> tekanandarah?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Janin</label>
									<label for="disabledinput" class="control-label">: <?=$RY->beratjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Panjang Janin</label>
									<label for="disabledinput" class="control-label">: <?=$RY->panjangjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Detak Jantung Janin</label>
									<label for="disabledinput" class="control-label">: <?=$RY->detakjantungjanin?></label>
                                    </div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2.5 control-label">Obat Yang Dikonsumsi</label>
									<label for="disabledinput" class="control-label">: <?=$RY->obatyangdikonsumsi?></label>
									</div>

                                   
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $RY->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $RY->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('RiwayatPeriksa/editData') ?>" method="post">
                                                                                                           
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Nama Bunda</h5></label>                                   
                                        <div class="col-sm-8">            
                                        <input type="hidden" value="<?php echo $RY->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $RY->namabunda ?>" name= "namabunda" class="form-control1" id="focusedinput" placeholder="username">
                                        </div>
                                        </div>
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>UsiaKehamilan</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->usiakehamilan?>" name= "usiakehamilan" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->beratbadanbunda?>" name= "beratbadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tinggi Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->tinggibadanbunda?>" name= "tinggibadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tekanan Darah</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->tekanandarah?>" name= "tekanandarah" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->beratjanin?>" name= "beratjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Panjang Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->panjangjanin?>" name= "panjangjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Detak Jantung Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->detakjantungjanin?>" name= "detakjantungjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Obat Yang Dikonsumsi</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $RY->obatyangdikonsumsi?>" name= "obatyangdikonsumsi" class="form-control1" id="focusedinput">
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
                                 
                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $RY->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $RY->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Data</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('RiwayatPeriksa/deleteData')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $RY->id ?>" name="id">                         
                                                
                                              </div>
                                  
                                            <div class="modal-footer">

                                            
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn-success btn" style="background-color:	#8B0000;">Delete</button>
                                        
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
                    <?php endforeach ?>  
