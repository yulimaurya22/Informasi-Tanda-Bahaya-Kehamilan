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
<h1 class="h3 mb-2 text-gray-800">Tanda Bahaya Kehamilan</h1>
<p class="mb-4">Halaman ini menampilkan tanda tanda Bahaya Kehamilan yang Ringan<a target="_blank"></a></p>

<div style = "position: relative; left: 1000px;">
<div style = "position: relative; top: -70px;">
<a href=<?= base_url('BahayaRingan/tambah') ?> ><input class="btn"   style="background-color:	#B0E0E6;"  type=button value="+ Tambah Data"></a>
</div> 
</div> 
<?php $no = 1;
foreach($bahayaRingan as $BR) : ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary"><?=$BR->judul ?></h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                        
								   
									<div class="form-group">									
									<label for="disabledinput" class="control-label"><?=$BR->keterangan ?></label>
									</div>
                                    
                                                                
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >         
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $BR->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $BR->id?>">
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
                                        <input type="hidden" value="<?php echo $BR->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $BR->judul ?>" name= "judul" class="form-control1" id="focusedinput" placeholder="username">
                                        </div>
                                       
                                                                  
                                        <div class="form-group">                                                                       
                                        <input type="text" value="<?php echo $BR->keterangan?>" name= "keterangan" class="form-control1" id="focusedinput">
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
                                        
                                        
                                 
                                        
                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $BR->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $BR->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Data</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('BahayaRingan/deleteData')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $BR->id ?>" name="id">                         
                                                
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
