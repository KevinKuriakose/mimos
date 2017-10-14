<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
   
if($_SERVER['REQUEST_METHOD']=='POST')
{
  date_default_timezone_set('Asia/Kolkata');
  
 $mac = $_POST["id"];
 $lvl = $_POST["value"];
 if($mac == '' || $lvl == '')
 {
    echo "Connection not Established" ;
 }
 else
 {
   $sql = "SELECT * FROM tbl_info WHERE macid='$mac'";
	 
   
   if($row = mysqli_fetch_array(mysqli_query($con,$sql)))
   {
		 $dbdate=strtotime($row['notify_time']);
		 
$curdate=strtotime(date("Y-m-d H:i:s"));
$dif=$curdate-$dbdate;

		 if($dif>165 && $row['notify']==1)
			 mysqli_query($con,"update tbl_info set notify=0 where macid='$mac'");
		 
		 $tot=$row["maxlevel"];
    $cur=$tot-$lvl;
    $per=($cur/$tot)*100;
	if($per<36 && $row['notify']!=1)
	{
			include('way2sms-api.php');
   sendWay2SMS ( '7034057473' , 'happy' , '8111875721' , '-Milk Levels are critically low');
   
   
$s=mysqli_query($con,"select * from tbl_numbers where flag=1");
			while($rw=mysqli_fetch_array($s))
			{
				$nm=$rw["number"];
				echo $nm;
				sendWay2SMS ( '7034057473' , 'happy' , $nm , '-Milk Levels are critically low');
			}
		 
		 $date=date("Y-m-d H:i:s");
		 mysqli_query($con,"update tbl_info set notify=1,notify_time='$date' where macid='$mac'");
		 function send_notification ($tokens, $message)
	{
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $message
			);

		$headers = array(
			'Authorization:key = AIzaSyDAuskbVovSf9xzLSPD_jioUZ96uVoZm3o ',
			'Content-Type: application/json'
			);

	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
	}
	

$conn = mysqli_connect("mysql.hostinger.in", "u890440242_fcm", "mimosapp", "u890440242_fcm");

	$sql = "select Token from users";

	$result = mysqli_query($conn,$sql);
	$tokens = array();

	if(mysqli_num_rows($result) > 0 ){

		while ($row = mysqli_fetch_assoc($result)) {
			$tokens[] = $row["Token"];
		}
	}

	mysqli_close($conn);

	$message = array("message" => $mac."-Milk Container levels are critically low");
	$message_status = send_notification($tokens, $message);
	 }
		 if(($lvl>$tot || $lvl<3) && $row['flag']!=1)
		 {
			 $date=date("Y-m-d H:i:s");
			  $date=date("Y-m-d H:i:s");
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
			 mysqli_query($con,"UPDATE  tbl_info  SET flag=1,flag_time='$date' WHERE  macid='$mac'");
		 }
		 $curdate=strtotime(date("Y-m-d H:i:s"));

		 $dbdate1=strtotime($row['flag_time']);
		 $diff1=$curdate-$dbdate1;
		if(($lvl<$tot || $lvl>=3) && $diff1>585 && $row['flag']==1) 
		{
			mysqli_query($con,"UPDATE  tbl_info  SET flag=0 WHERE  macid='$mac'");
		 }
    $tot=$row["maxlevel"];
    $cur=$tot-$lvl;
    $per=($cur/$tot)*100;
	if($per < 0)
    {
		$sql = "UPDATE  tbl_info  SET curlevel=0 , percent=0 WHERE  macid='$mac'" ;
    	mysqli_query($con,$sql);
	}
	else
	{
		$sql = "UPDATE  tbl_info  SET curlevel='$cur' , percent='$per' WHERE  macid='$mac'" ;
    	mysqli_query($con,$sql);
	}
		
   }
   else
   { 
      echo "Machine NOT Registered";
   }
 }
	
}
else
{
  echo "error";
}
?>