<?php
$con = mysqli_connect("mysql.hostinger.in", "u890440242_mimos", "mimosapp", "u890440242_mima");
    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    }
session_start();
if($_SESSION["uid"]==""||$_SESSION["uid"]=="user")
{
	header("location:../home.html");
}
$sh="";
$blk="";
if(isset($_POST["hide"]))
{
	$sh=1;
}
if(isset($_POST["show"]))
{
	$sh="";
}

if(isset($_POST["blk"]))
{
	$blk=1;
}
if(isset($_POST["mc"]))
{
	$blk="";
}
?>
<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="tabs.css">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />

	<title>Admin-Statistics</title>


<script src="https://code.highcharts.com/highcharts-more.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	
	        

    
    
  
      <script src="jquery.min.js"></script>
<script src="chart.js"></script>
<script type="text/javascript">
$(function () {
    $('#graph').highcharts({
		
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
            type: 'line'
        },
        title: {
            text: ''
        },
		<?php 
		if($sh==1)
		{?>
		 plotOptions: {
        	series: {
          	visible: false
          }
        }<?php }?>
		
	}, function(chart){
      
      console.log(chart);
      var x = 0; // should programmatically get x-position of last point
      var y = 0; // should programmatically get y-position of last point
      var h = 100; // should programmatically get distance between y-position of top and bottom points
      var w = 0;
		//chart.series[5].show();
      chart.renderer.image(  x, y, w, h ).add();
	  
    });
	
	
});
</script>

