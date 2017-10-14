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
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$it=$_GET['i'];
	if($it==0)
	{
	$sql="update tbl_info set disen=1 where mid='$id'";
	mysqli_query($con,$sql);
	}
	else
	{
	$sql="update tbl_info set disen=0 where mid='$id'";
	mysqli_query($con,$sql);
		
	}
	
	
	}
?>
<!doctype html>
<html lang="en">
<head>

<meta name="theme-color" content="#ffffff" />
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Dashboard</title>

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
	<!-- ivide aa image file name koduthal mathie -->

	<div class="wrapper">

	    <div class="sidebar" data-color="cyan" data-image="assets/img/logo.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			

	    	<div class="sidebar-wrapper">
            <div class="logo" align="center">
				<img src="bannerwebsite.jpg" style="width:235px;border-radius: 7px;" />
			</div>
	             <ul class="nav">
	                <li class="active" >
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li >
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
                    <li>
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
	                    <div class="col-md-12">
                           <div class="card">
                            
	                               
	                               <!-- <p class="category">Here is a subtitle for this table</p>-->
	                           
						
                        
                            
                            
                          
	<div class="card-header" data-background-color="cyan" style="padding-left:0px;!important">
		<div class="card-content table-responsive">
            <table style="width:auto">
            
                            <tr>
                          	<td width="10%" align="center"><h4 align="center">Machine ID</h4></td>
                            <td width="15%" align="center"><h4 align="center">Block</h4></td>
                            <td width="15%" align="center"><h4 align="center">Floor</h4></td>
                            <td width="12%" align="center"><h4 align="center">Current Level(cm)</h4></td>
                            <td width="14%" align="center"><h4 align="center">Container Depth(cm)</h4></td>
                            <td width="10%" align="center"><h4 align="center">Percentage(%)</h4></td>
                            <td width="8%">&nbsp;</td>
															<td width="6%">&nbsp;</td>
                            <td width="8%">&nbsp;</td>
                             </tr>
                             </table>
		  <!--<div class="card card-nav-tabs">
		<div class="nav-tabs-navigation">
				
		<div class="nav-tabs-wrapper">
                            </div>
                  </div>
                            </div>-->
                            </div>        </div>               
                             <div class="card-content table-responsive">     
                            <table class="table table-hover" style="width:auto">
                            <tbody style="width:auto">
                            <?php
							$i=1;
							$result=mysqli_query($con,"select * from tbl_info order by mid");
							while($row=mysqli_fetch_array($result))
							{
								?>
                                <tr <?php if(($i%2)==0){?> style="background-color:#cafbdd;" <?php } ?>>
                                <td width="10%" align="center"><h5><?php echo $row['macid'];?></h5></td>
                                <td width="15%" align="center"><h5><?php echo $row['block'];?></h5></td>
                                <td width="15%" align="center"><h5><?php echo $row['floor'];?></h5></td>
                                <td width="12%" align="center"><h5><?php echo $row['curlevel'];?></h5></td>
                                <td width="14%" align="center"><h5><?php echo $row['maxlevel'];?></h5></td>
                                <td width="10%" align="center"><h5><?php echo $row['percent'];?></h5></td>
                                <td width="10%" align="center"><button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs"><a href="machine.php?id=1&eid=<?php echo $row['mid'];?>">
																<i class="material-icons" style="color:#12ff00;">edit</i></a>
															</button></td>
																	<?php
								if($row['disen']==0)
								{
																	?>
																	<td width="6%" align="center"><button type="button" rel="tooltip" title="Disable" class="btn btn-primary btn-simple btn-xs"><a href="dashboard.php?i=0&id=<?php echo $row['mid'];?>">
																<i class="material-icons" style="color:#0000FF;font-size:20px;">check</i></a>
															</button></td>
																	<?php
								}else{?>
																	<td width="6%" align="center"><button type="button" rel="tooltip" title="Enable" class="btn btn-primary btn-simple btn-xs"><a href="dashboard.php?i=1&id=<?php echo $row['mid'];?>">
																<i class="material-icons" style="color:#0000FF;font-size:20px;">block</i></a>
																		
															</button></td>
																	<?php } ?>
                                                            <td width="8%" align="center">
															<button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs"><a onclick='javascript:confirmationDelete($(this));return false;' href="machine.php?id=0&did=<?php echo $row['mid'];?>">
																<i class="material-icons" style="color:#F00">close</i></a>
															</button></td>
                                </tr>
                                <?php $i=$i+1;
							}
							?>    
                            </tbody>
                            </table></div>
                            
                </div>            
				</div>
                </div>
                </div>
                </div>
			<footer class="footer">
				<div class="container-fluid">
                
					
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://mimos.96.lt"></a>, MiMosWeb
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
