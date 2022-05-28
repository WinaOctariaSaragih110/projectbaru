
<!DOCTYPE html>
<html>
<head>
<title>RAINKIDS STORE</title>
    <base href="<?php echo base_url() ?>" />

<link href="assets/web/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/web/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="assets/web/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="assets/web/js/bootstrap.min.js"></script>
<script src="assets/web/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="assets/web/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="assets/web/css/animate.min.css" rel="stylesheet"> 
<script src="assets/web/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<img src="assets/web/images/logo.jpg" width="100">
					<a href="index.php" style="font-size:30px;color:black">RAINKIDS STORE</a>	

				</div>
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					
				</div>
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					
			<div style="float:right">

					<h3> <div class="total">

							<span >
								<?php 
								error_reporting(0);
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
					   			//echo 'Rp. '.number_format($hasil,2);
					   		
					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$j=$c->harga_member * 12;
					   			$hasil = $j * $items['qty'];
					   			//echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$j=$c->harga_member * 12;
					   			$hasil = $j * $items['qty'];
					   			//echo 'Rp. '.number_format($hasil,2);
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
					   			//echo 'Rp. '.number_format($hasil,2);
					   		 
					   }elseif(($items['price'] == 12)){
							$a = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='lusin' limit 1";
					   		$b =$this->db->query($a);
					   		foreach($b->result() as $c){
					   			$j=$c->harga_nonmember * 12;
					   			$hasil = $j * $items['qty'];
					   			//echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}elseif(($items['price'] == 20)){
							$d = "SELECT * from tbl_satuan where kode_produk='$v->kode_produk' and jenis='kodi' limit 1";
					   		$e =$this->db->query($a);
					   		foreach($e->result() as $f){
					   			$j=$c->harga_nonmember * 12;
					   			$hasil = $j * $items['qty'];
					   			//echo 'Rp. '.number_format($hasil,2);
					   			
					   		}
						}
					   }
				 ?>
				 <?php } ?>
			
		 <?php 

		               
		                 
		                  $total+=$hasil;
		                

		 ?>
	
		 <?php endforeach; ?>
		 		 <a href="index.php/web/checkout"><?php echo 'Rp. '.number_format($hasil,2); ?></a><br/>
		 		 Point : 
		 			<?php 

		 					$sql_point = "SELECT * from tbl_set where info='point' ";
							$rs_point  = $this->db->query($sql_point);
							foreach ($rs_point->result() as $key_point) {
								$bagi=$key_point->set;
							}
								$bagi=$key_point->set;

		 					echo $res = floor($hasil/$bagi);

		 			 ?>
							</span>
							<img src="assets/web/images/cart.png" alt=""/></h3>

				</div>
				</div>
			<!-- <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div> -->
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 

				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1" id="menus">
							<li><a href="index.php/web">HOME</a></li>
							<?php $sql = "SELECT * from tbl_kategori limit 5"; $result = $this->db->query($sql); foreach($result->result() as $v) : ?>
							<li><a href="index.php/produk/kategori/<?php echo $v->nama_kategori ?>">
							<?php echo $v->nama_kategori ?></a></li>
							
						<?php endforeach; ?>
							<?php if($this->session->userdata('kode_member')){ ?>
						
							<li><a href="index.php/produk/point"> 
							<?php
							$kk=$this->session->userdata('kode_member');
							 $sql = "SELECT * from tbl_member where kode_member='$kk'"; $result = $this->db->query($sql); 
							 foreach($result->result() as $v){
							 	echo strtoupper($v->nama_member);
							 }

							  ?>


							</a></li>
				<?php }else{ ?>
							<li><a href="index.php/web/login">REWARD POINT

				<?php } ?>

							<?php if($this->session->userdata('kode_member')){ ?>
							
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="index.php/web/account" style="color:white;background:black">My Account</a></li>
												<li><a href="index.php/web/order_member" style="color:white;background:black">My Order</a></li>
												<li><a href="index.php/web/order_member" style="color:white;background:black">My Shipping</a></li>
												<li><a style="color:white;background:black">My Point
								<?php 

										$kode_member = $this->session->userdata('kode_member');
										$sql = "SELECT * from tbl_member where kode_member='$kode_member'";
										$rs= $this->db->query($sql);
										foreach ($rs->result() as $v) {
											?>
												: <?php echo $v->point; ?>
											<?php
										}


								 ?></a></li>
												<li><a href="index.php/login_member/logout" style="color:white;background:black">Logout</a></li>
												
												
											</ul>										  </div>
										 
									   </div>
									</div>
									<!-- Nav tabs -->
									                   
								</div>				
							</li>
							
							<?php }else{ ?>
							<li ><a href="index.php/web/login">LOGIN</a></li>

							<?php } ?>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>




