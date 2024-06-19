<!-- main content start-->
<div id="page-wrapper">
<div class="container-fluid">

<!-- Page Heading -->


<div class="card shadow mb-4 " style="width: 400px; height: 550px;">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">User</h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php $no = 1;
                                    foreach($tambahAkun as $TA) : ?>
                                    <div class="form-group">			
                                    	<label for="disabledinput" class="m-0 font-weight-bold" ><?php echo $TA->username ?></label></p>
                                        <hr class="sidebar-divider">
                                    </div> 
                                    <?php endforeach ?>
                      
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="card shadow mb-4 " style="width: 800px; height: 550px; position: relative; left: 440px; position: relative; top: -575px;">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Admin</h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <div class="card-body" style="width: 500px; height: 400px;">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php $no = 1;
                                    foreach($konsultasi as $list) : ?>
                                    <p><?php echo $list->pesan ?></p>                                     
                            
                                    <?php endforeach ?>
                                    </div>
                        </div>
                        </div>
                           
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  name= "chat" action="<?= base_url('Konsultasi/tambahaksi')?>" method="POST">
                                
                                  
                                        <div class="modal-footer" >  
                                        <input type="text" name="pesan" style= "width: 600px; height:40px; " class="control-form" >                                 
                                        <button type="submit" class=" btn btn-primary btn-block" style= "width: 100px;" >Send</button>
                                        </div>
                                        
                                        </div>
                                     </form>								
					 				
									</div>
                                        
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
							
                        
		