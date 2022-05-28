

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/input_satuan" enctype="multipart/form-data">
                
                 
                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nama Kategori</label>
                    <div class="col-md-5">
                     <select id="new_select" name="kode_produk" class="form-control">
                      </select>
                    </div>
                  </div>

                <div class="form-group">
                        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Deskripsi</label>
                        <div class="col-sm-5">
                            <input type="file" id="input-file-now" class="dropify" name="userfile" required />
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
        </div>
        </form>
               
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
     
    </div>
    <!-- /.container-fluid -->

