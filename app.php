<?php

$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");
  if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }

if($_SERVER['REQUEST_METHOD']=='POST')
{
  
  date_default_timezone_set('Asia/Kolkata');
$reqtype=$_POST["reqtype"];
$notify=$_POST["notify"];
if($notify>-1)
{
	$date=date("Y-m-d H:i:s");
	$sql="update tbl_info set flag=1,flag_time='$date' WHERE macid='$notify'";
   mysqli_query($con,$sql);
   if(date("H")==8)
		 {
			 mysqli_query($con,"update tbl_stat set t0=t0+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==9)
		 {
			 mysqli_query($con,"update tbl_stat set t1=t1+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==10)
		 {
			 mysqli_query($con,"update tbl_stat set t2=t2+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==11)
		 {
			 mysqli_query($con,"update tbl_stat set t3=t3+1 where macid='$mac'");
		 }
		 if(date("H")==12)
		 {
			 mysqli_query($con,"update tbl_stat set t4=t4+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==13)
		 {
			 mysqli_query($con,"update tbl_stat set t5=t5+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==14)
		 {
			 mysqli_query($con,"update tbl_stat set t6=t6+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==15)
		 {
			 mysqli_query($con,"update tbl_stat set t7=t7+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==16)
		 {
			 mysqli_query($con,"update tbl_stat set t8=t8+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==17)
		 {
			 mysqli_query($con,"update tbl_stat set t9=t9+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==18)
		 {
			 mysqli_query($con,"update tbl_stat set t10=t10+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==19)
		 {
			 mysqli_query($con,"update tbl_stat set t11=t11+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==20||date("H")==21||date("H")==22||date("H")==23)
		 {
			 mysqli_query($con,"update tbl_stat set t12=t12+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==0||date("H")==1||date("H")==2||date("H")==3)
		 {
			 mysqli_query($con,"update tbl_stat set t13=t13+1 where macid='$mac'");
		 }
		 else
		 if(date("H")==4||date("H")==5||date("H")==6||date("H")==7)
		 {
			 mysqli_query($con,"update tbl_stat set t14=t14+1 where macid='$mac'");
		 }
	
		echo 1;
	
}
else
{
 $mac = $_POST["id"];
 $lvl = $_POST["value"];
 if($reqtype=="appsend")
 {
	 $sel=mysqli_query($con,"select * from tbl_info where macid='$mac'");
	 $r=mysqli_fetch_array($sel);
	 if($r['flag']!=1)
	 {
		 $date=date("Y-m-d H:i:s");
   $sql = "update tbl_info set flag=1,flag_time='$date' WHERE macid='$mac'";
   mysqli_query($con,$sql);
	 }
 }
else if($mac == '' || $lvl == '')
 {
    $sql = "SELECT * FROM tbl_info where disen=0";
	  $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
		{
			$output[]=$row;
		}
    print(json_encode($output)); 
 }
}
}
else
{
  echo "error";
}
mysqli_close($con);
?>
