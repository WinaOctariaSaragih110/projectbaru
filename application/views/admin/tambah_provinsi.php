

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/proses_input_provinsi" enctype="multipart/form-data">
                
                 
                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Provinsi</label>
                    <div class="col-md-5">
                    <input type="text" name="provinsi" required>
                      </select>
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
               


               <table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                <thead>
                <tr>
                    <th  data-align="center" data-sortable="true">No</th>
                <th  data-align="left" data-sortable="true">Provinsi</th>
              
                <th data-align="center">Aksi</th>
                </tr>
                </thead>
                <tbody>
              <tr>
              <?php 
              $no=1;
              foreach ($data->result() as $row) {
              ?>
              <td><?php echo $no++ ; ?></td>
              <td><?php echo $row->provinsi ; ?></td>
             
              <td>
            
              <a href="<?php  echo base_url() ?>index.php/ci_admin/hapus_provinsi/<?php echo $row->id_provinsi ?>" >
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
          </div>
        </div>
        
      </div>
     
    </div>
    <!-- /.container-fluid -->

