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
<a href=<?= base_url('TambahAkun/tambah2') ?> ><input class="btn"   style="background-color:	#B0E0E6;"  type=button value="+ Tambah Data"></a>
</div> 
</div> 

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h9 class="m-0 font-weight-bold text-primary"></h9>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <div class="form-group" >
									
							
                        
								    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Nama Bunda</label>
                                   	<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->namabunda ?></label>
									</div>

									<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Usia Kehamilan</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->usiakehamilan ?></label>
									</div>
                                    
                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->beratbadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tinggi Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->tinggibadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tekanan darah</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa-> tekanandarah?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->beratjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Panjang Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->panjangjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Detak Jantung Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->detakjantungjanin?></label>
                                    </div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2.5 control-label">Obat Yang Dikonsumsi</label>
									<label for="disabledinput" class="control-label">: <?php echo $riwayatPeriksa->obatyangdikonsumsi?></label>
									</div>

                                   
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $riwayatPeriksa->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $riwayatPeriksa->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('TambahAkun/editData2') ?>" method="post">
                                                                        
                                        <div class="form-group">
                                                <label for="disabledinput" class="col-sm-8 control-label"><h5>Username</h5></label>                                   
                                                <div class="col-sm-8">            
                                                <input type="hidden" value="<?php echo $riwayatPeriksa->id ?>" name="id"></input>                
                                                  <input type="text" value="<?php echo $riwayatPeriksa->username ?>" name= "username" class="form-control1" id="focusedinput">
                                                </div>
                                                </div>
                                              
                                                                  
                                                <div class="form-group">
                                                <label for="disabledinput" class="col-sm-8 control-label"><h5>Password</h5></label>
                                                <div class="col-sm-8">                                    
                                                  <input type="password" value="<?php echo $riwayatPeriksa->password ?>" name= "password" class="form-control1" id="focusedinput">
                                                </div>
                                                </div>
                                                

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Nama Bunda</h5></label>                                   
                                        <div class="col-sm-8">                   
                                        <input type="text" value="<?php echo $riwayatPeriksa->namabunda ?>" name= "namabunda" class="form-control1" id="focusedinput" >
                                        </div>
                                        </div>
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>UsiaKehamilan</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->usiakehamilan?>" name= "usiakehamilan" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->beratbadanbunda?>" name= "beratbadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tinggi Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->tinggibadanbunda?>" name= "tinggibadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tekanan Darah</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->tekanandarah?>" name= "tekanandarah" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->beratjanin?>" name= "beratjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Panjang Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->panjangjanin?>" name= "panjangjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Detak Jantung Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->detakjantungjanin?>" name= "detakjantungjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Obat Yang Dikonsumsi</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $riwayatPeriksa->obatyangdikonsumsi?>" name= "obatyangdikonsumsi" class="form-control1" id="focusedinput">
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
                                 
                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $riwayatPeriksa->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $riwayatPeriksa->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Data</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('TambahAkun/deleteData')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $riwayatPeriksa->id ?>" name="id">                         
                                                
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
                    </div>
                   
                    <?php $no = 1;
                    foreach($rperiksa as $periksa) : ?>  
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h9 class="m-0 font-weight-bold text-primary"></h9>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
            
                        <div class="form-group" >
								    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Nama Bunda</label>
                                   	<label for="disabledinput" class="control-label">: <?php echo $periksa->namabunda ?></label>
									</div>

									<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Usia Kehamilan</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->usiakehamilan ?></label>
									</div>
                                    
                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->beratbadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tinggi Badan Bunda</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->tinggibadanbunda?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tekanan darah</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa-> tekanandarah?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Berat Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->beratjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Panjang Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->panjangjanin?></label>
									</div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Detak Jantung Janin</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->detakjantungjanin?></label>
                                    </div>

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2.5 control-label">Obat Yang Dikonsumsi</label>
									<label for="disabledinput" class="control-label">: <?php echo $periksa->obatyangdikonsumsi?></label>
									</div>

                                   
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $periksa->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $periksa->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('TambahAkun/editData3') ?>" method="post">
                                                                        
                                        
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Nama Bunda</h5></label>                                   
                                        <div class="col-sm-8">                   
                                        <input type="hidden" value="<?php echo $periksa->id ?>" name="id"></input>  
                                        <input type="text" value="<?php echo $periksa->namabunda ?>" name= "namabunda" class="form-control1" id="focusedinput" >
                                        </div>
                                        </div>
                                                                  
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>UsiaKehamilan</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->usiakehamilan?>" name= "usiakehamilan" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->beratbadanbunda?>" name= "beratbadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tinggi Badan Bunda</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->tinggibadanbunda?>" name= "tinggibadanbunda" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Tekanan Darah</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->tekanandarah?>" name= "tekanandarah" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Berat Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->beratjanin?>" name= "beratjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Panjang Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->panjangjanin?>" name= "panjangjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Detak Jantung Janin</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->detakjantungjanin?>" name= "detakjantungjanin" class="form-control1" id="focusedinput">
                                        </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Obat Yang Dikonsumsi</h5></label>
                                        <div class="col-sm-8">                                    
                                        <input type="text" value="<?php echo $periksa->obatyangdikonsumsi?>" name= "obatyangdikonsumsi" class="form-control1" id="focusedinput">
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
                                 
                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $periksa->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $periksa->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Data</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('TambahAkun/deleteData2')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $periksa->id ?>" name="id">                         
                                                
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
                                        </div></div>    
                                        </div> 
                                       
                          
                        </div>
                        <?php endforeach ?>  
                    
                   
                 