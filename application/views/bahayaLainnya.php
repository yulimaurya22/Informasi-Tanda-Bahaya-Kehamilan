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
<p class="mb-4">Halaman Ini memuat informasi tentang hal yang dilarang saat hamil<a target="_blank"></a></p>

  
<div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
<?php echo form_open('BahayaLainnya/search')?>
<input type="text" name="keyword" class="form-control" placeholder="search">
<button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
<?php echo form_close()?>
</div>



<a href=<?= base_url('BahayaLainnya/tambah') ?> ><input class="btn"   style="background-color:	#B0E0E6;"  type=button value="+ Tambah Data"></a>



<?php $no = 1; 
foreach($bahayaLainnya as $BL) : ?>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary"><?=$BL->judul ?></h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							
                        
								   
									<div class="form-group">									
									<label for="disabledinput" class="control-label"><?=$BL->keterangan ?></label>
									</div>
                                    
                                                                
                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >    
                              <td><?php echo anchor('BahayaLainnya/detail/'.$BL->id, '<div class="btn btn-success">Detail</div>')?></td>

                                
                              
			                        <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $BL->id?>">Edit</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $BL->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Data</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('BahayaLainnya/editData') ?>" method="post">
                                                                                                           
                                        <div class="form-group">                     
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Judul</h5></label>                              
                                        <input type="hidden" value="<?php echo $BL->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $BL->judul ?>"  name= "judul" class="form-control" id="focusedinput" >
                                        </div>
                                       

                                        <div class="form-group">                                              
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Pengertian</h5></label> 
                                        <input type="text" value="<?php echo $BL->keterangan ?>"  name= "keterangan" class="form-control" id="focusedinput">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Gejala</h5></label>                                                                                                                
                                        <input type="text"  value="<?php echo $BL->gejala?>" cols="50" name= "gejala"  class="form-control" id="focusedinput">
                                        </div>
                                       

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Penyebab</h5></label>                                                                       
                                      <input type="text"  cols="50" value="<?php echo $BL->penyebab?>" name= "penyebab"  class="form-control" id="focusedinput">
                                        </div>

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Cara Penanganan</h5></label>                                                                      
                                        <input type="text" value="<?php echo $BL->penanganan?>" name= "penanganan"  class="form-control" id="focusedinput">
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
                                        
                                        
                                 
                                        
                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $BL->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $BL->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Data</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('BahayaLainnya/deleteData')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $BL->id ?>" name="id">                         
                                                
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
