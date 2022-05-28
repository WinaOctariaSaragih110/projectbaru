<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/ci_admin/proses_editkategori" enctype="multipart/form-data" ><br><br>
    <div class="form-group">
        
    <?php foreach ($data->result() as $row) { ?>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">id Kategori</label>
        <div class="col-sm-5">
            <input required type="text" disabled="disabled" name="id_kategori" class="form-control" value="<?php echo $row->id_kategori; ?>">
            <input required type="hidden" name="id_kategori" class="form-control" value="<?php echo $row->id_kategori; ?>">
        </div>
    </div>
  
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama Kategori</label>
        <div class="col-sm-5">
            <input required type="text" name="nama_kategori"  class="form-control" value="<?php echo $row->nama_kategori; ?>">
        </div>
    </div>

   
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Foto</label>
        <div class="col-sm-5">
            <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
          
        </div>
    </div>
    
    <div><br>
            <button type="reset" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-refresh"></span>Refresh
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="kirim" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Update
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/ci_admin/kategori" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>
  <?php 

    } 

    ?>
