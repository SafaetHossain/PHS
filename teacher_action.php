<?php 
	$nameError = $FnameError = $MnameError = $addressError = $phoneError = $status = "";
	$error = 0;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if (empty($_POST["teacherName"])) {
			$error = 1;
			$nameError = "Teacher name is required";
		}else{
        	$name = $_POST["teacherName"];
    	}

    	if(empty($_POST["teacherFatherName"])){
			$error = 1;
			$FnameError = "Teacher father's name is required";
		}else{
        	$fname = $_POST["teacherFatherName"];
    	}
    	if(empty($_POST["teacherMotherName"])){
			$error = 1;
			$FnameError = "Teacher  mother's name is required";
		}else{
    		$mname = $_POST["teacherMotherName"];	
    	}
        if(empty($_POST["teacherPhone"])){
			$error = 1;
			$phoneError = "Teacher phone is required";
		}else{
        	$phone = $_POST["teacherPhone"];
        }
        if(empty($_POST["teacherAddress"])){
        	$error = 1;
        	$addressError = "Address is required";
        }else{
        	$address = htmlspecialchars(addslashes(trim($_POST["teacherAddress"])));
        }
        
        $conn = mysqli_connect("localhost", "root", "", "phs");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

        $sql="Insert into Teacher (Name,FatherName,MotherName,Contact,Address,) Values ('".$name . "','" . $fname ."','" . $mname ."','". $phone."','".$address."','".$class."','". $section."','".$roll."','".$year."')";
        if (mysqli_multi_query($conn, $sql)) {
			    $status =  "Record added";
		}else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
?>