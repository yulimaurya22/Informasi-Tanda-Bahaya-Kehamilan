
<div id="page-wrapper">

<div class="card shadow mb-4 ">
     <div class="card-header py-3">
                          <h4 class="m-0 font-weight-bold"  style="color: #000000"><?php echo $detail->username?></h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <div class="card-body" style=" overflow-y: scroll;">
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
                                        <input type="text" name="pesan" id="pesan" style= "width: 220px; height:40px; " class="control-form" >                                 
                                        <button type="submit" class=" btn btn-primary btn-block" style= "width: 65px;" onclick="store();">Send</button>
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
		