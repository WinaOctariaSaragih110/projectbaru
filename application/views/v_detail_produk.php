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
			        <div class="thumb-image"> 
			        	 <?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->img1),
										              'class' => 'photo',
										              'width' => '180',
										              'height' => '130',
										              'data-imagezoom' => 'true',
										              'class' => 'img-responsive',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			        </div>
			    </li>
			    <li data-thumb="assets/images/<?php echo $row->img2 ?>">
			         <div class="thumb-image">
			         	 <?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->img2),
										              'class' => 'photo',
										              'width' => '180',
										              'height' => '130',
										              'data-imagezoom' => 'true',
										              'class' => 'img-responsive',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			         </div>
			    </li>
			    <li data-thumb="assets/images/<?php echo $row->img3 ?>">
			       <div class="thumb-image"> <?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->img3),
										              'class' => 'photo',
										              'width' => '180',
										              'height' => '130',
										              'data-imagezoom' => 'true',
										              'class' => 'img-responsive',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?> </div>
			    </li> 
			  </ul>
			<?php endforeach; ?>
		</div>
	</div>	
<div class="col-md-7 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2>
								<u><?php echo $row->nama_produk ?></u>
							</h2>
							<p><?php echo $row->keterangan ?></p>
							

								<?php if($this->session->userdata('kode_member')) { ?>
								<label  class="add-to item_price"><?php echo 'Rp. '.number_format($row->harga_member,2); ?></label>
								<?php }else{ ?>
								<label  class="add-to item_price"><?php echo 'Rp. '.number_format($row->harga_nonmember,2); ?></label>



								<?php } ?>
							<h2>Stok Produk</h2>
<table border="1" width="100%">
                                                          <tr>
                                                            <th>Ukuran</th>
                                                           
                                                            <th>Stok</th>
                                                          </tr>
                                                           <?php $sqlstok = "SELECT * FROM tbl_stok left join tbl_ukuran 
							on tbl_stok.id_ukuran=tbl_ukuran.id_ukuran  where tbl_stok.kode_produk='$row->kode_produk' "; $rsstok=$this->db->query($sqlstok); foreach ($rsstok->result() as $rows) {
                                                        ?>
                                                          <tr>
                                                            <td><?php echo $rows->ukuran ?></td>
                                                          
                                                            <td><?php echo $rows->stok ?></td>
                                                            
                                                          </tr>
                                                        <?php
                                                      } ?>
                                                        </table>
							<div class="account_grid">
			   <div class="col-md-9 login-right">
				<form action="index.php/produk/cart" method="post">
					<select name="jenis" class="form-control">
                     
                       <option value="1">Satuan</option>
                       <option value="12">Lusin</option>
                       <option value="24">Kodi</option>
                      
                     </select>

					
					 

					<select name="id_ukuran" class="form-control">
                     <?php $sql = "select * from tbl_ukuran "; $rs=$this->db->query($sql); 
                     foreach ($rs->result() as $v) { ?>
                       <option value="<?php echo $v->id_ukuran; ?>"><?php echo $v->ukuran; ?></option>
                      <?php 
                     } ?>
                     </select>

					<input type="text" name="jumlah_beli" placeholder="Jumlah Beli"> 
					<textarea name="keterangan" style="width: 314px; height: 95px;"></textarea>
					<input type="hidden" name="kode_produk" value="<?php echo $row->kode_produk ?>"> 

					<div class="word-in">
				 		 <input type="submit" value="ADD To Cart">
				  	</div>
			    </form>
			   </div>	
			   </div>	
			   </div>
						
					</div>
			<div class="clearfix"> </div>
			<div class="content-top1">
			<h1>Promotion Product</h1>
			<?php 
			$dsd="SELECT * FROM tbl_produk where type='promosi' limit 6";
			$dfd=$this->db->query($dsd);
			foreach($dfd->result() as $v) : ?>
				<div class="col-md-4 col-md4">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="assets/images/<?php echo $v->img1 ?>" alt="" />
						</a>
						<h3><a href="single.html"><?php echo $v->nama_produk ?></a></h3>
						<div class="price">
								<?php if($this->session->userdata('kode_member')) { ?>
								<h5 class="item_price"><?php echo $v->harga_member ?></h5>
								<?php }else{ ?>
								<h5 class="item_price"><?php echo $v->harga_nonmember ?></h5>

								<?php } ?>
								<a href="index.php/produk/detail/<?php echo $v->kode_produk ?>" class="item_add">Detail</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<?php endforeach; ?>
			
			
			<div class="clearfix"> </div>
			</div>		
</div>
<!----->
<div class="col-md-3 product-bottom">
			<!--categories-->
				<!-- <div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categories</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Men </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Women </a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Kids</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Accesories</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Shoes</a>
								<ul class="cute">
									<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
									<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
									<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
								</ul>
							</li>
						</ul>
					</div> -->
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