

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
								<th  data-align="left" data-sortable="true">No Rekening</th>
								<th  data-align="left" data-sortable="true">Invoice</th>
								<th  data-align="left" data-sortable="true">Jumlah Transfer</th>
								<th  data-align="left" data-sortable="true">Atas Nama</th>
								<th  data-align="left" data-sortable="true">Gambar</th>
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
							<td><?php echo $row->no_rekening ; ?></td>
							<td><?php echo $row->invoice ;?></td>
							<td><?php echo $row->jumlah_transfer ;?></td>
							<td><?php echo $row->atas_nama ;?></td>
							<td><?php       
										            $image = array(
										              'src' => 'assets/images/'.($row->gambar),
										              'class' => 'photo',
										              'width' => '140',
										              'height' => '80',
										              'rel' => 'lightbox',
										            );
										            echo img($image); ?>
			                                </td>
							
							<td>
							<?php if($row->status == 1){ ?>
							<a href="<?php echo base_url() ?>index.php/ci_admin/detail_cart/<?php echo $row->invoice ?>" class="btn btn-warning btn-rounded waves-effect waves-light">
								
									DETAIL
								
							</a> 
							<b class="btn btn-success">
												
												TERKONFIRMASI
											</b>
      						<a  href="<?php echo base_url() ?>index.php/ci_admin/hapus_konfirmasi/<?php echo $row->invoice ; ?>" class="btn btn-primary btn-small" 
      						>
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;HAPUS</a>
							<?php }else{ ?>
							<a href="<?php echo base_url() ?>index.php/ci_admin/detail_cart/<?php echo $row->invoice ?>" class="btn btn-warning btn-rounded waves-effect waves-light">
								
									DETAIL
								
							</a> 
							<b class="btn btn-danger">
												NON KONFIRMASI
											</b>
      						<a  href="<?php echo base_url() ?>index.php/ci_admin/hapus_konfirmasi/<?php echo $row->invoice ; ?>" class="btn btn-primary btn-small" 
      						>
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;HAPUS</a>
							<?php } ?>
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