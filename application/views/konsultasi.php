<!-- main content start-->
<div id="page-wrapper">


<!-- Page Heading -->


<div class="card shadow mb-4 " >
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">Chat Konsultasi</h4>
                        </div>
                        <div class="card-body">
                        <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

                        <?php $no = 1;
                                    foreach($tambahAkun as $TA) : ?>
                                   <a href="<?= base_url('Konsultasi/Detail/'.$TA->id)?>"> <div class="form-group" >			
                                    <img src="" alt="">
                                    <label for="disabledinput"  style="color: #000000" class="m-0 font-weight-bold" ><?php echo $TA->username ?></label></p>
                                        <hr class="sidebar-divider">
                                    </div> </a>
                                    <?php endforeach ?>
                      
                        </div>
                        
                        </div>
                        </div>
                        </div>
                        </div>
