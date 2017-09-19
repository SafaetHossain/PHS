<!DOCTYPE HTML>
<html>
	<head>
		<title>Prijkandi High School,Mirzapur,Raipura,Narsigndi</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="assets/css/style.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="css/Home_style.css">
	</head>
	<body>
		<?php
			include("shared/header.php");
			include("LoginAction.php");
		?>

		<div class="container">
	       
	        <div class="row">
	            <div class="col-md-6 col-md-offset-3" style="margin-top: 100px;">
	                <div class="login-panel panel panel-default">                  
	                    <div class="panel-heading">
	                        <h3 class="panel-title">Please Sign In</h3>
	                    </div>
	                    <div class="panel-body">
	                        <form role="form" action = "" method = "Post">
	                             
	                            <div class="form-group">
	                            	<div class="input-group">
			      						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	                                	<input class="form-control" placeholder="Enter Username..." name="username" type="text" required>
	                                </div>
	                            </div>
	                            <div class="form-group">
	                            	<div class="input-group">
			      						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	                                	<input class="form-control" placeholder="Enter Password..." name="password" type="password" required>
	                                </div>
	                                <div style="padding-left: 30px;	color: red;">
	                                	<label>
	                                		<?php echo $loginfailed; ?>
	                                	</label>
	                                </div>
	                            </div>
	                            <div class="checkbox">
	                                <label>
	                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
	                                </label>
	                            </div>
	                                <input type="submit" name="" value = "Login" class="btn btn-lg btn-success btn-block">
	                        </form>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>
</html>