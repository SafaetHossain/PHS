<?php 
	$nameError = $FnameError = $MnameError = $addressError = $phoneError = $classError = $sectionError = $rollError = $yearError = $status = $name = $fname = $mname = $phone = $roll = $year = "";
	$error = 0;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		/*if(!preg_match("/^[a-zA-Z ]*$/", $_POST["studentName"])){
		    $error = 1;
		    $nameError = "Only letters and space are allowed";
		}*/if (empty($_POST["studentName"])) {
			$error = 1;
			$nameError = "Student name is required";
		}else{
        	$name = $_POST["studentName"];
    	}

    	/*if(!preg_match("/^[a-zA-Z ]*$/", $_POST["studentFatherName"])){
		    $error = 1;
		    $FnameError = "Only letters and space are allowed";
		}*/if(empty($_POST["studentFatherName"])){
			$error = 1;
			$FnameError = "Student  father's name is required";
		}else{
        	$fname = $_POST["studentFatherName"];
    	}
    	/*if(!preg_match("/^[a-zA-Z ]*$/", $_POST["studentMotherName"])){
    		$error = 1;
    		$MnameError = "Only letters and space are allowed";
    	}*/if(empty($_POST["studentMotherName"])){
			$error = 1;
			$FnameError = "Student  mother's name is required";
		}else{
    		$mname = $_POST["studentMotherName"];	
    	}
        /*if(!preg_match("/^[0-9]*$/", $_POST["studentPhone"])){
        	$error = 1;
        	$phoneError = "Only number are allowed";
        }*/if(empty($_POST["studentPhone"])){
			$error = 1;
			$phoneError = "Student  phone is required";
		}else{
        	$phone = $_POST["studentPhone"];
        }
        if(empty($_POST["studentAddress"])){
        	$error = 1;
        	$addressError = "Address is required";
        }else{
        	$address = htmlspecialchars(addslashes(trim($_POST["studentAddress"])));
        }
        if(empty($_POST["studentClass"])){
        	$error = 1;
        	$classError = "Class is required";
        }else{
        	$class = $_POST["studentClass"];
        }
        if(empty($_POST["studentSection"])){
        	$error = 1;
        	$sectionError = "Section is required";
        }else{
        	$section = $_POST["studentSection"];
        }
        if(empty($_POST["studentRoll"])){
        	$error = 1;
        	$rollError = "Roll is required";
        }/*elseif(!preg_match("/^[0-9]*$/", $_POST["studentRoll"])){
        	$error = 1;
        	$rollError = "Only number are allowed";
        }*/else{
        	$roll = $_POST["studentRoll"];
        }
        if(empty($_POST["studentYear"])){
        	$error = 1;
        	$yearError = "Year is required";
        }/*elseif(!preg_match("/^[0-9]*$/", $_POST["studentYear"])){
        	$error = 1;
        	$yearError = "Only number are allowed";
        }*/else{
        	$year = $_POST["studentYear"];
        }

        $conn = mysqli_connect("localhost", "root", "", "phs");
		if (!$conn) {
			die("Connection failed " . mysqli_connect_error());
		}
        mysqli_set_charset($conn,"utf8");

        $sql="Insert into student (Name,FatherName,MotherName,Contact,Address,Class,Section,Roll,Year) Values ('".$name . "','" . $fname ."','" . $mname ."','". $phone."','".$address."','".$class."','". $section."','".$roll."','".$year."')";
        if (mysqli_multi_query($conn, $sql)) {
			    $status =  "Record added";
                //header("Location: Student_add.php");
		}else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
    }
?>