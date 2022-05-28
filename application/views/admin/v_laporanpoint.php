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
<table border="1" width="100%">
						    <thead>
						    <tr>
						        <th  data-align="center" data-sortable="true">No</th>
								<th  data-align="left" data-sortable="true">Kode Transaksi</th>
								<th  data-align="left" data-sortable="true">Kode Point</th>
								<th  data-align="left" data-sortable="true">Kode Member</th>
								<th  data-align="left" data-sortable="true">Gambar</th>
						    </tr>
						    </thead>
						    <tbody>
							<?php 
							$no=1;
							foreach ($data->result() as $row) {
							?>
							<tr>
							<td><?php echo $no++ ; ?></td>
							<td><?php echo $row->kode_transaksi ;?></td>
							<td><?php echo $row->kode_point ; ?></td>
							<td><?php echo $row->kode_member ;?></td>
							<td><?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->gambar),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			                                </td>
							
						</tr>
						<?php } ?>
						
						</tbody>
						</table>
<input type="submit" value="print" onclick="proses()" class="btn btn-primary btn-small" >
<script type="text/javascript">
	function proses(){
		window.print();
	}
</script>
