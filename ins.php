<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");
    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
	$result=mysqli_query($con,"select * from tbl_info");
while($row=mysqli_fetch_array($result))
{	
$mid=$row['macid'];
mysqli_query($con,"update tbl_stat set t0=".rand(0,rand(0,30)).",t1=".rand(0,rand(0,30)).",t2=".rand(0,rand(0,30)).",t3=".rand(0,rand(0,30)).",t4=".rand(0,rand(0,30)).",t5=".rand(0,rand(0,30))."
,t6=".rand(0,rand(0,30)).",t7=".rand(0,rand(0,30)).",t8=".rand(0,rand(0,30)).",t9=".rand(0,rand(0,30)).",t10=".rand(0,rand(0,30)).",t11=".rand(0,rand(0,30)).",t12=".rand(0,rand(0,30)).",t13=".rand(0,rand(0,30)).",t14=".rand(0,rand(0,30))."
 where macid='$mid'");
}
?>