<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Tentang Member</li>
			</ol>
		</div>
	</div>
<div class="contact">
			<div class="container">
				<h3>Tentang Member</h3>
				
					<?php foreach ($data->result() as $row) {
							echo $row->set;
					} ?>

					<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>