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
<table width="100%"  border="1" >
						    <thead>
						    <tr>
						        <th  >No</th>
								<th >Kode Produk</th>
								<th >Jenis</th>
								<th >Jumlah Beli</th>
								<th >Harga</th>
								<th >Sub Total</th>
								
						    </tr>
						    </thead>
						    <tbody>
							<?php 
							error_reporting(0);
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
<input type="submit" value="print" onclick="proses()" class="btn btn-primary btn-small" >
<script type="text/javascript">
	function proses(){
		window.print();
	}
</script>
