<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Products</li>
			</ol>
		</div>
	</div>
<!--content-->
<div class="products">
	<div class="container">
		<h2>Products</h2>
		<div class="col-md-9">
			<div class="content-top1">
			<?php foreach($data->result() as $row) : ?>
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="index.php/produk/detail/<?php echo $row->kode_produk ?>">
							<?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->img1),
										              'class' => 'photo',
										              'width' => '220',
										              'height' => '300',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
						</a>
						<h3><a href="index.php/produk/detail/<?php echo $row->kode_produk ?>"><?php echo $row->nama_produk ?></a></h3>
						<div class="price">
								<?php if($this->session->userdata('kode_member')) { ?>
								<h5 class="item_price"><?php echo $row->harga_member ?></h5>
								<?php }else{ ?>
								<h5 class="item_price"><?php echo $row->harga_nonmember ?></h5>

								<?php } ?>
								<a href="index.php/produk/detail/<?php echo $row->kode_produk ?>" class="item_add">Detail</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<?php endforeach; ?>
			
			<div class="clearfix"> </div>
			</div>	
		</div>

		<div class="col-md-3 product-bottom">
			
<!--seller-->
				
				<h3 class="cate">Terbaru</h3>
			<?php $populer = "SELECT * from tbl_produk where type='terbaru' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="product-bottom">
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="index.php/produk/detail/<?php echo $view->kode_produk ?>">
								<?php       
										            $image = array(
										              'src' => 'assets/images/'.($view->img1),
										              'class' => 'photo',
										              'width' => '190',
										              'height' => '230',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
							</a>	
								<?php echo $view->nama_produk ?>
							<span class="price-in1">	
								
							
								<?php if($this->session->userdata('kode_member')) { ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($view->harga_member,2) ?></h4>
								<?php }else{ ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($view->harga_nonmember,2) ?></h4>

								<?php } ?>
								</span>

						</div>
						<div class=" fashion-grid1">
							
						</div>	

						<div class="clearfix"> </div>
					</div>		
				</div>
				   	<?php
				   }
			 ?>

			 <h3 class="cate">Populer</h3>
			<?php $populer = "SELECT * from tbl_produk where type='populer' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="product-bottom">
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="index.php/produk/detail/<?php echo $view->kode_produk ?>">
								<?php       
										            $image = array(
										              'src' => 'assets/images/'.($view->img1),
										              'class' => 'photo',
										              'width' => '180',
										              'height' => '130',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
							</a>
								<?php echo $view->nama_produk ?>
								
								
							
								<?php if($this->session->userdata('kode_member')) { ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($view->harga_member,2) ?></h4>
								<?php }else{ ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($view->harga_nonmember,2) ?></h4>

								<?php } ?>
						</div>
						<div class=" fashion-grid1">
							
							</span>
						</div>	

						<div class="clearfix"> </div>
					</div>		
				</div>
				   	<?php
				   }
			 ?>

<!--//seller-->
<!--tag-->
								
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->