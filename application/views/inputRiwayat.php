<div id="wrapper">
    <div class="container-fluid">
	<section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
    
  	   <center>    <h3>Input Riwayat Periksa Pasien</h3> </center>

  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  name= "frmriwayat" action="<?= base_url('RiwayatPeriksa/tambahaksi')?>" method="POST">

								    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Nama Bunda</label>
									<input type="text" name="namabunda" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>

									<div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Usia Kehamilan</label>
									<input type="text" name="usiakehamilan" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	
                                    
                                    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label"> Berat Badan Bunda</label>
									<input type="text" name="beratbadanbunda" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label"> Tinggi Badan Bunda</label>
									<input type="text" name="tinggibadanbunda" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Tekanan Darah</label>
									<input type="text" name="tekanandarah" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label"> Berat janin</label>
									<input type="text" name="beratjanin" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Panjang Janin</label>
									<input type="text" name="panjangjanin" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">Detak Jantung Janin</label>
									<input type="text" name="detakjantungjanin" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	

                                    <div class="form-group" >
									<label for="disabledinput" class="col-sm-2 control-label">Obat Yang Dikonsusi</label>
									<input type="text" name="obatyangdikonsumsi" class="col-sm-5 control-form" id="focusedinput" placeholder="" required>
									</div>	
                                
                               
		<div class="row" >
			<div class="col-sm-8 col-sm-offset-2" style = "position: relative; left: 20px;">
				<button type="submit" class="btn-success btn" style="background-color:	#8B0000;">Submit</button>
                <a href="<?= base_url('TambahAkun/detail')?>"> <input class="btn-default btn"  type=button value="Cancel"></a>
				
			</div>
		</div>
		

    </form>
  </div>
  </div>
  
  </div>
      </div>
      </div>
      </div>
