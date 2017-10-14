<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
	session_start();
if($_SESSION["uid"]=="")
{
	header("location:../home.html");
}
	$id="";
	$eid="";
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	
	if($id==1)
	{
		$eid=$_GET['eid'];
		$sel=mysqli_query($con,"select * from tbl_info where mid='$eid'");
		$row=mysqli_fetch_array($sel);
		$emid=$row['macid'];
		$efloor=$row['floor'];
		$eblock=$row['block'];
		$eht=$row['maxlevel'];
	}
	else if($id==0)
	{
		$did=$_GET['did'];
		$result=mysqli_query($con,"select * from tbl_info where mid='$did'");
		$r=mysqli_fetch_array($result);
		$mac=$r["macid"];
		mysqli_query($con,"delete from tbl_info where mid='$did'");
		mysqli_query($con,"delete from tbl_stat where macid='$mac'");
		header("location:dashboard.php");
	}
	}
	if(isset($_POST['submit']))
	{
		$m=$_POST['mid'];
		$h=$_POST['ht'];
		$b=$_POST['block'];
		$f=$_POST['floor'];
		
		if($id=="")
		{
			mysqli_query($con,"insert into tbl_info(macid,floor,block,maxlevel) values('$m','$f','$b','$h')");
			mysqli_query($con,"insert into tbl_stat(macid,t0,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14) values('$m',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)");
		
		}
		else
		{
			mysqli_query($con,"update tbl_info set block='$b',floor='$f',maxlevel='$h' where macid='$emid'");
			header("location:dashboard.php");
		}
		
	}
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin-Add Machine</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="cyan" data-image="assets/img/logo.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			

	    	<div class="sidebar-wrapper">
            <div class="logo" align="center">
            <img src="bannerwebsite.jpg" style="width:235px;border-radius: 7px;"  />
	           </div>
					<ul class="nav">
	                <li>
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="machine.php">
	                        <i class="material-icons">library_books</i>
	                        <p>Add Machine</p>
	                    </a>
	                </li>

	               
	                
	                <li>
	                    <a href="statistics.php">
	                        <i class="material-icons">trending_up</i>
	                        <p>Statistics</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="code.php">
	                        <i class="material-icons">code</i>
	                        <p>Code</p>
	                    </a>
	                </li>
                     <li>
	                    <a href="addnumbers.php">
	                        <i class="material-icons">call</i>
	                        <p>Add Numbers</p>
	                    </a>
	                </li>
                    <li >
	                    <a href="password.php">
	                        <i class="material-icons">https</i>
	                        <p>Change Password</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="../home.html">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Logout</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			
<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							
							
						</ul>

						
					</div>
				</div>
			</nav>

	        
			

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="cyan">
	                                <h4 class="title">Machine Details</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Machine ID</label>
													<input type="text" class="form-control" id="mid" name="mid" <?php if($eid!=""){ ?>value="<?php echo $emid;?>" disabled <?php }?>>
												</div>
	                                        </div>
                                            <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Container Height</label>
													<input type="text" class="form-control" id="ht" name="ht" <?php if($eid!=""){ ?>value="<?php echo $eht;?>" <?php }?>>
												</div>
	                                        </div>
	                                      </div>  
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
                                                
													<label class="control-label">Block</label>
													<input list="blocks" id="block" name="block" autocomplete="off" class="form-control" value="<?php if($eid!="") echo $eblock ;?>">
                                                    <datalist id="blocks">
                                                   
  													<?php
													$select=mysqli_query($con,"select distinct block from tbl_info");
													while($rowdata=mysqli_fetch_array($select))
													{
														?>
  													<option value="<?php echo $rowdata['block'];?>"><?php echo $rowdata['block'];?></option>
													<?php
													}
													?>
                                                    </datalist>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Floor</label>
													<input list="floors" type="text" id="floor" name="floor" autocomplete="off" class="form-control" value="<?php if($eid!="") echo $efloor;?>">
													<datalist id="floors" style="vertical-align:top">
                                                   <?php
													$select=mysqli_query($con,"select distinct floor from tbl_info");
													while($rowdata=mysqli_fetch_array($select))
													{
														?>
  													<option value="<?php echo $rowdata['floor'];?>"><?php echo $rowdata['floor'];?></option>
													<?php
													}
													?>
                                                    </datalist>
                                                </div>
	                                        </div>
	                                    </div>
											<br>
	                                    <br>
                                       
                                                                  
	                                    <input type="submit" id="submit" name="submit" class="btn btn-primary pull-left" value="Submit" style="background-color:#018574;" />
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
	                
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> MiMosWeb
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
