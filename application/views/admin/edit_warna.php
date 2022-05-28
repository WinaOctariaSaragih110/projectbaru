

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_edit_warna" enctype="multipart/form-data">
                
                 <?php foreach ($data->result() as $row) {
                   ?>

                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Warna</label>
                    <div class="col-md-5">
                    <input type="text" name="warna" value="<?php echo $row->warna ?>" required>
                    <input type="hidden" name="id_warna" value="<?php echo $row->id_warna ?>" required>
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
        <a href="<?php echo base_url();?>index.php/ci_admin/warna" class="btn btn-primary btn-small">Tutup</a>
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

