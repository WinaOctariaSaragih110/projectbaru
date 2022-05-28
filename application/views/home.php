
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

    <script type="text/javascript" src="assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
<!-- slide -->
  <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{ b: 5500, d: 3000, o: -1, r: 240, e: { r: 2 } }],
              [{ b: -1, d: 1, o: -1, c: { x: 51.0, t: -51.0 } }, { b: 0, d: 1000, o: 1, c: { x: -51.0, t: 51.0 }, e: { o: 7, c: { x: 7, t: 7 } } }],
              [{ b: -1, d: 1, o: -1, sX: 9, sY: 9 }, { b: 1000, d: 1000, o: 1, sX: -9, sY: -9, e: { sX: 2, sY: 2 } }],
              [{ b: -1, d: 1, o: -1, r: -180, sX: 9, sY: 9 }, { b: 2000, d: 1000, o: 1, r: 180, sX: -9, sY: -9, e: { r: 2, sX: 2, sY: 2 } }],
              [{ b: -1, d: 1, o: -1 }, { b: 3000, d: 2000, y: 180, o: 1, e: { y: 16 } }],
              [{ b: -1, d: 1, o: -1, r: -150 }, { b: 7500, d: 1600, o: 1, r: 150, e: { r: 3 } }],
              [{ b: 10000, d: 2000, x: -379, e: { x: 7 } }],
              [{ b: 10000, d: 2000, x: -379, e: { x: 7 } }],
              [{ b: -1, d: 1, o: -1, r: 288, sX: 9, sY: 9 }, { b: 9100, d: 900, x: -1400, y: -660, o: 1, r: -288, sX: -9, sY: -9, e: { r: 6 } }, { b: 10000, d: 1600, x: -200, o: -1, e: { x: 16 } }]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing

            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 3);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
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
							</span></div>
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
												
												
											</ul>
										  </div>
										 
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
<!--banner-->
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
	    	<div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		
	          								
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
       
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
           
              
              <?php $slid1 = $this->db->query("SELECT * FROM tbl_slide where id_slide='1'");
              	foreach ($slid1->result() as $key => $valuew) {
              		
              		?>
 <div data-p="225.00" style="display: none;">
                <img data-u="image" src="assets/web/images/<?php echo $valuew->slide ?>" />
            </div>
              		<?php
              	}
               ?>

              <?php $slid2 = $this->db->query("SELECT * FROM tbl_slide where id_slide='2'");
              	foreach ($slid2->result() as $key => $valuee) {
              		
              		?>
 <div data-p="225.00" style="display: none;">
                <img data-u="image" src="assets/web/images/<?php echo $valuee->slide ?>" />
            </div>
              		<?php
              	}
               ?>

              <?php $slid3 = $this->db->query("SELECT * FROM tbl_slide where id_slide='3'");
              	foreach ($slid3->result() as $key => $valued) {
              		
              		?>
 <div data-p="225.00" style="display: none;">
                <img data-u="image" src="assets/web/images/<?php echo $valued->slide ?>" />
            </div>
              		<?php
              	}
               ?>
        </div>
        </div>
	      		</ul>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--//banner-->
<!--content-->
<div class="content">
	<div class="container">
		
		</div>
<!--//content-->
	<div class="con-tp">
		<div class="container">
		<br/>
		<br/>
		<br/>
			<?php foreach ($data->result() as $row) { ?>
				
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="index.php/produk/kategori/<?php echo $row->nama_kategori ?>">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img width="600px" src="assets/images/<?php echo $row->img ?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4><?php echo $row->nama_kategori ?></h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<?php
			} ?>
			<?php foreach ($data_point->result() as $row) { ?>
				
		<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
			<a href="index.php/produk/point">
				<div class="content-grid-effect slow-zoom vertical">
					<div class="img-box"><img width="600px" src="assets/images/<?php echo $row->img ?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
									<h4><?php echo $row->nama_kategori ?></h4>	
							</div>
						</div>
				</div>
			</a>
		</div>
		<?php
			} ?>
		<div class="clearfix"></div>
		</div>

	</div>

	<div class="c-btm">
		<div class="content-top1">
			<div class="container">
						<?php $sql = "SELECT * from tbl_produk where type='promosi' limit 4"; $result = $this->db->query($sql); foreach($result->result() as $v) : ?>

				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
							<a href="index.php/produk/detail/<?php echo $v->kode_produk ?>">
								<?php       
										            $image = array(
										              'src' => 'assets/images/'.($v->img1),
										              'class' => 'photo',
										              'width' => '250',
										              'height' => '180',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
						</a>
						<h3><a href="single.html"><?php echo $v->nama_produk; ?></a></h3>
						<div class="price">
								<h5 class="item_price">
									<?php if($this->session->userdata('kode_member')) { ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($v->harga_member,2) ?></h4>
								<?php }else{ ?>
								<h4 class="item_price"><?php echo 'Rp. '.number_format($v->harga_nonmember,2) ?></h4>

								<?php } ?>
								</h5>
								<a href="index.php/produk/detail/<?php echo $v->kode_produk ?>">DETAIL</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
						<?php endforeach; ?>
			
			</div>	
		</div>
	</div>
<!--footer-->





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
			<!-- <div class="col-md-6 top-footer1">
				<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="SUBSCRIBE">
					</form>
			</div>
			<div class="clearfix"> </div>	 -->
		<div style="float:right;color:black">
			<h3>Information Rainkids</h3>
				<a href="index.php/web/cara_berbelanja" style="color:black">Cara Berbelanja</a><br/>
				<a href="index.php/web/tentang_point" style="color:black">Tentang Point</a><br/>
				<a href="index.php/web/mmember" style="color:black">Member</a><br/>
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
							foreach ($sql_1->result() as $key => $value) {
								echo $value->set;
							}
						 ?>

						</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="Rainkids.stocklot@gmail.com">
							<?php
							$sql_1=$this->db->query("SELECT * FROM tbl_set where id_set='12' ");
							foreach ($sql_1->result() as $key => $value) {
								echo $value->set;
							}
						 ?>
						</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : 
<?php
							$sql_1=$this->db->query("SELECT * FROM tbl_set where id_set='13' ");
							foreach ($sql_1->result() as $key => $value) {
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
</body>
</html>