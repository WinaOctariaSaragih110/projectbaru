

<!-- Modal Popup untuk Tambah !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="<?php echo base_url();?>index.php/ci_admin/tambah_produk" class="btn btn-primary btn-small" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th  data-align="center" data-sortable="true">No</th>
								<th  data-align="left" data-sortable="true">Invoice</th>
								<th  data-align="left" data-sortable="true">Member</th>
								<th  data-align="left" data-sortable="true">Email</th>
								<th  data-align="left" data-sortable="true">No Hp</th>
								<th  data-align="left" data-sortable="true">Total</th>
								<th data-align="center">Aksi</th>
						    </tr>
						    </thead>
						    <tbody>
							<?php 
							$no=1;
							foreach ($data->result() as $row) {
							?>
							<tr>
							<td><?php echo $no++ ; ?></td>
							<td><?php echo $row->invoice ; ?></td>
							<td>
								<?php
			                        if($row->kode_member == NULL){
			                          ?>
			                          <b class="btn btn-danger btn-rounded waves-effect waves-light">Non Member</b>
			                          <?php
			                        }else{
			                          ?>
			                          <b class="btn btn-success btn-rounded waves-effect waves-light">Member</b>

			                          <?php
			                        }
			                     ?>
							</td>
							<td><?php echo $row->email ;?></td>
							<td><?php echo $row->no_hp ;?></td>
							<td><?php echo $row->total ;?></td>
							
							<td>
							<a href="<?php echo base_url() ?>index.php/ci_admin/detail_cart/<?php echo $row->invoice ?>" class="btn btn-warning btn-rounded waves-effect waves-light">
								
									Lihat Rincian
								
							</a> 

							<a href="<?php echo base_url() ?>index.php/ci_admin/hapus_cart/<?php echo $row->invoice ?>" class="btn btn-warning btn-danger waves-effect waves-light">
								
									Hapus
								
							</a> 
      						<!-- <a  href="#" class="btn btn-primary btn-small" 
      						data-toggle="modal" data-target="#edit<?php echo $row->invoice ; ?>">
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;Edit</a> -->
							
							</td>
						</tr>
						<?php } ?>
						
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	 
<script type="text/javascript">
function confirm_modal(delete_url)
{
	$('#modal_delete').modal('show', {backdrop: 'static'});
	document.getElementById('delete_link').setAttribute('href' , delete_url);
}
</script>