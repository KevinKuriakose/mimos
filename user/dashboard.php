<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
	session_start();
	if($_SESSION["uid"]=="admin"||$_SESSION["uid"]=="")
	{
		header("location:../home.html");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>User Dashboard</title>

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

<body style="background-image:url(tcsjpg.jpg)">
	<!-- ivide aa image file name koduthal mathie -->

	<div class="wrapper">

	    <div class="sidebar" data-color="cyan" data-image="assets/img/logo.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			
	    	<div class="sidebar-wrapper">
            <div class="logo" align="center">
            <img src="bannerwebsite.jpg" style="width:235px;border-radius: 7px;"  />
	           </div> <ul class="nav">
	                <li class="active">
	                    <a href="dashboard.php">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
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
                
					
				
					<div class="row" >
						<div class="col-lg-12 col-md-12" >
							<div class="card card-nav-tabs">
								<div class="card-header" data-background-color="cyan">
									<div class="nav-tabs-navigation">
										<div class="nav-tabs-wrapper">
											<span class="nav-tabs-title">Blocks:</span>
											<ul class="nav nav-tabs" data-tabs="tabs">
												<li class="active">
													<a href="#settings" data-toggle="tab">
														<i class="material-icons">assessment</i>
														All
													<div class="ripple-container"></div></a>
												</li>
                                                <li class="">
													<a href="#messages" data-toggle="tab">
														<i class="material-icons">weekend</i>
														Services Block
													<div class="ripple-container"></div></a>
												</li>
												<li class="">
													<a href="#profile" data-toggle="tab">
														<i class="material-icons">cloud</i>
														Engineering Block
													<div class="ripple-container"></div></a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>

								<div class="card-content" >
									<div class="tab-content">
										<div class="tab-pane active" id="settings">
											<table class="table">
												<tbody>
													<?php
													$result=mysqli_query($con,"select * from tbl_info where disen=0 order by percent");
                                    
									while($row=mysqli_fetch_array($result))
									{
										?>
                                                    <tr  style="vertical-align: middle !important;">
														<td width="20%"><h5><strong><?php echo $row['macid']; ?></strong></h5></td>
                                                         <td width="20%"> 
                                                            <h5 style="height:15px;"><?php echo $row['block'];?></h5>
																													 <h6 style="display:inline;"><?php echo $row['floor'];?></h6>
																													
																													 <?php
																																	if($row['flag']==1)
																																	{
																																		?>
																													 
																											 <p class="text-info">Refilling in Progress</p>
																													 <?php
																																	}
																														?>
                                                          </td>
                                                            <td width="40%">
                                                            <?php
															if($row['percent']>10)
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
															else
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
														?>
														</td>
																											<td width="20%">&nbsp;</td>
														
													</tr>
													<?php
									}
									?>
												</tbody>
											</table>
										 </div>
	                  <div class="tab-pane" id="messages">
											<table class="table">
												<tbody>
													<?php
													$result=mysqli_query($con,"select * from tbl_info where block='Services Block' and disen=0 order by percent");
                                    
									while($row=mysqli_fetch_array($result))
									{
										?>
                                                    <tr style="vertical-align: middle !important;">
														<td width="20%"><h5><strong><?php echo $row['macid']; ?></strong></h5></td>
                                                         <td width="20%"> 
                                                            <h5 style="display:inline;"><?php echo $row['floor'];?></h5>
																													
																													 <?php
																																	if($row['flag']==1)
																																	{
																																		?>
																													 
																											 <p class="text-info">Refilling in Progress</p>
																													 <?php
																																	}
																														?>
                                                          </td>
                                                            <td width="40%">
                                                            <?php
															if($row['percent']>10)
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
															else
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
														?>
														</td>
														<td width="20%">&nbsp;</td>
													</tr>
													<?php
									}
									?>
												</tbody>
											</table>
										</div>
										
										
										<div class="tab-pane active" id="profile" >
											<table class="table">
												<tbody>
													<?php
													$result=mysqli_query($con,"select * from tbl_info where block='Engineering Block' and disen=0 order by percent");
                                    
									while($row=mysqli_fetch_array($result))
									{
										?>
                                                    <tr style="vertical-align: middle !important;">
														<td width="20%"><h5><strong><?php echo $row['macid']; ?></strong></h5></td>
                                                         <td width="20%"> 
                                                            <h5 style="display:inline;"><?php echo $row['floor'];?></h5>
																													
																													 <?php
																																	if($row['flag']==1)
																																	{
																																		?>
																													 
																											 <p class="text-info">Refilling in Progress</p>
																													 <?php
																																	}
																														?>
                                                          </td>
                                                            <td width="40%">
                                                            <?php
															if($row['percent']>10)
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
															else
															{
																?>
                                                                <div class="progress" style="background-color:#a9a9a9;margin-bottom: 0px !important;height:25px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $row['percent'];?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row['percent'];?>%">
      <?php echo $row['percent'];?>%
    </div>
  </div>
  														<?php
															}
														?>
														</td>
																											<td width="20%">&nbsp;</td>
														
													</tr>
													<?php
									}
									?>
												</tbody>
											</table>
										</div>
                                        
										      </div>
						</div>
					</div>
			</div>
            </div>
            </div>
			</div>
            
			<footer class="footer">
				<div class="container-fluid">
                
					
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script>MiMosWeb
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

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
