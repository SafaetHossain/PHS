	<?php 
		$info ="";
		include("shared/User_Header.php");
		function getJSONFromDB($sql){
            $conn = mysqli_connect("localhost", "root", "","phs"); 
            $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $arr=array();
            while($row = mysqli_fetch_assoc($result)) {
                $arr[]=$row;
            }
            return json_encode($arr);
        }

		$jsonString = getJSONFromDB("Select * from User where Username='".$_SESSION["Username"]."'");

		$userData = json_decode($jsonString);
	?>
		<div class="container" style="padding-top: 50px;">
			<div class="row">
	            <div class="col-md-6 col-md-offset-3">
	                <div class="login-panel panel panel-primary">                  
	                    <div class="panel-heading">
	                        <h3 class="panel-title" style="text-align: center;">MY PROFILE</h3>
	                    </div>
	                    <div class="panel-body">
	                          	<form class="form-horizontal" action = "" method = "Post">
	                          		<div class="form-group" style="padding-left: 150px;">
	                          			<img src="<?php echo $userData[0]->ImagePath; ?>" class="img-circle" alt="Cinque Terre" width="250" height="180">
	                          		</div>
	                             	<div class="form-group">
		                                <label class="control-label col-sm-2" for="Name">Name</label>
		                                <div class="col-sm-10">
		                                  	<input type="text" class="form-control" name = "staffName" id="name" value="<?php echo $userData[0]->Username; ?>" readonly>
		                                  	<span id = "nameError" style="color:red"></span> <!--Name Error Show-->
		                                </div>
	                              	</div>

	                              	<div class="form-group">
	                                	<label class="control-label col-sm-2" for="pass">Password</label>
		                                <div class="col-sm-10">
		                                  <input type="Password" class="form-control" name = "staffFatherName" id="pass" id="passCn" value="<?php echo $userData[0]->Password ?>">
		                                  <span id = "fNameError" style="color:red"></span> <!--Father's Name Error Show-->
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
	<script type="text/javascript">
		function myFunction() {
			if(document.getElementById("passCn").readOnly = true;){
				$('#passCn').attr('readonly', false);
			}else{
				$('#passCn').attr('readonly', true);
			}
		}
	</script>
</html>