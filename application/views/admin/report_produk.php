
<div class="row"> 
			<div class="col-lg-12"> 
				<h2>LAPORAN DATA SEMUA PRODUK </h2> 
			</div> 
			
			<div class="col-md-6"> 
				<div class="panel panel-default"> 
					<div class="panel-body tabs"> 
						<!-- <ul class="nav nav-tabs"> 
							<li class="active"><a href="#tab1" data-toggle="tab">SEMUA</a></li> 
							<li><a href="#tab2" data-toggle="tab">KATEGORI</a></li> 
							 
						</ul>  -->
		
						<!-- <div class="tab-content"> 
							<div class="tab-pane fade in active" id="tab1"> 
								<h4>SEMUA DATA</h4> 
								<form method="post" action="<?php echo base_url() ?>index.php/laporan/v_laporanpoint">

								
									 	<input type="submit" value="TAMPIL" class="btn btn-primary btn-small" >

									 	</form>
								</div> 
							
							<div class="tab-pane fade" id="tab2">  -->
								<h4> </h4>
								<form method="post" action="<?php echo base_url() ?>index.php/laporan/v_laporanproduk">

									<select name="kategori_produk" class="form-control">
								            <?php 
								                echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
								                foreach ($kategori_produk->result() as $g)
								                {
								                echo " <option value=$g->nama_kategori>$g->nama_kategori </option>";
								                }
								                ?>
								        </select>
									 	<input type="submit" value="TAMPIL" class="btn btn-primary btn-small" >


									 	</form>
							</div> 
						</div> 
					</div> 
				</div><!--/.panel--> 
			</div><!--/.col--> 