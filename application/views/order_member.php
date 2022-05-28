<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			</ol>
		</div>
	</div>
<!---->
<div class="container">
	<div class="check-out">
    	    <table  border="1">
		  <tr>
			<th>No.</th>
			<th>Invoice</th>
			<th>Point</th>		
			<th>Tanggal</th>
			<th>No Resi</th>
			<th>Total</th>
			<th>Opsi</th>
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
		  $kode_member=$this->session->userdata('kode_member');
			$no=1;
			$sql= "SELECT * FROM tbl_cart where kode_member='$kode_member' and no_resi !='' ";
			$data=$this->db->query($sql);
		  foreach($data->result() as $item): ?>
		  
		  <td><?php echo $no++; ?></td>
		  <td><?php echo $item->invoice ?></td>
		  <td><?php echo $item->point ?></td>
		  <td><?php echo $item->tanggal ?></td>
		  <td><?php echo $item->no_resi ?></td>
		  <td><?php echo 'Rp. '.number_format($item->total,2) ?></td>
		  <td><a href="index.php/web/detail_cart/<?php echo $item->invoice ?>" class="btn btn-success">Detail</a></td>
			
			
		  </tr>
		 <?php 

		               
		                 
		                  $total+=$item->total;
		                

		 ?>
	
		 <?php endforeach; ?>
		 </table>
		 <table>
		  <tr>
		 	<td ><b><h4>Point</h4></b></td>

		 	<td>
		 		<?php 

										$kode_member = $this->session->userdata('kode_member');
										$sql = "SELECT * from tbl_member where kode_member='$kode_member'";
										$rs= $this->db->query($sql);
										foreach ($rs->result() as $v) {
											?>
												: <?php echo $v->point; ?>
											<?php
										}


								 ?>
		 	</td>
		 </tr>
		 <tr>
		 	<td><b><h4>TOTAL</h4></b></td>
		 	
		 	<td>:
		 		<?php 
					   			echo 'Rp. '.number_format($total,2);

		 		 ?>
		 	</td>
		 	
		 </tr>
		
	</table>
	
					   <div class="clearfix"> </div> 
				   </form> 
				</div> 
		   </div> 
	
    </div>
</div>