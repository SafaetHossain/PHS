	<?php 
		include("shared/User_Header.php");
	?>
		<div class="container" style="padding-top: 50px;">
			<div class="row">
	            <div class="col-md-6 col-md-offset-3">
	                <div class="login-panel panel panel-primary">                  
	                    <div class="panel-heading">
	                        <h3 class="panel-title" style="text-align: center;"></h3>
	                    </div>
	                    <div class="panel-body">
	                          	<form class="form-horizontal" action = "" method = "Post">
	                          		<!--
	                          		<div class="form-group" style="padding-left: 150px;">
	                          			<img src="<?php echo $userData[0]->ImagePath; ?>" class="img-circle" alt="Cinque Terre" width="250" height="180">
	                          		</div>
	                          	-->
	                             	<div class="form-group">
		                                <label class="control-label col-sm-2" for="title">Title</label>
		                                <div class="col-sm-10">
		                                  	<input type="text" class="form-control" name = "photoTitle" id="title" placeholder="Enter Photo Title">
		                                  	<span id = "titleError" style="color:red"></span> <!--Title Error Show-->
		                                </div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="details">Details</label>
	                              		<div class="col-sm-10">
	                              			<textarea  type="textarea" name="photodetails" id="details" placeholder="Enter Photo Details"></textarea>
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="image">Image</label>
	                              		<div class="col-sm-10">
	                              			<input type="file" name="Photo" id="image">
	                              		</div>
	                              	</div>
	                            	<div class="form-group">
		                                <div class="col-sm-offset-2 col-sm-10">
		                                  <button type="submit" onclick="myFunction()" class="btn btn-primary">Add</button>
		                                </div>
	                            	</div>
	                          </form>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</body>
</html>