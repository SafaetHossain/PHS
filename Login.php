
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
	                                <label class="form-check-label">
	                                <input name="remember" class="form-check-input"  type="checkbox" value="Remember Me">Remember Me
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