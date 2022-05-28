<base href="<?php echo base_url(); ?>" />     
        <link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
        <link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
    
        <script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
    
        <script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
        <script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
        <script src="assets/plugins/toastr/toastr.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
        <script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
        <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
        <script src="assets/plugins/truncate/jquery.truncate.js"></script>
        <script src="assets/plugins/summernote/dist/summernote.min.js"></script>
        <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
     
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Data Anda</h2>
            <?php foreach ($data->result() as $row) {
              ?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="index.php/kategori/motif_jambi">
           <?php
                              if($row->kode_member == NULL){
                                ?>
                                <b class="btn btn-danger btn-rounded waves-effect waves-light">Non Member</b>
                                <?php
                              }else{
                                ?>
                                <b class="btn btn-success btn-rounded waves-effect waves-light">Member</b>

                                <?php
                              }
                           ?>         
                  </a></h4>
                </div>
              </div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a ><?php echo $row->nama ?></a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a ><?php echo $row->no_hp ?></a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a ><?php echo $row->email ?></a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a >Point : <?php echo $row->point ?></a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						
						
              <?php

            } ?>
						<br/>
					   <u style="color:red">
              Nb: Silahkan Menjadi member untuk mendapatkan point anda     
             </u>
					</div>
				</div>
				
<style type="text/css">
    .single:hover{
        background: #FE980F;

    }
    .b:hover{
        background: black
    }
    .harga:hover{
        color: white
    }

    .nama:hover{
        color: white
    }
</style>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						
						<div class="tab-content">
<div class="tab-pane active" id="biodata">
 <form method="post" name="form1" action="index.php/web/insert_konfirmasi"  enctype="multipart/form-data"  onSubmit="return validasi(this)"/>
    <table class="table table-bordered">
        <tr class="success"><th colspan="2">KONFIRMASI PEMBAYARAN KODE INVOICE : <b> <?php echo $invoice ?> </b></th></tr>
        
         
        <tr>
          <td>No Rekening</td>
          <td>
              <div class="col-md-9">
              <input type='text' name='no_rekening' placeholder='' class='form-control'  required >
              <input type='hidden' name='invoice' placeholder='' class='form-control'  value='<?php echo $invoice ?>' >
              <input type='hidden' name='email' placeholder='' class='form-control'  value='<?php echo $row->email ?>' >
              </div>
            </td>
        </tr>
        <tr>
          <td>Nama Bank</td>
          <td>
              <div class="col-md-9">
              <input type='text' name='nama_bank' placeholder='' class='form-control'  required >
              </div>
            </td>
        </tr>
        <tr>
          <td>Atas Nama</td>
          <td>
              <div class="col-md-9">
              <input type='text' name='atas_nama' placeholder='' class='form-control'  required >
              </div>
            </td>
        </tr>

      <tr>
          <td>Jumlah Transfer</td>
          <td>
              <div class="col-md-9">
              <input type='text' name='jumlah_transfer' placeholder='' class='form-control'  required>
              </div>
            </td>
        </tr>
          <tr>
          <td>Transfer Ke</td>
          <td>
              <div class="col-md-9">
              <input type='text' name='-' disabled="disabled" class='form-control' value="2820177536" >
              </div>
            </td>
        </tr>
         
         <tr>
          <td>Gambar</td>
          <td>
            <!--   <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-new thumbnail"><img src="assets/images/bg.jpg" width="300" alt=""/>
        </div>
        <div class="fileupload-preview fileupload-exists thumbnail"></div>
        <div>
        <div class="col-sm-4 control-label">
            <span class="btn btn-light-grey btn-file"><span class="fileupload-new">
            <i class="fa fa-picture-o "></i> Select image</span><span class="fileupload-exists">
            <i class="fa fa-picture-o"></i> Change</span> -->
                <input type="file"name='userfile' id="file" required >
        
           <!--  <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                <i class="fa fa-times"></i> Remove
            </a> -->
  </span>
            </td>
        </tr>

        <tr>
        <td>Alamat Lengkap Pengiriman</td>
          <td><textarea name="keterangan" id="news" style="margin-top: 0px; margin-bottom: 0px; height: 91px; margin-left: 0px; margin-right: 0px; width: 410px; " required="Harap Di isi"></textarea>
            <script type="text/javascript">
              var editor = CKEDITOR.replace('news');  
            </script>
          </td>
      </tr>

    </table>
    
</div>
<input type="submit" name="submit" value="KIRIM KONFIRMASI" class="btn btn-success">
<input type="reset" name="reset" value="BATAL KONFIRMASI" class="btn btn-danger">


           </form>
           <br/>
           <br/>
              </div>

                        </div>
                        </div>


					
						
			</div>
		</div>
	</section>
	