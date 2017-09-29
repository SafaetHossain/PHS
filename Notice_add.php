	<?php 
		include("shared/User_Header.php");
	?>
		<h1 style="padding-left: 130px;padding-top: 10px;">Notice</h1>
		<div class="container" style="padding-top: 30px;padding-left: 40px;">
			<ul class="nav nav-tabs">
				<li class="active">
					<a data-toggle="tab" href="#add">Add</a>
				</li>
				<li>
					<a data-toggle="tab" href="#show">Show</a>
				</li>
			</ul>
			<div class="tab-content">
				<div id="add" class="tab-pane fade in active" style="padding-top: 20px;">
					<form class="form-horizontal" action = "" method = "Post">
		                <div class="form-group">
			                <label class="control-label col-sm-2" for="title">Title</label>
			                <div class="col-sm-3">
			                    <input type="text" class="form-control" name = "noticeTitle" id="title" placeholder="Enter Title" onkeyup = "" required>
			                    <span id = "titleError" style="color:red"></span> <!--Title Error Show-->
			                </div>
		                </div>
		                <div class="form-group">
			                <label class="control-label col-sm-2" for="details">Details</label>
			                <div class="col-sm-3">
			                    <input type="text" class="form-control" name = "noticeDetails" id="details" placeholder="Enter Details" onkeyup = "" required>
			                    <span id = "detailsError" style="color:red"></span> <!--Title Error Show-->
			            </div>
		                <div class="form-group">
		                    <label class="control-label col-sm-2" for="image">Image</label>
		                    <div class="col-sm-3">
		                    	<input type="file" class="form-control-file" name="noticeImage" id="image"><span id="imageError" style="color: red"></span><!-- Image Error Show -->
		                    </div>
		                </div>
		                </div>
		                <div class="form-group">
			                <div class="col-sm-offset-2 col-sm-10">
			                    <button type="submit" class="btn btn-primary">Add</button>
			            	</div>
		                </div>
		        	</form>
				</div>
				<div id="show" class="tab-pane fade" style="padding-top: 20px;">
					<span>Search for a Title in the input field:</span>
					<input oninput="w3.filterHTML('#titleFilter', '.item', this.value)" placeholder="Search for Title...">
					<div class="container">
						    <div class="panel panel-info">
						      	<div class="panel-heading">All Notice</div>
						      	<div class="panel-body">
						      		<table class="table table-bordered"  id="titleFilter">
									    <thead>
									      <tr>
									      	<th>Title</th>
									        <th>Details</th>
									        <th>Image</th>
									        <th></th>
									      </tr>
									    </thead>
									    <tbody>
									      <tr class="item">
									        <td>abc</td>
									        <td>def</td>
									        <td></td>
									        <td>
									        	<input type="button" name="view" value="View" class="btn btn-success">
									        </td>
									      </tr>
									      <tr class="item">
									        <td>asdd</td>
									        <td>adgdgd</td>
									        <td></td>
									        <td>
									        	<input type="button" name="view" value="View" class="btn btn-success">
									        </td>
									      </tr>
									      <tr class="item">
									        <td>a</td>
									        <td>b</td>
									        <td></td>
									        <td>
									        	<input type="button" name="view" value="View" class="btn btn-success">
									        </td>
									      </tr>
									    </tbody>
						      		</table>
						      	</div>
						    </div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>