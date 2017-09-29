	<?php 
		include("shared/User_Header.php");
	?>

		<div class="container" style="padding-top: 30px;">
	       <div class="row">
	            <div class="col-md-6 col-md-offset-3">
	                <div class="login-panel panel panel-primary">                  
	                    <div class="panel-heading">
	                        <h3 class="panel-title" style="text-align: center;">Add Techer information</h3>
	                    </div>
	                    <div class="panel-body">
	                          	<form class="form-horizontal" action = "" method = "Post">

	                             	<div class="form-group">
		                                <label class="control-label col-sm-2" for="Name">Name</label>
		                                <div class="col-sm-10">
		                                  	<input type="text" class="form-control" name="teacherName" id="name" placeholder="Enter Name" onkeyup = "" required>
		                                  	<span id = "nameError" style="color:red"></span> <!--Name Error Show-->
		                                </div>
	                              	</div>

	                              	<div class="form-group">
	                                	<label class="control-label col-sm-2" for="fname">Father's Name</label>
		                                <div class="col-sm-10">
		                                  <input type="text" class="form-control" name="teacherFatherName" id="fname" placeholder="Enter Father's Name" onkeyup = "" required>
		                                  <span id = "fNameError" style="color:red"></span> <!--Father's Name Error Show-->
		                                </div>
	                              	</div>
	                              	<div class="form-group">
	                                	<label class="control-label col-sm-2" for="mname">Mother's Name</label>
		                                <div class="col-sm-10">
		                                  <input type="text" class="form-control" name="teacherMotherName" id="mname" placeholder="Enter Mother's Name" onkeyup = "" required>
		                                  <span id = "mNameError" style="color:red"></span> <!--Mother's Name Error Show-->
		                                </div>
	                              	</div>
	                              	<div class="form-group">
		                                <label class="control-label col-sm-2" for="pwd">Contact</label>
		                                <div class="col-sm-10">
		                                  <input type="text" class="form-control" name="teacherPhone" id="pwd" placeholder="Enter Contact Number" onkeyup = "" required>
		                                  <span id = "phoneError" style="color:red"></span> <!--phone Error Show-->
		                                </div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="address">Address</label>
	                              		<div class="col-sm-10">
	                              			<input type="text" class="form-control" name="teacherAddress" id="address" placeholder="Enter Address" required>
	                              			<span id = "addressError" style="color: red"></span><!--Address Error Show-->
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="subject">Subject</label>
	                              		<div class="col-sm-10">
	                              			<input type="text" class="form-control" name="teacherSubject" id="subject" placeholder="Enter Subject" required>
	                              			<span id = "subjectError" style="color: red"></span><!--Subject Error Show-->
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="education">Education</label>
	                              		<div class="col-sm-10">
	                              			<input type="text" class="form-control" name="teacherEducation" id="education" placeholder="Enter Education" required>
	                              			<span id = "educationError" style="color: red"></span><!--Education Error Show-->
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="position">Position</label>
	                              		<div class="col-sm-10">
	                              			<input type="text" class="form-control" name="teacherPosition" id="position" placeholder="Enter Position" required>
	                              			<span id = "positionError" style="color: red"></span><!--Position Error Show-->
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="position">Salary</label>
	                              		<div class="col-sm-10">
	                              			<input type="text" class="form-control" name="teacherSalary" id="position" placeholder="Enter Salary" required>
	                              			<span id = "salaryError" style="color: red"></span><!--Salary Error Show-->
	                              		</div>
	                              	</div>
	                              	<div class="form-group">
	                              		<label class="control-label col-sm-2" for="image">Image</label>
	                              		<div class="col-sm-10">
	                              			<input type="file" class="form-control-file" name="teacherImage" id="image" required><span id="imageError" style="color: red"></span><!-- Image Error Show -->
	                              		</div>
	                              	</div>
	                            	<div class="form-group">
		                                <div class="col-sm-offset-2 col-sm-10">
		                                  <button type="submit" class="btn btn-primary">Add</button>
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