<?php $this->load->view($content); ?>










<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-6 top-footer">
				<h3>Follow Us On</h3>
				<div class="social-icons">
					<ul class="social">
						<li><a href="https://www.facebook.com/" target="_blank"><i class="facebook"></i></a></li>	
						<li><a href="https://www.google.com/" target="_blank"><i class="google"></i> </a></li>
						<li><a href="https://www.linked.com/" target="_blank"><i class="linked"></i> </a></li>						
					</ul>
						<div class="clearfix"></div>
				 </div>
			</div>
			<!-- <div class="col-md-4 top-footer">
				<h3>Newsletter</h3>
					
						<ul>
						<li>Menjadi Member</li>
						<li>Cara Belanja</li>
						<li>Tentang Point</li>
					</ul>
			</div> -->

			<div style="float:right;color:black">
			<h3>Information Rainkids</h3>
				<a href="index.php/web/cara_berbelanja" style="color:black">Cara Berbelanja</a><br/>
				<a href="index.php/web/tentang_point" style="color:black">Tentang Point</a><br/>
				<a href="index.php/web/member" style="color:black">Member</a><br/>
			</div>
			<div class="clearfix"> </div>	
		</div>	
	</div>
	<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate">
					<h6>About Rainkidstore</h6>
					<ul>
						<li><a href="index.php/web/about">About</a></li>
						<li><a href="index.php/web/kontak">Contact</a></li>
						<li><a href="index.php/web/karir">Cariers</a></li>
						<li><a href="index.php/web/patner">Patners</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Categories</h6>
					<ul>
						
						<?php $sql = "SELECT * from tbl_kategori limit 4"; $result = $this->db->query($sql); foreach($result->result() as $v) : ?>
							<li><a href="index.php/produk/kategori/<?php echo $v->nama_kategori ?>">Categories <?php echo $v->nama_kategori ?></a></li>
							
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate">
					<h6>Top Brands</h6>
					<ul>
						<li><a href="index.php/web/populer">Populer</a></li>
						<li><a href="index.php/web/new_produk">New Product</a></li>
						<li><a href="index.php/web/promosi">Promotion</a></li>
						
					</ul>
				</div>

				<div class="col-md-3 footer-bottom-cate cate-bottom">
					<h6>Our Address</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 
						<?php
							$sql_1=$this->db->query("SELECT * FROM tbl_set where id_set='11' ");
							foreach ($sql_1 as $key => $value) {
								echo $value->set;
							}
						 ?>

						</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="Rainkids.stocklot@gmail.com">
							<?php
							$sql_1=$this->db->query("SELECT * FROM tbl_set where id_set='12' ");
							foreach ($sql_1 as $key => $value) {
								echo $value->set;
							}
						 ?>
						</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : 
<?php
							$sql_1=$this->db->query("SELECT * FROM tbl_set where id_set='13' ");
							foreach ($sql_1 as $key => $value) {
								echo $value->set;
							}
						 ?>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class"> © 2016 Rainkidstore.com . All Rights Reserved </p>
			</div>
	</div>
</div>
<!--footer-->
<!--footer-->
<!-- slide -->
<script src="assets/web/js/jquery.min.js"></script>
<script src="assets/web/js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="assets/web/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="assets/web/js/simpleCart.min.js"> </script>
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
						<!-- FlexSlider -->
  <script defer src="assets/web/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="assets/web/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="assets/web/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="assets/web/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
</body>
</html>