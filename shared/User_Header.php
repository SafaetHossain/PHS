<?php session_start();
	if (!isset($_SESSION["Username"])) {
    		header("Location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prijkandi High School,Mirzapur,Raipura,Narsigndi</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<link rel="stylesheet" href="assets/css/style.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" type="text/css" href="css/Home_style.css">
	  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  	<script src="https://www.w3schools.com/lib/w3.js"></script>
	</head>
	<body>
		<nav class="rounded-0" class="navbar navbar-light" style="background-color: #F1F1F1;">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      	<a class="navbar-brand" href="User_Home.php">Prijkandi High School</a>
		    </div>
		    <ul class="nav navbar-nav">
		      	<li><a href="User_Home.php">Home</a></li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="Student_add.php">Add</a></li>
			          <li><a href="#">Show</a></li>
			        </ul>
		      	</li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teacher<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="Teacher_add.php">Add</a></li>
			          <li><a href="#">Show</a></li>
			        </ul>
		      	</li>
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Staff<span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="Staff_add.php">Add</a></li>
			          <li><a href="#">Show</a></li>
			        </ul>
		      	</li>
			    <li><a href="Result_add.php">Result</a></li>
			    <li><a href="Notice_add.php">Notice</a></li>
			    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Photo<span class="caret"></span></a>
			    	<ul class="dropdown-menu">
			    		<li><a href="Photo_add.php">Add</a></li>
			          <li><a href="#">Show</a></li>
			    	</ul>
		      	</li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION["Username"]; ?><span class="caret"></span></a>
		        	<ul class="dropdown-menu">
		          	<li><a href="User_Profile.php">Profile</a></li>
		          	<li><a href="#">Change Password</a></li>
		        	</ul>
		      	</li>
		      	<li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
		    </ul>
		  </div>
		</nav>