<script src="data.js"></script>
<script src="exporting.js"></script>
<script src="chartsbar.js"></script>
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

	               
	                
	                <li class="active" >
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
                          
                            
	                               
	                             <!-- <div class="card-header" data-background-color="cyan">-->
	                         <!--       <h4 class="title">Hourly Demand Distribution</h4>-->
	                               <!-- <p class="category">Here is a subtitle for this table</p>-->
                                   <div class="theme-cactus">
   <div class="ui-tabgroup">
    <input class="ui-tab1" type="radio" id="tgroup_c1_tab1" name="tgroup_c1" checked />
    <input class="ui-tab2" type="radio" id="tgroup_c1_tab2" name="tgroup_c1" />
    <input class="ui-tab3" type="radio" id="tgroup_c1_tab3" name="tgroup_c1" />
    <div class="ui-tabs">
      <label class="ui-tab1" for="tgroup_c1_tab1"><i class="fa fa-hourglass-half"></i>Hourly demand</label>
      <label class="ui-tab2" for="tgroup_c1_tab2"><i class="fa fa-bar-chart"></i>Machine Demand</label>
      <!--<label class="ui-tab3" for="tgroup_c1_tab3"><i class="fa fa-rocket"></i>Customised Demand</label>
      
    -->
  </div>
	                           
                               
                     <div class="ui-panels">
      <div class="ui-tab1"><br /><br />
      <div id="graph" style="min-width: 200px; height: 400px; margin: 0 auto"></div>
       
        <form method="post" action="">
        <?php 
		if($sh=="" && $blk=="")
		{
			?>
            <p class="pull-right">
        <input type="submit" id="hide" name="hide" value="Hide All" class="btn btn-primary btn-outline" />
        </p>
        <?php
		}
		else if($blk==1)
		{
		}
		else if($sh==1)
		{
		?>
<p class="pull-right">
<input type="submit" id="show" name="show" value="Show All" class="btn btn-primary btn-outline" /></p>
        <?php
		}
		
		
		if($blk=="")
		{
		?>
        
        <input type="submit" id="blk" name="blk" value="Block Wise" class="btn btn-primary btn-outline"/>
<?php
		}
		else
		{
			?>
            <input type="submit" id="mc" name="mc" value="Machine Wise" class="btn btn-primary btn-outline" />
            <?php
		}
		?>
        </form>
        <?php
	  if($blk=="")
	  {
		  ?>
        
<table id="datatable" hidden='true'>
    <thead>
        <tr>
            <th></th>
           <?php  $result=mysqli_query($con,"select * from tbl_stat order by id");
            while($row=mysqli_fetch_array($result))
            {?>
            <th><?php echo $row["macid"];?></th>
            <?php
			}
			?>

        </tr>
    </thead>
    <tbody>
    <?php
	$i=0;
	$times = array("8am-9am", "9am-10am", "10am-11am","11am-12pm","12pm-1pm","1pm-2pm", "2pm-3pm", "3pm-4pm","4pm-5p,", "5pm-6pm", "6pm-7pm","7pm-8pm", "8pm-12am", "12am-4am","4am-8am");
            $result=mysqli_query($con,"select * from tbl_stat order by id");
            $row=mysqli_fetch_array($result);
			while($i<15)
            {
				
				 
?>
        <tr>
            <th><?php echo $times[$i];?></th>
           <?php
		    $result=mysqli_query($con,"select * from tbl_stat order by id");
            while($row=mysqli_fetch_array($result))
			{
				?>
            <td><?php echo $row["t".$i.""];?></td>
            <?php
			}
			?>
          </tr>
              <?php
			  $i=$i+1;
			}
			?>
    </tbody>
</table>
 <?php
	  }
	  else if($blk==1)
	  {
	  ?>
      <table id="datatable" hidden='true'>
    <thead>
        <tr>
            <th></th>
           
            <th>Engineering Block</th>
            <th>Services Block</th>
            <th>Cafeteria</th>
        </tr>
    </thead>
    <tbody>
    <?php
	$i=0;
	$times = array("8am-9am", "9am-10am", "10am-11am","11am-12pm","12pm-1pm","1pm-2pm", "2pm-3pm", "3pm-4pm","4pm-5p,", "5pm-6pm", "6pm-7pm","7pm-8pm", "8pm-12am", "12am-4am","4am-8am");
            while($i<15)
            {
				
				 
?>
        <tr>
            <th><?php echo $times[$i];?></th>
           <?php
		   $tt=0;
		    $result=mysqli_query($con,"select * from tbl_stat where id<14 order by id");
            while($row=mysqli_fetch_array($result))
			{
				$tt=$tt+$row["t".$i.""];
				
			}
				?>
            <td><?php echo $tt?></td>
            <?php
            $tt=0;
		    $result=mysqli_query($con,"select * from tbl_stat where id<27 order by id");
            while($row=mysqli_fetch_array($result))
			{
				$tt=$tt+$row["t".$i.""];
				
			}
				?>
            <td><?php echo $tt?></td>
            <?php
            $tt=0;
		    $result=mysqli_query($con,"select * from tbl_stat where id<31 order by id");
            while($row=mysqli_fetch_array($result))
			{
				$tt=$tt+$row["t".$i.""];
				
			}
				?>
            <td><?php echo $tt?></td>
            
          </tr>
              <?php
			  $i=$i+1;
			}
			?>
    </tbody>
</table>
 <?php
	  }
	  ?>
</div>


<div class="ui-tab2"><br /><br />
                    <div id="bargraph" style="min-width: 200px; height: 400px; margin: 0 auto"></div>

<table id="datatablebar" hidden='true'>
    <thead>
        <tr>
            <th></th>
                
            <th style="background-color:#018574;">Demand per Container</th>
        </tr>
    </thead>
    <tbody>
    <?php
						
	
                        $sql=mysqli_query($con,"select * from tbl_stat order by id");
							while($row=mysqli_fetch_array($sql))	
							{
								?>	
                                <tr>
                                <th><?php echo $row["macid"];?></th>
                                
							<td><?php $t=$row["t0"]+$row["t1"]+$row["t2"]+$row["t3"]+$row["t4"]+$row["t5"]+$row["t6"]+$row["t7"]+$row["t8"]+$row["t9"]+$row["t10"]+$row["t11"]+$row["t12"]+$row["t13"]+$row["t14"];
							echo $t;?></td>
                            </tr>
						<?php
							}
							?>
						
					</tbody>
				</table>
			
        
                            
                          </div>
	<div class="ui-tab3">
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
						&copy; <script>document.write(new Date().getFullYear())</script> MiMosWeb
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>
<!--   Core JS Files   -->
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
