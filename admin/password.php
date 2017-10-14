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
	if(isset($_POST['submit']))
	{
		$username = $_POST["type"];
  $newpassword = $_POST["new"];
  $oldpassword = $_POST["old"];
  

if ($username=="admin") {

$sql1="SELECT * FROM tbl_login WHERE password='$oldpassword'";
        $result1=mysqli_query($con, $sql1);
        $r=mysqli_fetch_array($result1);
		$id=$r["userid"];
        $sql="UPDATE tbl_login SET password='$newpassword' WHERE userid='$id'";
        $result=mysqli_query($con, $sql); 
        

 }
if ($username=="user") {

$sql1="SELECT * FROM tbl_login WHERE password='$oldpassword'";
        $result1=mysqli_query($con, $sql1);
        $r=mysqli_fetch_array($result1);
		$id=$r["userid"];
        $sql="UPDATE tbl_login SET password='$newpassword' WHERE userid='$id'";
        $result=mysqli_query($con, $sql); 
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

	<title>Admin-Change Password</title>

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
	                <li>
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
                    <li class="active" >
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
	                                <h4 class="title">Change Password</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="">

	                                 <div class="row">
	                                        <div class="col-md-6">
	    <div class="form-group">
        <label for="type">Username:</label>
        <select class="form-control" name="type" id="type">
          <option value="admin">admin</option>
          <option value="user">user</option>
          
        </select>
      </div>
												
                                                   </div>
                                                   </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
                                                
													<label class="control-label">Old Password</label>
													<input type="password" id="old" name="old" required class="form-control" >
                                                   
												</div>
	                                        </div> 
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">New Password</label>
													<input type="password" id="new" name="new" required class="form-control" >
                                                </div>
	                                        </div>
	                                    </div>
											<br>
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
-