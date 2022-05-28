<form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/ci_admin/proses_tambah_produk" enctype="multipart/form-data" ><br><br>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Kode Produk</label>
        <div class="col-sm-5">
        <input type='text' name='kode_produk' value="<?php echo $kodeunik ?>" style="color:red" class='form-control' required='required' disabled="disable">
              <input type="hidden" name="kode_produk" value="<?php echo $kodeunik ?>">
        </div>
    </div>
     <div class="form-group">
                    <label class="control-label col-sm-2" for="fieldtwo">Kategori Produk</label>
                    <div class="col-sm-5">
                         <select name="kategori_produk" class="form-control">
            <?php 
                echo "<option value=not_kategori>---- Pilih Kategori ----</option>";
                foreach ($kategori_produk->result() as $g)
                {
                echo " <option value=$g->nama_kategori>$g->nama_kategori </option>";
                }
                ?>
        </select>
                    </div>
                  </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Nama Produk</label>
        <div class="col-sm-5">
            <input required type="text" name="nama_produk" class="form-control" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Harga Member</label>
        <div class="col-sm-5">
            <input required type="number" name="harga_member"  class="form-control" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Harga NonMember</label>
        <div class="col-sm-5">
            <input required type="number" name="harga_nonmember"  class="form-control" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Berat</label>
        <div class="col-sm-5">
            <input required type="text" name="berat"  class="form-control" value="">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Aktif</label>
        <div class="col-sm-5">
            <select name="aktif" class="form-control">
                <option value="1">Aktif</option>
                <option value="0">NonAktif</option>
            </select>        
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo">Jenis</label>
        <div class="col-sm-5">
            <select name="jenis" class="form-control">
                <option value="terbaru">Terbaru</option>
                <option value="populer">Populer</option>
                <option value="promosi">Promosi</option>
            </select>        
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fieldtwo" class="form-control">Deskripsi</label>
        <div class="col-sm-10">
            <textarea name="keterangan" id="news"></textarea>    
            <script type="text/javascript">
                                  var editor = CKEDITOR.replace('news');  
                                </script>    
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
        <a href="<?php echo base_url();?>index.php/ci_admin/produk" class="btn btn-primary btn-small">Tutup</a>
    </div>
</form>

