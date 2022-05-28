<!-- Modal Popup untuk delete-->
<style type="text/css">
	
table, tr, th, td {
		border-collapse: collapse; /*untuk membuat garis table tipis*/
		border: 1px solid #98BF21;

	}
	th{
		background-color:#A7C942;
		border-bottom:3px solid #98BF21;
	}
	th, td{
		padding: 5px;
	}
	
	tr:nth-child(odd){
		background-color:#EAF2D3;
	}
	tr:nth-child(even){
		background-color:#e9ecf2; 
	}
	tr:hover{
		background-color:#ffffff;
		cursor: pointer; 
	}
	th.a{
		color: white;
		float: left;
		
	}
</style>
<div class="modal fade" id="modal_delete">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top:100px;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" ariahidden="true">&times;</button>
				<h3 class="modal-title" style="text-align:center;">Delete</h3>
			</div>
			<div class="modal-body">
        		<h4>Apakah Anda Yakin Ingin Menghapus...?</h4>
      		</div>
			<div class="modal-footer" style="margin:0px; border-top:0px; textalign:center;">
				<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal Popup untuk Tambah !-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div class="row text-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      						<a  href="<?php echo base_url();?>index.php/ci_admin/tambah_point" class="btn btn-primary btn-small" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th  data-align="center" data-sortable="true">No</th>
								<th  data-align="left" data-sortable="true">Kode Point</th>
								<th  data-align="left" data-sortable="true">Kode Member</th>
								<th  data-align="left" data-sortable="true">Kode Transaksi</th>
								<th  data-align="left" data-sortable="true">Status</th>
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
							<td><?php echo $row->kode_point ; ?></td>
							<td><?php echo $row->kode_member ;?></td>
							<td><?php echo $row->kode_transaksi ;?></td>
							
							
							<td>
								<?php if($row->status == 1) { ?>
							<button type="button" class="btn btn-succes btn-sm">
									DIKONFIRMASI
								</button>
							<?php }else{ ?>
							<button type="button" class="btn btn-warning btn-sm">
									BELUM DIKONFIRMASI
								</button>
								<?php } ?>
							</td>
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

			                      

			                      <?php 	if($row->status == 1){ ?>   
										<a href="#" >
								<button type="button" class="btn btn-success btn-sm">
									<span class="glyphicon glyphicon-trash"></span>TERKONFIRMASI
								</button>
							</a> 
							<a href="<?php 	echo base_url() ?>index.php/ci_admin/hapus_tukarpoint/<?php echo $row->id_transaksipoint ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a> 
			                      	
			                      <?php }else{ ?>
			                  		

			                 <form method="post" action="<?php echo base_url() ?>index.php/ci_admin/konfirmasi_point">
      						<input type="hidden" name="kode_member" value="<?php echo $row->kode_member ?>">
      						<input type="hidden" name="sisa_point" value="<?php echo $row->sisa_point ?>">
      						<input type="submit" name="konfirmasi"   class="glyphicon glyphicon-plus btn btn-primary btn-small" value="KONFIRMASI">
      						
							</form>
      						
							<a href="<?php 	echo base_url() ?>index.php/ci_admin/hapus_tukarpoint/<?php echo $row->id_transaksipoint ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a> 

			                      <?php 	} ?>       
      						<?php } ?>
      						
							
							</td>
						</tr>
				
						
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