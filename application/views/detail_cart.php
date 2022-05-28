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
			<th>Kode Produk</th>
			<th>Jumlah Beli</th>		
			<th>Ukuran</th>
			<th>Jenis</th>
			<th>Harga</th>
			<th>Total</th>
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
			
		  foreach($data->result() as $item): ?>
		  <td><?php echo $no++; ?></td>
		  <td><?php echo $item->kode_produk ?></td>
		  <td><?php echo $item->jumlah_beli ?></td>
		  <td><?php echo $item->ukuran ?></td>
		  <td><?php echo $item->jenis?></td>
		  <td><?php echo $item->harga?></td>
		  <td><?php echo 'Rp. '.number_format($item->total,2) ?></td>
			
			
		  </tr>
		 <?php 

		               
		                 
		                  $total+=$item->total;
		                

		 ?>
	
		 <?php endforeach; ?>
		 <tr>
		 	<td colspan="6"><b><h4>TOTAL</h4></b></td>
		 	
		 	<td>
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