<?php 
			$total=0;

		  foreach($this->cart->contents() as $items): ?>
			<td >
			<?php $sql    = "SELECT * from tbl_produk where kode_produk='$items[id]'";
				  $result = $this->db->query($sql);
				  foreach ($result->result() as $v) {
				  	
				  }
			 ?>
			
			
				
		
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
				 <?php } ?>
			
		 <?php 

		               
		                 
		                  $total+=$hasil;
		                

		 ?>
	
		 <?php endforeach; ?>
		 		<?php echo $total; ?>
		 	