

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_ubah_password" enctype="multipart/form-data">
                
                 <?php foreach ($data->result() as $row) {
                   ?>

                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nama</label>
                    <div class="col-md-5">
                    <input type="text" name="nama" value="<?php echo $row->nama ?>" required>
                    <input type="hidden" name="id_admin" value="<?php echo $row->kode ?>" >
                    <input type="hidden" name="password_lama" value="<?php echo $row->password ?>" >
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Username</label>
                    <div class="col-md-5">
                    <input type="text" name="username" value="<?php echo $row->username ?>" required>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Password Lama</label>
                    <div class="col-md-5">
                    <input type="text" name="password_lm" value="" required>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Password Baru</label>
                    <div class="col-md-5">
                    <input type="text" name="password_baru" value="" >
                      </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Konfirmasi Password</label>
                    <div class="col-md-5">
                    <input type="text" name="password_konfirmasi" value="" >
                      </select>
                    </div>
                  </div>

              
          <div><br>
           
        <button type="submit" name="kirim" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Ubah Password
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/ci_admin" class="btn btn-primary btn-small">Tutup</a>
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

