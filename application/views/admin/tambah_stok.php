
<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: '<?php echo base_url() ?>index.php/ci_admin/fetch_data',
     data: {
       get_val:val
     },
     success: function (response) {
       document.getElementById("new_select").innerHTML=response; 
     }
   });
}

</script>

 
            <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
               <form method="post" action="<?php echo base_url(); ?>index.php/ci_admin/input_stok" enctype="multipart/form-data">
                
                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Kategori Produk</label>
                    <div class="col-sm-5">
                         <select onchange="fetch_select(this.value);" class="form-control">
           <option>
              Pilih Kategori
           </option>
           
           <?php
             $host = 'localhost';
             $user = 'rainkids_root';
             $pass = 'anon00';
           
             mysql_connect($host, $user, $pass);

             mysql_select_db('rainkids_data');
           
             $select=mysql_query("SELECT * from tbl_kategori ");
             while($row=mysql_fetch_array($select))
             {
              ?><option value="<?php echo $row['nama_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>";

              <?php
             }
           ?>

         </select>
</div>
</div>
                 
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Nama Produk</label>
                    <div class="col-md-5">
                     <select id="new_select" name="kode_produk" class="form-control">
                      </select>
                    </div>
                  </div>



                  <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Ukuran</label>
                    <div class="col-md-5">
                     <select name="id_ukuran" class="form-control">
                     <?php $sql = "select * from tbl_ukuran "; $rs=$this->db->query($sql); foreach ($rs->result() as $row) { ?>
                       <option value="<?php echo $row->id_ukuran; ?>"><?php echo $row->ukuran; ?></option>
                      <?php 
                     } ?>
                     </select>
                    </div>
                  </div>
                  
                   <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Jumlah Stok</label>
                    <div class="col-md-5">
                      <input type="number" class="form-control"  name="stok" placeholder="Jumlah Stok" required>
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
        <a href="<?php echo base_url();?>index.php/laporan_pensiun" class="btn btn-primary btn-small">Tutup</a>
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

