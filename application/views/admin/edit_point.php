<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/ci_admin/proses_edit_point" enctype="multipart/form-data" ><br><br>
    <div class="form-group">
    <?php 
        foreach ($data->result() as $row) {
            ?>
        <label class="control-label col-sm-2" for="fieldtwo">Kode Point</label>
        <div class="col-sm-5">
        <input type='text' name='kode_point' value="<?php echo $row->kode_point ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_point" value="<?php echo $row->kode_point ?>">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama Produk</label>
        <div class="col-sm-5">
            <input required type="text" name="nama_produk" class="form-control" value="<?php echo $row->nama_produk ?>">
        </div>
    </div>
  
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Point</label>
        <div class="col-sm-5">
            <input required type="number" name="point"  class="form-control" value="<?php echo $row->point ?>">
        </div>
    </div>

   
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Deskripsi</label>
        <div class="col-sm-5">
            <textarea name="keterangan" style="width: 505px; height: 87px;"><?php echo $row->keterangan ?></textarea>        
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Deskripsi</label>
        <div class="col-sm-5">
            <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
            <input type="file" id="input-file-now" class="dropify" name="userfile[]" required />
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
        <a href="<?php echo base_url();?>index.php/ci_admin/point" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>

            <?php
        }
     ?>

