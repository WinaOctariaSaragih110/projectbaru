<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single</li>
			</ol>
		</div>
	</div>
<div class="single">

<div class="container">
<div class="col-md-9">
	<div class="col-md-5 grid">		
		<div class="flexslider">
		<?php foreach($data->result() as $row) : ?>
			  <ul class="slides">
			    <li data-thumb="assets/images/<?php echo $row->img1 ?>">
			        <div class="thumb-image"> <img src="assets/images/<?php echo $row->img1 ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="assets/images/<?php echo $row->img2 ?>">
			         <div class="thumb-image"> <img src="assets/images/<?php echo $row->img2 ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="assets/images/<?php echo $row->img3 ?>">
			       <div class="thumb-image"> <img src="assets/images/<?php echo $row->img3 ?>" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
			  </ul>
			<?php endforeach; ?>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2><?php echo $row->nama_produk ?></h2>
							<p><?php echo $row->keterangan ?></p>
							<div class="star-on">
								
								

							<div class="clearfix"> </div>
							</div>
							
								

								Point : <label  class="add-to item_price"><?php echo $row->point; ?></label>

								<?php 

										$kode_member = $this->session->userdata('kode_member');
										$sql = "SELECT * from tbl_member where kode_member='$kode_member'";
										$rs= $this->db->query($sql);
										foreach ($rs->result() as $v) {
											?>
												Jumlah Point Anda : <?php echo $v->point; ?>
											<?php
										}


								 ?>
								

							<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="index.php/produk/cart_point" method="post">
					
					<input type="hidden" name="kode_point" value="<?php echo $row->kode_point ?>"> 
					<input type="hidden" name="kode_member" value="<?php echo $this->session->userdata('kode_member') ?>"> 
					<input type="hidden" name="kode_transaksi" value="<?php echo $kodeunik ?>"> 
					<input type="hidden" name="point_produk" value="<?php echo $row->point ?>"> 
					<input type="hidden" name="point_member" value="<?php echo $v->point ?>"> 
					<input type="hidden" name="gambar" value="<?php echo $row->img1 ?>"> 

					<button name="buy" type="submit" >
                     	<b class="cart item_add">Tukar Point</b>
                     </button>
			    </form>
			   </div>	
			   </div>	
			   </div>
						
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
						
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->

				<h3 class="cate">Terbaru</h3>
			<?php $populer = "SELECT * from tbl_produk where type='terbaru' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="product-bottom">
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="index.php/produk/detail/<?php echo $view->kode_produk ?>"><img class="img-responsive " src="assets/images/<?php echo $view->img1 ?>" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >
								<?php echo $view->keterangan ?>
							</a></h6>
							<span class=" price-in1"> 

								<?php if($this->session->userdata('kode_member')) { ?>
								<h5 class="item_price"><?php echo $view->harga_member ?></h5>
								<?php }else{ ?>
								<h5 class="item_price"><?php echo $view->harga_nonmember ?></h5>

								<?php } ?>
							</span>
						</div>	

						<div class="clearfix"> </div>
					</div>		
				</div>
				   	<?php
				   }
			 ?>

			 <h3 class="cate">Terbaru</h3>
			<?php $populer = "SELECT * from tbl_produk where type='populer' limit 4";
				   $rsp    = $this->db->query($populer);
				   foreach ($rsp->result() as $view) {
				   	?>
				<div class="product-bottom">
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="index.php/produk/detail/<?php echo $view->kode_produk ?>"><img class="img-responsive " src="assets/images/<?php echo $view->img1 ?>" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >
								<?php echo $view->keterangan ?>
							</a></h6>
							<span class=" price-in1"> 

								<?php if($this->session->userdata('kode_member')) { ?>
								<h5 class="item_price"><?php echo $view->harga_member ?></h5>
								<?php }else{ ?>
								<h5 class="item_price"><?php echo $view->harga_nonmember ?></h5>

								<?php } ?>
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