<?php session_start();
    $loginfailed = $username = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];

        function getJSONFromDB($sql){

            $conn = mysqli_connect("localhost", "root", "","phs"); 
            $result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
            $arr=array();
            while($row = mysqli_fetch_assoc($result)) {
                $arr[]=$row;
            }
            return json_encode($arr);
        }

        $sql="select Username,Password from User where Username = '".$username."'";
        $jsonData= getJSONFromDB($sql);
        $json=json_decode($jsonData);

        if($jsonData=="[]"){
            $loginfailed = "*Email not found"; 
            //echo "not found";  
        }else{
                if($json[0]->Password == $password){
                $_SESSION["Username"] = $username;
                header("Location: User_Home.php");
                }
                else{
                    $loginfailed = "*Username and password are not match"; 
                }              
        }
    }
?>