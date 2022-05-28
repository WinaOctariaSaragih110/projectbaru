<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout</li>
			</ol>
		</div>
	</div>
<!---->
<div class="container">
	<div class="check-out">
		<h2>Checkout</h2>
    	    <table  border="1">
		  <tr>
			<th>No.</th>
			<th>Barang</th>
			<th>Jumlah</th>		
			<th>Jenis</th>
			<th>Harga Satuan</th>
			<th>Berat</th>
			<th>Sub total</th>
			<th>Option</th>
		  </tr>
		  <!-- 
				'id'      => kode_produk,
				'qty'     => jumlah_beli,
				'price'   => jenis,
				'name'    => id_ukuran'
		   -->
		  <tr>
		  	  <form action="index.php/web/selesai" method="post"> 

		  <?php 
			$total=0;
			$item=1;
		  foreach($this->cart->contents() as $items): ?>
		  <td><?php echo $item++; ?></td>
			<td >
			<?php $sql    = "SELECT * from tbl_produk where kode_produk='$items[id]'";
				  $result = $this->db->query($sql);
				  foreach ($result->result() as $v) {
				  	
				  }
			 ?>
			 <input type="hidden" name="kode_produk[]" value="<?php echo $items['id']; ?>">
			 <input type="hidden" name="jumlah_beli[]" value="<?php echo $items['qty']; ?>">
			 <input type="hidden" name="jenis[]" value="<?php echo $items['price']; ?>">
			 <input type="hidden" name="ukuran[]" value="<?php echo $items['name']; ?>">
			 <input type="hidden" name="gambar[]" value="<?php echo $v->img1 ?>">
			<img width="100" src="assets/images/<?php echo $v->img1 ?>" >
				</td>
			<td><?php echo $items['qty'] ?> Item</td>
			<td>
				<?php 

				if($items['price'] == 1){
						echo "Satuan";
					}elseif(($items['price'] == 12)){
						echo "Lusin";
					}elseif(($items['price'] == 20)){
						echo "Kodi";
					}

					 ?>
			</td>
			<td>
				<?php if($this->session->userdata('kode_member')){ ?>
				<?php $mysql = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' limit 1";
					   $rs=$this->db->query($mysql);
					   foreach($rs->result() as $r){
					   	if($items['price'] == 1){
					   		$harga=$v->harga_member;
					   		echo 'Rp. '.number_format($harga,2);

					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$harga=$c->harga_member;
					   			echo 'Rp. '.number_format($harga,2);

					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$harga=$f->harga_member;
					   			echo 'Rp. '.number_format($harga,2);

					   		}
						}
					   }
				 ?>
				<input type="hidden" name="harga[]" value="<?php echo $harga ?>">

				 <?php }else{ ?>
				 	<?php $mysql = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' limit 1";
					   $rs=$this->db->query($mysql);
					   foreach($rs->result() as $r){
					   	if($items['price'] == 1){
					   		$harga=$v->harga_nonmember;
					   		echo 'Rp. '.number_format($harga,2);

					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$harga=$v->harga_nonmember;
					   		echo 'Rp. '.number_format($harga,2);
					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$harga=$v->harga_nonmember;
					   		echo 'Rp. '.number_format($harga,2);
					   		}
						}
					   }
				 ?>
				<input type="hidden" name="harga[]" value="<?php echo $harga ?>">

				 <?php } ?>
			</td>
			<td>
				<?php 

					$anu = "SELECT * from tbl_produk where kode_produk='$items[id]'";
					$bebo =$this->db->query($anu);
					foreach ($bebo->result() as $haha) {
						$erer= $haha->berat *  $items['qty'];
						//echo $erer;
					}


					if($items['price'] == 1){
						$anu = "SELECT * from tbl_produk where kode_produk='$items[id]'";
					$bebo =$this->db->query($anu);
					foreach ($bebo->result() as $haha) {
						
						$erer= $haha->berat *  $items['qty'] * 1;
						echo $erer;
					}
					}elseif(($items['price'] == 12)){
						$anu = "SELECT * from tbl_produk where kode_produk='$items[id]'";
					$bebo =$this->db->query($anu);
					foreach ($bebo->result() as $haha) {
						
						$erer= $haha->berat *  $items['qty'] * 12;
						echo $erer;
					}
					}elseif(($items['price'] == 20)){
						$anu = "SELECT * from tbl_produk where kode_produk='$items[id]'";
					$bebo =$this->db->query($anu);
					foreach ($bebo->result() as $haha) {
						
						$erer= $haha->berat *  $items['qty'] * 20;
						echo $erer;
					}
					}

					


				 ?>
			</td>

			<td>
				
				<?php if($this->session->userdata('kode_member')){ ?>
				<?php $mysql = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' limit 1";
					   $rs=$this->db->query($mysql);
					   foreach($rs->result() as $r){
					   	if($items['price'] == 1){
					   		$hasil=$items['qty'] * $v->harga_member;
					   			echo 'Rp. '.number_format($hasil,2);
					   		
					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$j=$c->harga_member * 12;
					   			$hasil = $j * $items['qty'];
					   			echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$j=$c->harga_member * 12;
					   			$hasil = $j * $items['qty'];
					   			echo 'Rp. '.number_format($hasil,2);
					   		}
						}
					   }
				 ?>
				<input type="hidden" name="total[]" value="<?php echo $hasil ?>">

				 <?php }else{ ?>
				 	<?php $mysql = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' limit 1";
					   $rs=$this->db->query($mysql);
					   foreach($rs->result() as $r){
					   	if($items['price'] == 1){
					   		 $hasil=$items['qty']* $v->harga_nonmember;
					   			echo 'Rp. '.number_format($hasil,2);
					   		 
					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$j=$c->harga_nonmember * 12;
					   			$hasil = $j * $items['qty'];
					   			echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$j=$c->harga_nonmember * 12;
					   			$hasil = $j * $items['qty'];
					   			echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}
					   }
				 ?>
				<input type="hidden" name="total[]" value="<?php echo $hasil ?>">

				 <?php } ?>
			</td><!-- 
			<td><?php $jumlah = $items['qty'] * $v->harga_member; echo $jumlah; ?></td> -->
			<td>
				<a href="<?php echo base_url(); ?>index.php/web/hapus_cart/<?php echo $items['rowid']; ?>">x</a>
			</td>
		  </tr>
		 <?php 

		               
		                 
		                  $total+=$hasil;
		                  $total_berat+=$erer;
		                

		 ?>
	
		 <?php endforeach; ?>
		 <tr>
		 	<td colspan="5"><b><h4>TOTAL</h4></b></td>
		 	<td>
		 		<?php 
					   			echo ceil($total_berat);

		 		 ?>
		 	</td>
		 	
		 	<td>
		 		<?php 
					   			echo 'Rp. '.number_format($total,2);

		 		 ?>
		 	</td>
		 	<td>
		 		<a href="index.php/web" class="btn btn-success">Belanja Lagi</a>
		 	</td>
		 </tr>
	</table>
	<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: '<?php echo base_url() ?>index.php/ci_admin/fetch_data_p',
     data: {
       get_val:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
       document.getElementById("new_selectb").innerHTML=response; 
       
     }
   });
}

