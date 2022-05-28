
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_input_kota" enctype="multipart/form-data">
                
                  
                  
                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Provinsi</label>
                    <div class="col-md-5">
                     <select name="id_provinsi" class="form-control">
                     <?php $sql = "select * from tbl_provinsi "; $rs=$this->db->query($sql); foreach ($rs->result() as $row) { ?>
                       <option value="<?php echo $row->id_provinsi; ?>"><?php echo $row->provinsi; ?></option>
                      <?php 
                     } ?>
                     </select>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Kota</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control"  name="kota" placeholder="Kota" required>
                    </div>
                  </div>
              <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Ongkos Kirim</label>
                    <div class="col-md-5">
                      <input type="number" class="form-control"  name="ongkos" placeholder="Ongkos Kirim" required>
                    </div>
                  </div>
              
          <div><br>
           
        <button type="submit" name="kirim" class="btn btn-primary btn-small">
            <span class="glyphicon glyphicon-download-alt"></span>Update
        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="<?php echo base_url();?>index.php/ci_admin/ongkos_kirim" class="btn btn-primary btn-small">Tutup</a>
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

