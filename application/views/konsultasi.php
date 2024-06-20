<!-- main content start-->
<div id="page-wrapper">
<div class="container-fluid">

<!-- Page Heading -->


<div class="card shadow mb-4 " style="width: 330px; height: 550px;">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Chat Konsultasi</h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php $no = 1;
                                    foreach($tambahAkun as $TA) : ?>
                                    <div class="form-group">			
                                    <img src="" alt="">
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

                        <div class="card shadow mb-4 " style="width: 880px; height: 550px; position: relative; left: 370px; position: relative; top: -575px;">
                        <div class="card-header py-3">
                          <h4 class="m-0 font-weight-bold text-primary"></h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <div class="card-body" style="width: 850px; height: 400px; overflow-y: scroll;">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php $no = 1;
                                    foreach($konsultasi as $list) : ?>
                                    <div style="text-align: right;">
                                    <img src="" alt="">
                                    <label class="form-control" style="background-color:#1E90FF; color :#FFFFFF" ><p><?php echo $list->pesan ?></p></label>
                                    <span class="time-right">11:00</span>                         
                                    </div>
                                    <?php endforeach ?>

                                    </div>
                        </div>
                        </div>
                           
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  name= "chat" action="<?= base_url('Konsultasi/tambahaksi')?>" method="POST">
                                
                                  
                                        <div class="modal-footer" >  
                                        <input type="text" name="pesan" id="pesan" style= "width: 600px; height:40px; " class="control-form" >                                 
                                        <button type="submit" class=" btn btn-primary btn-block" style= "width: 100px;" onclick="store();">Send</button>
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
							
                        <script>
                        function store(){
                            var value = {
                                pesan: $('pesan').val()
                            }

                            $.ajax({
                                url: '<?=site_url();?>/Konsultasi/store',
                                type:'POST',
                                data: value,
                                datatype : 'JSON'
                            });
                        }
                        </script>
		