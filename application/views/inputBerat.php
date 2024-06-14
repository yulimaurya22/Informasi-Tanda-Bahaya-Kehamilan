<div id="wrapper">
    <div class="container-fluid">
	<section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
    
  	   <center>    <h3>Tambah Tanda Bahaya Kehamilan</h3> </center>

  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  name= "frmriwayat" action="<?= base_url('BahayaBerat/tambahaksi')?>" method="POST">
								

								    <div class="form-group" style = "position: relative; top: 30px;">
									<label for="disabledinput" class="col-sm-2 control-label">Judul</label>
					 				<input type="text" name="judul" class="col-sm-9 control-form" id="focusedinput" placeholder="" required>
									</div>
									

									<div class="form-group" style = "position: relative; top: 30px;">
									<label for="disabledinput" class="col-sm-2 control-label">Keterangan</label>
									<textarea type="text" name="keterangan" rows="5" class="col-sm-9 control-form" id="focusedinput" placeholder="" required></textarea>
									</div>	
                                    

									<center>
                               
								<button type="submit" class="btn btn-primary btn-style mt-4">Submit</button>
						<a href="<?= base_url('BahayaBerat')?>"> <button type="button" class="btn btn-secondary btn-style mt-4">Cancel</button>
						</center>

    </form>
  </div>
  </div>
  </div>
  </div>
  </div>
      </div>
    
