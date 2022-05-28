

</script>

 <?php foreach ($data->result() as $key => $value) {
   ?>
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_edit_jenissatuan" enctype="multipart/form-data">
                
                 
                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Satuan</label>
                    <div class="col-md-5">
                    <input type="text" name="satuan" required value="<?php echo $value->satuan ?>">
                    <input type="hidden" name="id_jenissatuan" required value="<?php echo $value->id_jenissatuan ?>">
                      </select>
                    </div>
</div>
<div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nilai</label>
                    <div class="col-md-5">
                    <input type="text" name="nilai" required value="<?php echo $value->nilai ?>">
                      </select>
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
        <a href="<?php echo base_url();?>index.php/ci_admin/jenissatuan" class="btn btn-primary btn-small">Tutup</a>
    </div>
        </div>
        </form>
               

   <?php
 } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
     
    </div>
    <!-- /.container-fluid -->

