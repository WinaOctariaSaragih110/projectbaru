	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori Batik</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/batik_pria">Batik Pria</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/batik_wanita">Batik Wanita</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/katun_prisma">Katun Prisma</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/motif_jambi">Motif Jambi</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="index.php/kategori/setelan_wanita">Setelan Wanita</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2></h2>
							<div class="brands-name">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
							<li><a href="#"> <span class="pull-right"></span></a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>KISARAN HARGA</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">Rp 0</b> <b class="pull-right">Rp 1.000.000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="assets/images/home/pas.png" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
<style type="text/css">
    .single:hover{
        background: #FE980F;

    }
    .b:hover{
        background: black
    }
    .harga:hover{
        color: white
    }

    .nama:hover{
        color: white
    }
</style>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                             <table>
                                <tr>
                                     <?php $i=3; foreach ($photo->result() as $row) { ?>
                                     <td>           
                                        <div class="product-image-wrapper">
                                            <div class="single">
                                                <div class="productinfo text-center">            
                                      <?php   
                                         $image = array(
                                              'src' => 'application/views/photo/'.($row->photo_url),
                                              'class' => 'photo',
                                              'width' => '250',
                                              'height' => '350',
                                              'rel' => 'lightbox',
                                            ); echo img($image); ?>
                                    <h2 class="harga">Rp. <?php echo number_format($row->harga ,2) ?></h2>
                                    <p class="nama"><?php echo $row->nama_barang ?></p>
                                    <a href="#" class="btn btn-default add-to-cart b"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                                     <a href="index.php/site/detail/<?php echo $row->kode_barang ?>" class="btn btn-default add-to-cart b"><i class="glyphicon glyphicon-play"></i>Detail</a>


                                    <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                                    </td>

                                     <?php if($i % 3 == 2){ echo '<tr></tr>'; } $i++; } ?>
                                    </tr>
                                </table>
                                <ul class="pagination">
                                <li class="active"></li>
							<li class=""><a href=""><?php echo $this->pagination->create_links(); ?></a></li>
						</ul>

                        </div>
                        </div>


					
						
			</div>
		</div>
	</section>
	