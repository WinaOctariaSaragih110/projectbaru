<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:BATIKBERKAH :.</title>
    <base href="<?php echo base_url() ?>" />
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  081366687771</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> batikjambiberkah@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
								<h3 style="font-family: courier;font-weight: bold;">
									BATIK BERKAH JAMBI
								</h3>
						</div>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php/member/account"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="index.php/member/biling"><i class="fa fa-star"></i> Konfirmasi</a></li>
								
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="#"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Logout
								</a></li>

								<li><a href="index.php/member/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<span class="badge bg-theme">
									<?php 

									$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
									$sts = $this->db->query($sql);
									foreach ($sts->result() as $keys) {
										# code...
									}

									$data="SELECT * FROM tbl_cart WHERE id_member='$keys->id_member' AND konfirmasi='' "; 
							$rs=$this->db->query($data);
							$jml=$rs->num_rows();
							echo $jml;	
						?>
									</span>
							</ul>
										<?php 
											}else{
												?>
								<li><a href="index.php/member/login"><i class="fa fa-lock">
								</i>
								<?php echo $nama_member; ?>
								</a></li>

								<li><a href="index.php/member/cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<span class="badge bg-theme"></span>
							</ul>
												<?php
											}

										 ?>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" >Home</a></li>
								
								<li><a href="index.php/site/product" >Produk Kami</a></li>
								<li><a href="index.php/site/cara" >Cara Belanja</a></li>
								
								<li><a href="index.php/site/tentang" >Tentang</a></li>
								<li><a href="index.php/kategori/galeri" >Galeri Toko</a></li>
								<li><a href="index.php/blog">Artikel</a></li>
								<li><a href="index.php/kategori/kontak">Kontak</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="cart_items">
		<div class="container">

			
			<div class="checkout-options"><!-- 
				Kode Cart 	:<?php echo $kode_cart; ?> <br/>
				Total Belanja :<?php echo $total; ?> <br/>
				Jumlah Barang Yang di beli :<?php echo $jumlah_barang; ?> <br/> -->
			</div><!--/checkout-options-->

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Photo</td>
							<td class="description">Nama Barang</td>
							<td class="description">Kode barang</td>
							<td class="quantity">Jumlah</td>
							<td class="price">Harga</td>
							<td class="total">Total</td>
							<td class="total">Action</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php 
						$sql = "SELECT * FROM tbl_cart where id_member='$id_member'";
						$rst = $this->db->query($sql);
						foreach ($rst->result() as $row) : ?>
							
							<td class="cart_product">
								<?php   
                                         $image = array(
                                              'src' => 'application/views/photo/'.($row->photo_url),
                                              'class' => 'photo',
                                              'width' => '90',
                                              'height' => '50',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
							</td>
							<td class="cart_description">
								<h4><?php echo $row->nama_barang; ?></h4>
							</td>
							<td class="cart_price">
								<p><?php echo $row->kode_barang; ?></p>

							</td>
							<td class="cart_quantity">
								<p><?php echo $row->jumlah_barang; ?></p>
								
							</td>
							<td class="cart_quantity">
								<p><?php echo $row->harga; ?></p>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $row->total; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php endforeach; ?>
						<tr>
							<td colspan="4">
								<h1>
									<div style="color:red">
										BELUM TERBAYAR !
									</div>

								</h1>
								Silahkan Melakukan konfirmasi <br/>
								Rekening Transfer (Hj Mahmuda) 	: 	BRI 1232 - 3213232 - 2321312 - 32123 <br/>
								Kode Transaksi 	: 	<?php echo $row->kode_cart; ?> <br/>
								Total Belanja : Rp.<?php echo $total; ?>
							</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
											<?php echo $total; ?>
										<td>
										</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>0</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>
											<?php echo $total;
		                 
		                				 ?>
										</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>Batik Berkah</span></h2>
							<p>  Batik Jambi Berkah bisa dikenal masyarakat Jambi, luar daerah, Pulau Sumatra, dan mancanegara</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Setelan Wanita</p>
								<h2>1 JAN 2016</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img2.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Setelan Wanita</p>
								<h2>1 JAN 2016</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Setelan Wanita</p>
								<h2>1 JAN 2016</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="assets/images/img4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Setelan Wanita</p>
								<h2>1 JAN 2016</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="assets/images/home/map.png" alt="" />
							<p>Simpang Pulai, Kota Jambi. Jambi Telp (0741) 64398</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>