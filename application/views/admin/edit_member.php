

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_edit_member" enctype="multipart/form-data">
                
                 <?php foreach ($data->result() as $row) {
                   ?>

                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nama Depan</label>
                    <div class="col-md-5">
                    <input type="text" name="nama_member" value="<?php echo $row->nama_member ?>"> 
            <input type="hidden" name="id_member" value="<?php echo $row->id_member ?>"> 
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nama Depan</label>
                    <div class="col-md-5">
                    <input type="text" name="nama_belakang" value="<?php echo $row->nama_belakang ?>"> 
                      </select>
                    </div>
                  </div>

                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Email</label>
                    <div class="col-md-5">
                    <input type="text" name="email_member" value="<?php echo $row->email_member ?>"> 
                      </select>
                    </div>
                  </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">No. Hp</label>
                    <div class="col-md-5">
                    <input type="text" name="no_hp" value="<?php echo $row->no_hp ?>"> 
                      </select>
                    </div>
                  </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Alamat</label>
                    <div class="col-md-5">
                    <textarea name="alamat_member"><?php echo $row->alamat_member?></textarea>
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Username</label>
                    <div class="col-md-5">
                    <input type="text" name="username" value="<?php echo $row->username ?>"> 
                      </select>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Password</label>
                    <div class="col-md-5">
                    <input type="text" name="password" value="<?php echo $row->password ?>"> 
                      </select>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Kode Member</label>
                    <div class="col-md-5">
                    <input type="text" name="kode_member" value="<?php echo $row->kode_member ?>"> 
                      </select>
                    </div>
                  </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Point</label>
                    <div class="col-md-5">
                    <input type="text" name="point" value="<?php echo $row->point ?>"> 
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

