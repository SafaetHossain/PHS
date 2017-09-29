<?php 
	$nameError = $FnameError = $MnameError = $addressError = $phoneError = $classError = $sectionError = $rollError = $yearError = $status = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!preg_match("/^[a-zA-Z ]*$/", $_POST["studentName"])){
		    $error = 1;
		    $nameError = "Only letters and space are allowed";
		}else{
			$error = 0;
        	$name = $_POST["studentName"];
    	}

    	if(!preg_match("/^[a-zA-Z ]*$/", $_POST["studentFatherName"])){
		    $error = 1;
		    $FnameError = "Only letters and space are allowed";
		}else{
			$error = 0;
        	$fname = $_POST["studentFatherName"];
    	}
        $mname = $_POST["studentMotherName"];
        $phone = $_POST["studentPhone"];
        $address = $_POST["studentAddress"];
        $class = $_POST["studentClass"];
        $section = $_POST["studentSection"];
        $roll = $_POST["studentRoll"];
        $year = $_POST["studentYear"];

        $conn = mysqli_connect("localhost", "root", "", "phs");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

        $sql="Insert into student (Name,FatherName,MotherName,Contact,Address,Class,Section,Roll,Year) Values ('".$name . "','" . $fname ."','" . $mname ."','". $phone."','".$address."','".$class."','". $section."','".$roll."','".$year."')";
        if (mysqli_multi_query($conn, $sql)) {
			    $status =  "Record added";
		}else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);

?>