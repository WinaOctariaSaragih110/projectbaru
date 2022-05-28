<!-- Modal Popup untuk delete-->
<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		

	}
	th{
		background-color:black;
		color:white;
		border-bottom:3px solid black;

	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#e9ecf2; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>
<!-- Modal Popup untuk Tambah !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
						
  						<table width="100%" >
						    <thead>
						    <tr>
						        <th width="20" >No</th>
								<th >Kode Produk</th>
								<th >Jenis</th>
								<th >Size</th>
								<th >Jumlah Beli</th>
								<th >Harga</th>
								<th >Sub Total</th>
								
						    </tr>
						    </thead>
						    <tbody>
							<?php 
							$no=1;
							$total=0;
							foreach ($data->result() as $row) {
							?>
							<tr>
							<td><?php echo $no++ ; ?></td>
							<td><?php echo $row->kode_produk ; ?></td>
							<td>
								<?php 
										if($row->jenis == '1'){
											echo "Satuan";
										}elseif($row->jenis == '12'){
											echo "Lusin";
										}elseif($row->jenis == '20'){
											echo "Kodi";
										}

								 ?>
							</td>
							<td>
								<?php 

										$s="SELECT * from tbl_ukuran where id_ukuran='$row->ukuran'";
										$bs=$this->db->query($s);
										foreach ($bs->result() as $hjk) {
											echo $hjk->ukuran;
										}


								 ?>
							</td>
							<td><?php echo $row->jumlah_beli ;?></td>
							<td><?php echo 'Rp. '.number_format($row->harga,2);;?></td>
							<td><?php echo 'Rp. '.number_format($row->total,2);?></td>
							
							
						</tr>
						<?php 
									$total+=$row->total;

						} ?>
						<tr>
							<td colspan="6">Ongkir</td>
							<td  align="left" style="color:red">
								<?php 
									echo 'Rp. '.number_format($row->ongkir,2);
								?>
							</td>
						</tr>
						<tr>
							<td colspan="6">TOTAL KESELURUHAN</td>
							<td  align="left" style="color:red">
								<?php 
									echo 'Rp. '.number_format($total+$row->ongkir,2);
								?>
							</td>
						</tr>
						<tr>
							<td colspan="6">NO INVOICE</td>
							<td  align="left" style="color:red">
								<?php 
									echo $row->invoice;
								?>
							</td>
						</tr>
						</tbody>
						</table>
						<br/>
						<?php
			                        if($row->status == 0){
			                          ?>
			                          <b class="btn btn-danger btn-rounded waves-effect waves-light">BELUM DI KONFIRMASI</b>
			                          <?php
			                        }else{
			                          ?>
			                          <b class="btn btn-success btn-rounded waves-effect waves-light">TERKONFIRMASI</b>

			                          <?php
			                        }
			                     ?>
					
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
			                     <?php
			                        if($row->no_resi == NULL){
			                          ?>

			                          <?php
			                        }else{
			                          ?>
			                          <b class="btn btn-warning btn-rounded waves-effect waves-light">
			                          	<?php echo $row->no_resi ?>
			                          </b>

			                          <?php
			                        }
			                     ?>
								<br/>
								<br/>
								<table width="100%">
									<tr>
										<th>No Rekening</th>
										<th>Nama Bank</th>
										<th>Atas Nama</th>
										<th>Jumlah Transfer</th>
										<th>Tanggal Transfer</th>
										<th width="200px">Alamat </th>
										<th>Gambar</th>
										<th>Option</th>
									</tr>
									<tr>
									<?php 
									$data_konfirmasi_cs ="SELECT * from tbl_konfirmasi where invoice='$row->invoice' limit 1";
									$cs = $this->db->query($data_konfirmasi_cs);
									foreach ($cs->result() as $key => $value) {
										?>

										<td><?php echo $value->no_rekening ?></td>
										<td><?php echo $value->nama_bank ?></td>
										<td><?php echo $value->atas_nama ?></td>
										<td><?php echo 'Rp. '.number_format($value->jumlah_transfer,2) ?></td>
										<td><?php echo $value->tanggal ?></td>
										<td ><div style="width:200px; heght:200px">	<?php echo $value->keterangan ?></div></td>
										<td>
											<img width="100" src="<?php echo base_url() ?>assets/images/<?php echo $value->gambar ?>">
										</td>
										<td>
										<?php 
												if($value->status == 0){
										 ?>
										<form method="post" action="<?php echo base_url() ?>index.php/ci_admin/konfirmasi">
											
										<input type="hidden" name="email" value="<?php echo $value->email ?>">
										<input type="text" name="no_resi" value="">
										<input type="hidden" name="invoice" value="<?php echo $value->invoice ?>">
			      						 <input type="submit" value="Konfirmasi" class="btn btn-success btn-rounded waves-effect waves-light" >
			      						

			      						</form>
										<a href="<?php echo base_url() ?>index.php/ci_admin/tolak/<?php echo $value->id_konfirmasi ?>" class="btn btn-danger btn-rounded waves-effect waves-light" >
												Tolak
										</a> 
										<?php }else{
											?>
											<b class="btn btn-success">
												TERKONFIRMASI
											</b>
											<?php
											} ?>
										</td>
									</tr>

										<?php
									} ?>
								</table>
								<br/>
				&nbsp;Keterangan : <?php echo $row->ket_tambah ?>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>