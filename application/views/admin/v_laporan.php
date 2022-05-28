<center>
	<h2>
		DATA LAPORAN RAINKIDSTORE.COM
		<hr/>
	</h2>
</center>
<br/>
<br/>
<br/>
<br/>
<div class="row"> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-blue panel-widget "> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_detailcart ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
							</div> 
								
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							<div class="text-muted">
								<a href="laporan/order" class="btn btn-success">ORDER</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-orange panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_tukarpoint ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/point" class="btn btn-success"> POINT</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-teal panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_cart ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
						
							<div class="text-muted">
								<a href="laporan/v_laporaninvoice" target="blank" class="btn btn-success">INVOICE</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-red panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content">
								<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_member where status=1 ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo $jum;

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/member" target="blank" class="btn btn-success"> MEMBER</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-blue panel-widget "> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_produk ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/produk" class="btn btn-success">DATA PRODUK</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-orange panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_point ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/all_order" target="blank" class="btn btn-success">DATA POINT</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-teal panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user">
							<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_stok ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/stok" class="btn btn-success">DATA STOK</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-12 col-md-6 col-lg-3"> 
				<div class="panel panel-red panel-widget"> 
					<div class="row no-padding"> 
						<div class="col-sm-3 col-lg-5 widget-left"> 
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content">
								<div class="large">
								<?php 
                                    $sql = "SELECT * FROM tbl_konfirmasi ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo $jum;

                                 ?>
                                 </div>
							</use></svg> 
						</div> 
						<div class="col-sm-9 col-lg-7 widget-right"> 
							
							<div class="text-muted">
								<a href="laporan/konfirmasi" target="blank" class="btn btn-success">KONFIRMASI</a>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div><!--/.row--> 