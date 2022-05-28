<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;
		

	}
	th{
		background-color:black;
		color: white;
		border-bottom:3px solid #98BF21;

	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:white;
	}
	tr:nth-child(even){
		background-color:white; 
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

  						<table width="100%" >
						    <thead>
						    <tr>
						        <th width="20" >No</th>
								<th >Kode Produk</th>
								<th >Jenis</th>
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
							<td><?php echo $row->jenis ;?></td>
							<td><?php echo $row->jumlah_beli ;?></td>
							<td><?php echo $row->harga ;?></td>
							<td><?php echo $row->total ;?></td>
							
							
						</tr>
						<?php 
									$total+=$row->total;

						} ?>
						<tr>
							<td colspan="5">TOTAL KESELURUHAN</td>
							<td  align="left" style="color:red">
								<?php 
									echo $total
								?>
							</td>
						</tr>
						<tr>
							<td colspan="5">NO INVOICE</td>
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
								<br/>
								<br/>
								<table width="100%">
									<tr>
										<th>No Rekening</th>
										<th>Nama Bank</th>
										<th>Atas Nama</th>
										<th>Email</th>
										<th>Jumlah Transfer</th>
										<th>Tanggal Transfer</th>
										<th>Gambar</th>
									</tr>
									<tr>
									<?php foreach ($data_konfirmasi->result() as $key => $value) {
										?>

										<td><?php echo $value->no_rekening ?></td>
										<td><?php echo $value->nama_bank ?></td>
										<td><?php echo $value->atas_nama ?></td>
										<td><?php echo $value->email ?></td>
										<td><?php echo $value->jumlah_transfer ?></td>
										<td><?php echo $value->tanggal ?></td>
										<td>
											<img width="100" src="<?php echo base_url() ?>assets/images/<?php echo $value->gambar ?>">
										</td>
										
									</tr>

										<?php
									} ?>
								</table>
				<input type="submit" value="print" onclick="proses()" class="btn btn-primary btn-small" >
<script type="text/javascript">
	function proses(){
		window.print();
	}
</script>