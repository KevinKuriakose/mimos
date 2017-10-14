<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");
    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
  <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username =$_POST["username"];
  $password = $_POST["password"];
	}

$sql1="SELECT * FROM tbl_login WHERE password='$password' AND username='$username'";
        $result1=mysqli_query($con, $sql1);
       $r=mysqli_fetch_array($result1);

  if($r["username"]=="user")
   {
   header("location:user/dashboard.php");$_SESSION["uid"]=$username;
  }
 
 else if($r["username"]=="admin")
 {
   header("location:admin/dashboard.php");$_SESSION["uid"]=$username;
 }
else
 header("location:home.html");

?>
</body>
</html>
