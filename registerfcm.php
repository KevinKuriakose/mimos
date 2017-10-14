<?php 

$conn = mysqli_connect("mysql.hostinger.in", "u890440242_fcm", "mimosapp", "u890440242_fcm");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }

if($_SERVER['REQUEST_METHOD']=='POST')
{
	if (isset($_POST["Token"])) {
		
		   $token=$_POST["Token"];
		   //$conn = mysqli_connect("localhost","root","","FCM") or die("Error connecting");
		   $q="INSERT INTO users (Token) VALUES ( '$token') "
              ." ON DUPLICATE KEY UPDATE Token = '$token';";
              mysqli_query($conn,$q);
  /*  $q="insert into users(Token) VALUES('HELLO')";
      mysqli_query($conn,$q) or die(mysqli_error($conn));
      mysqli_close($conn);*/
	}
  else
  {
 $q="insert into users(Token) VALUES('HELLO')";
 mysqli_query($conn,$q);
   }
}
 ?>