<!DOCTYPE HTML>
<html>
	<?php
		session_start();
	?>
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
		<h1>
			<?php
				echo $_SESSION["Username"];
			?>
		</h1>
	</body>
</html>