</script>
	<div class="register"> 
	<?php if($this->session->userdata('kode_member')){ ?>
 <?php $kode_member  = $this->session->userdata('kode_member');
 	   $datasql      = "SELECT * from tbl_member where kode_member='$kode_member'";
 	   $rsql         = $this->db->query($datasql);
 	   foreach ($rsql->result() as $key) {
 	   	?>
				<div class="register-but"> 
				 <div class="col-md-6  register-top-grid"> 
					
					<div class="mation"> 
						<span>Provinsi</span> 

						 <select onchange="fetch_select(this.value);" class="form-control">
           <option>
              Pilih Kategori
           </option>
           
           <?php
             $host = 'localhost';
             $user = 'root';
             $pass = '';
           
             mysql_connect($host, $user, $pass);

             mysql_select_db('db_rainkids');
           
             $select=mysql_query("SELECT * from tbl_provinsi ");
             while($row=mysql_fetch_array($select))
             {
              ?><option value="<?php echo $row['id_provinsi'] ?>"><?php echo $row['provinsi'] ?></option>";

              <?php
             }
           ?>

         </select>
        
         
						<span>Kota</span> 
						
						<select id="new_select" name="id_kota" class="form-control">
                      </select>
 							
						<span>Nama</span> 
						<input type="text" name="nama" disabled="disabled" value="<?php echo $key->nama_member ?>"> 
						<input type="hidden" name="nama" value="<?php echo $key->nama_member ?>"> 
					
						<span>Email</span> 
						<input type="text" name="email" disabled="disabled" value="<?php echo $key->email_member ?>"> 
						<input type="hidden" name="email" value="<?php echo $key->email_member ?>"> 
 
 							
					 	<span>No Hp</span> 
						<input type="text" name="no_hp" disabled="disabled" value="<?php echo $key->no_hp ?>"> 
						<input type="hidden" name="no_hp" value="<?php echo $key->no_hp ?>"> 
					 
						 <span>Alamat</span> 
						<textarea style="margin-left: 0px; margin-right: 0px; width: 1132px; margin-top: 0px; margin-bottom: 0px; height: 105px; " name="alamat_member" required="Harap Di isi"><?php echo $key->alamat_member ?></textarea> 
						 <span>Keterangan Tambahan</span> 

						<textarea style="margin-left: 0px; margin-right: 0px; width: 1132px; margin-top: 0px; margin-bottom: 0px; height: 105px; " name="ket_tambah"></textarea> 
					</div> 
					 <div class="clearfix"> </div> 
					   
					 </div> 
				     <div class=" col-md-6 register-bottom-grid"> 
						    
								<t<div class="mation"> 
								<table border="1">
									<tr>
										<td>Sub Total </td>
										<td><?php echo 'Rp. ' .number_format($total,2); ?> </td>
									</tr>
									<tr>
										<td>Jumlah Item </td>
										<td><?php  $h=$item++; echo $h-1;  ?> Item </td>
									</tr>
									<tr>
										<td>Total Berat </td>
										<td><?php echo ceil($total_berat) ?></td>
										<input type="hidden" name="total_berat" value="<?php echo ceil($total_berat) ?>">
									</tr>
									<tr>
										<td>Area Kirim </td>
										<td>
											<select id="new_selectb" name="ongkir" class="form-control">

                     						 </select>
 							
										</td>
									</tr>
									<tr>
										<td style="color:green">Grand Total</td>
										<td style="color:green"><?php echo 'Rp. ' .number_format($total,2); ?></td>
									</tr>
								</table>
								<p style="color:red">
									Keterangan : Grand Total belum termasuk ongkos kirim
								</p>
							</div> 
							</div> 
					 </div> 
 	   	<?php
 	   }
 	    ?>
					<!-- form data -->
					<?php  $kode_member  = $this->session->userdata('kode_member'); ?>
	<input type="hidden" name="kode_member" value="<?php echo $kode_member ?>">
	<input type="hidden" name="invoice" value="<?php echo $kodeunik ?>">
	<input type="hidden" name="totalbelanja" value="<?php echo $total ?>">

					 <div class="clearfix"> </div> 

						
				
					   &nbsp;&nbsp;&nbsp;<input type="submit" value="Selesai Belanja" class="btn btn-success"> 
					   <div class="clearfix"> </div> 
				   </form> 


				   <?php }else{ ?>
<div class="register-but"> 
				 <div class="col-md-6  register-top-grid"> 
					
					<div class="mation"> 
						<span>Provinsi</span> 

						 <select onchange="fetch_select(this.value);" class="form-control">
           <option>
              Pilih Kategori
           </option>
           
           <?php
             $host = 'localhost';
             $user = 'rainkids_root';
             $pass = 'anon00';
           
             mysql_connect($host, $user, $pass);

             mysql_select_db('rainkids_data');
           
             $select=mysql_query("SELECT * from tbl_provinsi ");
             while($row=mysql_fetch_array($select))
             {
              ?><option value="<?php echo $row['id_provinsi'] ?>"><?php echo $row['provinsi'] ?></option>";

              <?php
             }
           ?>

         </select>
        
         
						<span>Kota</span> 
						
						<select id="new_select" name="id_kota" class="form-control">
                      </select>
					
						<span>Nama</span> 
						<input type="text" name="nama" value=""> 
					
						<span>Email</span> 
						<input type="text" name="email" value=""> 
 
					 	<span>No Hp</span> 
						<input type="text" name="no_hp" value=""> 
					 
						 <span>Alamat</span> 
						<textarea style="margin-left: 0px; margin-right: 0px; width: 1132px; margin-top: 0px; margin-bottom: 0px; height: 105px; " name="alamat_member" required="Harap Di isi"></textarea> 
					</div> 
					 <div class="clearfix"> </div> 
					   
					 </div> 
				     <div class=" col-md-6 register-bottom-grid"> 
						   
							<div class="mation"> 
								<table border="1">
									<tr>
										<td>Sub Total </td>
										<td><?php echo 'Rp. ' .number_format($total,2); ?> </td>
									</tr>
									<tr>
										<td>Jumlah Item </td>
										<td><?php  $h=$item++; echo $h-1;  ?> Item </td>
									</tr>
									<tr>
										<td>Total Berat </td>
										<td><?php echo ceil($total_berat) ?></td>
										<input type="hidden" name="total_berat" value="<?php echo ceil($total_berat) ?>">
									</tr>
									<tr>
										<td>Area Kirim </td>
										<td>
											<select id="new_selectb" name="ongkir" class="form-control">

                     						 </select>
 							
										</td>
									</tr>
									<tr>
										<td style="color:green">Grand Total</td>
										<td style="color:green"><?php echo 'Rp. ' .number_format($total,2); ?></td>
									</tr>
								</table>
								<p style="color:red">
									Keterangan : Grand Total belum termasuk ongkos kirim
								</p>
							</div> 
					 </div> 
					 <div class="clearfix"> </div> 

					<!-- form data -->
	<input type="hidden" name="kode_member" value="">
	<input type="hidden" name="invoice" value="<?php echo $kodeunik ?>">
	<input type="hidden" name="totalbelanja" value="<?php echo $total ?>">
	 <div class="col-md-6  register-top-grid"> 
					
					<div class="mation"> 
						 <span>Keterangan Tambahan</span> 

						<textarea style="margin-left: 0px; margin-right: 0px; width: 1132px; margin-top: 0px; margin-bottom: 0px; height: 105px; " name="ket_tambah"></textarea> 
					   <input type="submit" value="Selesai Belanja" class="btn btn-success"> 


				
 	   	<?php
 	   }
 	    ?>
					   <div class="clearfix"> </div> 

 	    <p style="color:red">Kepada Pelanggan yang terhormat, untuk jumlah yang harus di transfer, yaitu total nilai belanja + ongkos kirim akan di kirim invoicenya via email pelanggan, Terima Kasih</p>
				   </form> 
						</div>
						</div>
				</div> 
		   </div> 
	
    </div>
</div>