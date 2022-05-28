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
      						<a  href="<?php echo base_url();?>index.php/ci_admin/tambah_ukuran" class="btn btn-primary btn-small" ><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah data</a>
  						</div>
  						<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
  						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th  data-align="center" data-sortable="true">No</th>
								<th  data-align="left" data-sortable="true">Ukuran</th>
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
							<td><?php echo $row->ukuran ; ?></td>
							<td>
      						<a  href="<?php echo base_url() ?>index.php/ci_admin/edit_ukuran/<?php echo $row->id_ukuran ?>" class="btn btn-primary btn-small" >
      						
      						<span class="glyphicon glyphicon-plus"></span>&nbsp;Edit</a>
							<a href="<?php echo base_url() ?>index.php/ci_admin/hapus_ukuran/<?php echo $row->id_ukuran ?>" >
								<button type="button" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-trash"></span>Hapus
								</button>
							</a> 
							
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