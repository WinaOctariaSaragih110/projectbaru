<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Pendaftaran</li>
			</ol>
		</div>
	</div>
<div class="container">
	<div class="register">
		<h2>Data Account Anda</h2>

				<div class="register-but">
		  	  <form action="index.php/web/edit_member" method="post">
				 <div class="col-md-6  register-top-grid">
					<?php 
						$kode_member=$this->session->userdata('kode_member');
						$sql = "SELECT * FROM tbl_member where kode_member='$kode_member'";
						$datas=$this->db->query($sql);
						foreach ($datas->result() as $row) {
							?>

					<div class="mation">
						<span>Nama Depan</span>
						<input type="text" name="nama_member" value="<?php echo $row->nama_member ?>"> 
						<input type="hidden" name="kode_member" value="<?php echo $kode_member ?>"> 
						<span>Nama Belakang</span>
						<input type="text" name="nama_belakang" value="<?php echo $row->nama_belakang ?>"> 
					
						<span>Email</span>
						<input type="text" name="email_member" value="<?php echo $row->email_member ?>"> 

					 	<span>No Hp</span>
						<input type="text" name="no_hp" value="<?php echo $row->no_hp ?>"> 
					 
						 <span>Alamat</span>
						<textarea style="width: 544px; height: 97px;" name="alamat_member"><?php echo $row->alamat_member?></textarea>
					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
								<span>Username</span>
								<input type="text" name="username" value="<?php echo $row->username ?>">
								<span>Password</span>
								<input type="text" name="password" value="<?php echo $row->password ?>">
							</div>
								<br/>
								<h3>
									Kode Member : <?php echo $row->kode_member; ?>
								</h3>
					 </div>
					 <div class="clearfix"> </div>
				
				
					   <input type="submit" value="UPDATE">
					   <div class="clearfix"> </div>
				   </form>
				</div>

							<?php
						}
					 ?>
		   </div>
</div>