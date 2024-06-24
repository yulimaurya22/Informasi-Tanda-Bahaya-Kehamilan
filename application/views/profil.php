<!-- main content start-->
<div id="page-wrapper" >
<div class="container-fluid" >


<!-- Page Heading -->

<center><h3 class="m-0 font-weight-bold " style="color: #000000">My Profil</h3></center>
<?php $no = 1;
foreach($profil as $pl): ?>
<?php $no = 1;
foreach($login as $lg): ?>
<div class="card shadow mb-4 " style="position: relative; top: 30px;">
                        <div class="card-header py-3">
                       <center> <img src="<?php echo base_url(); ?>asset/img/<?php echo $pl->foto;?>" width="200" >
                      
                            <h4 class="m-0 font-weight-bold text-primary"><?=$pl->nama ?></h4></center>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                       
                                   <div class="form-group" >			
                                   <label for="disabledinput" class="input_label">Email</label>
                                   <label for="disabledinput"  class="col-sm-9 control-label" style="position: relative; right: -90px;" >: <?=$lg->username?></label>
                                        <hr class="sidebar-divider">
                                    </div> 
                                    
                                    <div class="form-group">
                            <label for="exampleInputPassword1" class="input__label">Password</label>
                            <label for="disabledinput"   class="col-sm-9 control-label" style="position: relative; right: -60px;" >: <?=$lg->password?></label>
                           <hr class="sidebar-divider">
                        </div>

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


                                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2" >      
                                                
			                        <a class="btn btn-primary" data-toggle="modal"  data-target="#modal-EditData<?php echo $pl->id?>">Edit Profil</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $pl->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Profil</h3>
                                    </div>
                                    <div class="modal-body">
                                               
                                       <?php echo form_open_multipart('Profil/editData'); ?>
                                    <div class="form-group">                     
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Nama</h5></label>                              
                                        <input type="hidden" value="<?php echo $pl->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $pl->nama ?>"  name= "nama" class="form-control" id="focusedinput" >
                                        </div>
                                        <div class="form-group">      
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>foto</h5></label>                              
                                        <input type="file" name= "foto" class="form-control" id="focusedinput" >
                                        <img src="<?php echo base_url(); ?>asset/img/<?php echo $pl->foto;?>" width="100"> 
                                        </div>
                                     

                                        <div class="form-group">                                              
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Alamat</h5></label> 
                                        <input type="text" value="<?php echo $pl->alamat ?>"  name= "alamat" class="form-control" id="focusedinput">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Jenis Kelamin</h5></label>  
                                        </div>                                                                                              
                                        <input type="radio"  value="laki-laki" name= "jeniskelamin"  id="laki-laki" >
                                        <label for="laki-laki">Laki-Laki</label>
                                        <input type="radio"  value="perempuan" name= "jeniskelamin" id="perempuan" style="position: relative; right: -20px;">
                                        <label for="perempuan" style="position: relative; right: -20px;">Perempuan</label>
                                        
                                       

                                        <div class="form-group">
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>No. Telp</h5></label>                                                                       
                                      <input type="text"  cols="50" value="<?php echo $pl->telp?>" name= "telp"  class="form-control" id="focusedinput"><br>
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

                                        <a class="btn btn-primary" data-toggle="modal"  data-target="#modal-EditData<?php echo $lg->id?>">Edit Email</a>
                                    <div class="modal fade" id="modal-EditData<?php echo $lg->id?>">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                      <h3 class="col-sm-8 control-label" style="color:#000000;"><b>Edit Email</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" name="username" action="<?= base_url('profil/edit_Data') ?>" method="post">
                                                                                                           
                                        <div class="form-group">                     
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>Email</h5></label>                              
                                        <input type="hidden" value="<?php echo $lg->id ?>" name="id"></input>                
                                        <input type="text" value="<?php echo $lg->username ?>"  name= "username" class="form-control" id="focusedinput" >
                                        </div>
                                       

                                        <div class="form-group">                                              
                                        <label for="disabledinput" class="col-sm-8 control-label"><h5>password</h5></label> 
                                        <input type="text" value="<?php echo $lg->password ?>"  name= "password" class="form-control" id="focusedinput">
                                        </div>
                                        
                                        
                                     

                                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                        <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                                                                      
                                           
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class=" btn"  style="background-color:	#B0E0E6;">Save</button>
                                              
                                        </div>
                                        <?php echo form_close();?>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        
                                    
                      
                        </div>
                        </div>
                        </div>
                        </div>
                        <?php endforeach ?>  
                        <?php endforeach ?>  
                        </div>
                        </div>
