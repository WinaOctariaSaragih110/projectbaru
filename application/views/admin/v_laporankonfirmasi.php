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
									<?php foreach ($data->result() as $key => $value) {
										?>

										<td><?php echo $value->no_rekening ?></td>
										<td><?php echo $value->nama_bank ?></td>
										<td><?php echo $value->atas_nama ?></td>
										<td><?php echo $value->email ?></td>
										<td><?php echo $value->jumlah_transfer ?></td>
										<td><?php echo $value->tanggal ?></td>
										<td>
										<?php       
										            $image = array(
										              'src' => 'assets/images/'.($value->gambar),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
										</td>
										
									</tr>

										<?php
									} ?>
								</table>
						</table>
<input type="submit" value="print" onclick="proses()" class="btn btn-primary btn-small" >
<script type="text/javascript">
	function proses(){
		window.print();
	}
</script>
