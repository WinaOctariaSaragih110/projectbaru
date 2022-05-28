<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Account</li>
			</ol>
		</div>
	</div>
<div class="account">
	<div class="container">
		<h2>Account</h2>
		<div class="account_grid">
			   <div class="col-md-6 login-right">
				<form action="index.php/login_member" method="post">

					<span>Kode Member</span>
					<input type="text" name="kode_member"> 
				
					<span>Password</span>
					<input type="password" name="password"> 
					<div class="word-in">
				  		<a class="forgot" href="#">Forgot Your Password? </a>
				 		 <input type="submit" value="Login">
				  	</div>
			    </form>
			     <?php 
            if($this->input->get('gagal')==1){
        ?>
       
   
        
        Username atau Password salah !!
        
        <?php
            }
        ?>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NEW MEMBER</h4>
				 <p>
				 	Silahkan menjadi member untuk harga promo dan termurah dari rainkidstore.com
				 	dengan menjadi member anda bisa menikmati filture point produk yang anda bisa tukarkan
				 	hanya khusus member ayo daftar sekarng
				 </p>
				 <a class="acount-btn" href="index.php/web/register">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>
