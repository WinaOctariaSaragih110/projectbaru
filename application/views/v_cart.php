<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.:BATIKBERKAH :.</title>
    <base href="<?php echo base_url() ?>" />
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
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
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
					<div class="col-sm-4 cart_total_price">
						<h3 style="font-family: courier;font-weight: bold;color: #FE980F">
									BATIK BERKAH JAMBI
								</h3>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php/member/account"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="index.php/member/biling"><i class="fa fa-star"></i> Biling</a></li>
								<li><a href="index.php/member/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="index.php/site/v_chart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php 
									if($this->session->userdata('user')){
										?>
							<li><a href="#"><i class="fa fa-user "></i>

								<?php echo $nama_member; ?>
								</a></li>
								<li><a href="index.php/site/logout"><i class="fa fa-lock "></i>
								Logout
								</a></li>
										<?php 
											}else{
												?>
								<li><a href="index.php/member/login"><i class="fa fa-lock"></i>
								<?php echo $nama_member; ?>
								</a></li>
												<?php
											}

										 ?>
								
							</ul>
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
					<div class="col-sm-5">
					
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<h4 class="alert alert-success">
				<b>KERANJANG BELANJA ANDA</b>
				</h4>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Photo</td>
							<td class="description">Nama Barang</td>
							<td class="description">Kode barang</td>
							<td class="quantity">Jumlah</td>
							<td class="price">Ongkos Kirim</td>
							<td class="price">Harga</td>
							<td class="total">Total</td>
							<td class="total">Action</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
						

								<?php	
										$sql = "SELECT * FROM tbl_member where nama_member='$nama_member'";
										$rs  = $this->db->query($sql);
										foreach ($rs->result() as $key) {
											
										}

								?>


								<?php 

									$id_member=$key->id_member;
									$data = "SELECT * FROM tbl_cart where id_member = '$id_member' and konfirmasi='' ";
									$result = $this->db->query($data);

										foreach ($result->result() as $row) {
											?>
							
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
								<p>Rp. <?php echo number_format($row->area); ?></p>
								
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo number_format($row->harga,2); ?></p>
							</td>

							<td class="cart_total">
								<p class="cart_total_price">Rp. <?php echo number_format($row->total,2); ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="index.php/site/hapus_beli/<?php echo $row->id_cart; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
											<?php
		}

 ?>

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Apa yang anda lakukan selanjutnya ?</h3>
				<p>Silahkan transfer ke rekening yang tertera di bawah ini sertakan struk pembayaran</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							
							<table>
								<tr>
									<td>Nama Member</td>
									<td>:</td>
									<td><?php echo $nama_member ?></td>
								</tr>
								<tr>
									<td>Rekening Transfer (Hj Mahmuda)</td>
									<td>:</td>
									<td>BRI 1232 - 3213232 - 2321312 - 32123</td>
								</tr>
								<tr>
									<td>Kode Transaksi</td>
									<td>:</td>
									<td><b><?php echo $kodeunik; ?></td>
								</tr>
							</table>
					 	<div class="alert alert-success">
					 	Total Belanja :  <?php $id_member = $row->id_member;

		                $sql="SELECT * FROM tbl_cart where id_member='$id_member'";
		                $rs=$this->db->query($sql);
		                $total=0;
		                foreach ($rs->result() as $tampil) {
		                  # code...
		                  $sub=$tampil->total;
		                 
		                  $total+=$sub;
		                }
		                echo 'Rp. '.number_format($total,2);
		                
		                 
		                 ?>

						</div>
						</ul>

						<a class="btn btn-default update" href=""></a>
					</div>
						
				</div>

				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total Keranjang Belanja <span>
								<?php $id_member = $row->id_member;

		                $sql="SELECT * FROM tbl_cart where id_member='$id_member'";
		                $rs=$this->db->query($sql);
		                $total=0;
		                foreach ($rs->result() as $tampil) {
		                  # code...
		                  $sub=$tampil->total;
		                 
		                  $total+=$sub;
		                }
		                echo 'Rp. '.number_format($total,2);
		                 
		                 ?>
							</span></li>
							<li>Diskon <span>-</span></li>
							<li>Ongkos Kirim <span><?php echo $row->area ?></span></li>
							<li>Total <span>
							<?php $id_member = $row->id_member;

		                $sql="SELECT * FROM tbl_cart where id_member='$id_member'";
		                $rs=$this->db->query($sql);
		                $total=0;
		                foreach ($rs->result() as $tampil) {
		                  # code...
		                  $sub=$tampil->total;
		                 
		                  $total+=$sub;
		                }
		                echo 'Rp. '.number_format($total,2);
		                
		                 
		                 ?>
							</span></li>
						</ul>
						<!-- perintah mengitung jumlah barang -->
						<?php
						 $data="SELECT COUNT(*) FROM tbl_cart WHERE id_member='$id_member' AND konfirmasi='' "; 
							$rs=$this->db->query($sql);
							$jml=$rs->num_rows();
							
						?>
							<?php echo form_open('site/finish'); ?>	
							<a class="btn btn-default update" href="index.php/site/product">Belanja Lagi</a>
							<input type="hidden" name="id_member" value="<?php echo $id_member; ?>" >
							<input type="hidden" name="total" value="<?php echo $total; ?>" >
							<input type="hidden" name="jumlah_barang" value="<?php echo $jml; ?>" >
							<input type="hidden" name="kode_cart" value="<?php echo $kodeunik; ?>" >
							<button type="submit" name="finish" class="btn btn-default check_out" >
								Selesai Belanja
							</button>
							</form>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Layanan</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Bantuan online</a></li>
								<li><a href="#">Hubungi Kami</a></li>
								<li><a href="#">Status pemesanan</a></li>
								<li><a href="#">Ganti lokasi</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>KEBIJAKAN</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Syarat Penggunaan</a></li>
								<li><a href="#">Kebijakan pribadi</a></li>
								<li><a href="#">Kebijakan pengembalian</a></li>
								<li><a href="#">Sistem pembayaran</a></li>
								<li><a href="#">Sistem Pengantaran</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tentang Kami</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Informasi Toko</a></li>
								<li><a href="#">Penghargaan</a></li>
								<li><a href="#">Lokasi Toko</a></li>
								<li><a href="#">Hakcipta</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Tentang Toko</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Alamat Email" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Dapatkan update terbaru dari <br/>
								situs kami dan diperbarui sendiri ...
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Hakcipta © 2016 Batik Jambi Berkah </p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>