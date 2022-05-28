<form method="post" action="<?php echo base_url() ?>index.php/ci_admin/edit_set">
	<?php foreach ($data->result() as $key => $value) {
		?>
		<br/>
		<br/>
		<br/>
		 <div class="form-group">
        
            <input required type="text" name="info"  class="form-control" value="<?php echo $value->info; ?>">
       
    </div>
    <div class="form-group">
        
<textarea name="setingan" id="news"><?php echo $value->set ?></textarea>
									<input type="hidden" name="id_set" value="<?php echo $value->id_set ;?>">
									<button type="submit" class="btn-success">EDIT</button>
								</form>
		<?php
	} ?>								

									<script type="text/javascript">
					              var editor = CKEDITOR.replace('news');  
					            </script>
					             
    </div>
