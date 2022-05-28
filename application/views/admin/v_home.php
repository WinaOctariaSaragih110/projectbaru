              <center> <img src="<?php echo base_url();?>assets/web/images/logo.jpg" width="450"  class="img-responsive">
</center> 
<div style="background:black">
<div class="row"> 
			<div class="col-xs-6 col-md-3"> 
				<div class="panel panel-default"> 
					<div class="panel-body easypiechart-panel"> 
						<h4>New Orders</h4> 
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">
							  <?php 
                                    $sql = "SELECT * FROM tbl_cart ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
						</span> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-6 col-md-3"> 
				<div class="panel panel-default"> 
					<div class="panel-body easypiechart-panel"> 
						<h4>Transaksi Point</h4> 
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">
							  <?php 
                                    $sql = "SELECT * FROM tbl_point ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
						</span> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-6 col-md-3"> 
				<div class="panel panel-default"> 
					<div class="panel-body easypiechart-panel"> 
						<h4>Member</h4> 
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">
							  <?php 
                                    $sql = "SELECT * FROM tbl_member ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
						</span> 
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="col-xs-6 col-md-3"> 
				<div class="panel panel-default"> 
					<div class="panel-body easypiechart-panel"> 
						<h4>Total Produk</h4> 
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">
							  <?php 
                                    $sql = "SELECT * FROM tbl_produk ";
                                    $rs = $this->db->query($sql);
                                    $jum = $rs->num_rows();
                                    echo '<b style="color:red">'.$jum.'</b>';

                                 ?>
						</span> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div><!--/.row--> 
		</div>