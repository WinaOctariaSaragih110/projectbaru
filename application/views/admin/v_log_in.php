<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>Log In</title> 
 
<link href="http://localhost/tika/css/bootstrap.min.css" rel="stylesheet"> 
<link href="http://localhost/tika/css/datepicker3.css" rel="stylesheet"> 
<link href="http://localhost/tika/css/styles.css" rel="stylesheet"> 
</head> 
 
<body class="body"><br><br><br><br> 
	<center> 
	<div class="row"> 
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4"> 
			<div class="login-panel panel panel-default"><br> 
				<center><img src="http://localhost/tika/l.png" class="img-responsive" width="30" height="30"><div class="panel-heading">Log In Java Valley</div></center> 
				<div class="panel-body"> 
					<form method="post" action="http://localhost/tika/index.php/login/getlogin" onSubmit="return cekform();" role="form"> 
						<fieldset> 
							<div style="margin-bottom: 25px" class="input-group"> 
    							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
								<input required class="form-control" placeholder="Username" name="username" id="username" type="text"> 
                            </div> 
							<div style="margin-bottom: 25px" class="input-group"> 
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
								<input required class="form-control" placeholder="Password" name="password" id="password" type="password"> 
							</div> 
														<br> 
							<center> 
								<button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in"></span>&nbsp;Log In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> 
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button> 
							</center><br> 
							<base href="http://localhost/tika/"/> 
							2016 © <a href="http://www.jambisoft.com/" target="blank"><img src="it.png" width="250px" height="25px"></a>.
						</fieldset> 
					</form> 
				</div> 
			</div> 
		</div><!-- /.col--> 
	</div><!-- /.row -->	
	</center> 
		
 
	<script src="http://localhost/tika/js/jquery-1.11.1.min.js"></script> 
	<script src="http://localhost/tika/js/bootstrap.min.js"></script> 
	<script src="http://localhost/tika/js/chart.min.js"></script> 
	<script src="http://localhost/tika/js/chart-data.js"></script> 
	<script src="http://localhost/tika/js/easypiechart.js"></script> 
	<script src="http://localhost/tika/js/easypiechart-data.js"></script> 
	<script src="http://localhost/tika/js/bootstrap-datepicker.js"></script> 
</body> 
 
</html> 