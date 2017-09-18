<?php session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$Username=$_POST["username"];
		$password=$_POST["password"];

	function getJSONFromDB($sql){
		$conn = mysqli_connect("localhost", "root", "","phs");
		$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
		$arr=array();
		while($row = mysqli_fetch_assoc($result)) {
			$arr[]=$row;
		}
		return json_encode($arr);
	}

	$sql="select password from User where username = '".$Username."'";

	$jsonData= getJSONFromDB($sql);
	$json=json_decode($jsonData);

	if($json[0]->password == $password){
		header("Location: ");
	}
	else{
		//$_SESSION["error"] == "yes";
		header("Location: Login.php"); 
	}
}
?>