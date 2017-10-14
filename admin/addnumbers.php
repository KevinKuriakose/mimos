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
		$number=$_POST['num'];
		mysqli_query($con,"insert into tbl_numbers(number,flag) values('$number','1')");
	}
	$id="";
	if(isset($_GET['id']))
	{
	$id=$_GET['id'];
	mysqli_query($con,"delete from tbl_numbers where numberid='$id'");
	}
	
	?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin-Add Numbers</title>

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
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #5d5d5e;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="cyan" data-image="assets/img/logo.jpg">
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
                     <li class="active">
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
	                                <h4 class="title">Add Mobile Number</h4>
									
	                            </div>
                                <div class="card-content">
	                                <form method="post" action="">

	         
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
                                                
													<label class="control-label">Add Mobile Number</label>
													<input list="num" id="num" name="num"  class="form-control"  >
                                                    
												</div>
	                                        </div>
	                                       
	                                    </div>
											
                                        <br>
                                                                  
	                                    <input type="submit" id="submit" name="submit" class="btn btn-primary pull-left" value="Add" style="background-color:#018574;" />
	                                    <div class="clearfix"></div>

	                                </form>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
						
                        		 <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="cyan">
	                                <h4 class="title">Registered Numbers
                                    <p class="pull-right">
                                    <label class="switch">
                                               
  <input type="checkbox" <?php $result=mysqli_query($con,"select * from tbl_numbers order by numberid");
  
  $row=mysqli_fetch_array($result);
   if($row['flag']==1){ ?> checked <?php }?> onchange="<?php if($row["flag"]==1) mysqli_query($con,"update tbl_numbers set flag=0"); else mysqli_query($con,"update tbl_numbers set flag=1");?>" />
  
  <span class="slider round"></span>

    </label></p>
									</h4>
	                            </div>
	                                <table class="table">
	                                    
	                                   
	                                     <?php
							
							$result=mysqli_query($con,"select * from tbl_numbers order by numberid");
							while($row=mysqli_fetch_array($result))
							{
								?>
	                                        <tr>
	                                       
	                              			<td>&nbsp;</td>
	                                        	<td align="left"><h5><?php echo $row['number'];?></h5></td>
                                                <td align="center">
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs"><a onclick='javascript:confirmationDelete($(this));return false;' href="addnumbers.php?id=<?php echo $row['numberid'];?>">
																<i class="material-icons" style="color:#F00">close</i></a>
															</button></td>
	                                        </tr>
	                  <?php      }?>
	                                   
	                                </table>

	                           
	                            
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
    <script src="assets/js/bootbox.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
		//function confirmationDelete(anchor)
/*{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
}*/
    function confirmationDelete(anchor)
	{
    bootbox.confirm({
		size: "small",
	   message: "Are you sure want to delete this record?",
    buttons: {
        confirm: {
			
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        		if(result){
					console.log('Successfully Deleted'+result);
		window.location=anchor.attr("href");
		
		}
			
    }
});
	}
</script>


</html>
