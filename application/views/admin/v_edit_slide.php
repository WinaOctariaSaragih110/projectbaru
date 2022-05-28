<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/ci_admin/proses_edit_slide" enctype="multipart/form-data" ><br><br>
    
        
        <?php foreach ($data->result() as $row) {
            ?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">File</label>
        <div class="col-sm-5">
            <input type="file" id="input-file-now" class="dropify"  name="userfile">
            <input type="hidden" id="" class=""  name="id_slide" value="<?php echo $row->id_slide ?>">
        </div>
    </div>
    
    <div><br>
            <button type="reset" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-refresh"></span>
            </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="kirim" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Update
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/ci_admin/slide" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>

            <?php
        } ?>

