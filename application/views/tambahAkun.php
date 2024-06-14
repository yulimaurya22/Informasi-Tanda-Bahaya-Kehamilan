<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Akun</title>
    </head>

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Akun Baru</h1>
<p class="mb-4">Akun untuk ibu hamil yang belum memiliki akun <a target="_blank"></a></p>

<div style = "position: relative; left: 1000px;">
<div style = "position: relative; top: -70px;">
<a href=<?= base_url('TambahAkun/tambah') ?> > <input class="btn"   style="background-color:	#B0E0E6;"  type=button value="+ Tambah Akun"></a>
</div> 
</div> 

    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Akun Bumil</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th> 
                                        </tr>
                                    </tfoot>
                                    <?php $no = 1;
                                    foreach($tambahAkun as $TA) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$TA->username ?></td>
                                            <td><?=$TA->password ?></td>
                                            <th>                                
                <a class="btn btn-warning" data-toggle="modal"  style="background-color:	#FF8C00;" data-target="#modal-EditData<?php echo $TA->id?>">Edit</a>
                <div class="modal fade" id="modal-EditData<?php echo $TA->id?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Akun</h3>
                                      
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('TambahAkun/editData') ?>" method="post">
                                                                                                           
                                              <div class="form-group">
                                                <label for="disabledinput" class="col-sm-8 control-label"><h5>Username</h5></label>                                   
                                                <div class="col-sm-8">            
                                                <input type="hidden" value="<?php echo $TA->id ?>" name="id"></input>                
                                                  <input type="text" value="<?php echo $TA->username ?>" name= "username" class="form-control1" id="focusedinput" placeholder="username">
                                                </div>
                                                <div class="col-sm-2">
                                                </div>
                                                </div>
                                                                  
                                                <div class="form-group">
                                                <label for="disabledinput" class="col-sm-8 control-label"><h5>Password</h5></label>
                                                <div class="col-sm-8">                                    
                                                  <input type="password" value="<?php echo $TA->password ?>" name= "password" class="form-control1" id="focusedinput">
                                                </div>
                                                <div class="col-sm-2">
                                                </div>
                                              </div>

                                              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                              <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                            </div>
                                          
                                           
                                            <div class="panel-footer">

                                            </div>
                                            <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class=" btn"  style="background-color:	#B0E0E6;">Save</button>
                                              
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                      </div>

                <a class="btn btn-danger" data-toggle="modal" style="background-color:	#8B0000;" data-target="#modal-DeleteData<?php echo $TA->id ?>"> Delete </a>
                <div class="modal fade" id="modal-DeleteData<?php echo $TA->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                      <h3 class="col-sm-8 control-label"style="color:#000000;"> Hapus Akun</h3>
                       
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="<?= base_url('TambahAkun/deleteData')?>" method="post">
                                              <div class="form-group">
                                                <label style = "position: relative; left: 20px;"><H5><b>Anda Yakin Akan Menghapus Akun Ini...?</H5></label>
                                                <input type="hidden" value="<?php echo $TA->id ?>" name="id">                         
                                                
                                              </div>
                                  
                                            <div class="modal-footer">

                                            
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn-success btn" style="background-color:	#8B0000;">Delete</button>
                                        
                                            </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>

                                    </th>
                                        </tr>                                      
                                        </tbody>
                                        <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>