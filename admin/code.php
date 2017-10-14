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

	
	
	?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png" />
	<link rel="icon" type="image/png" href="assets/img/logo1.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin-Code</title>

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
                    <li class="active">
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
	                                <h4 class="title">Edit Code</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <form method="post" action="">
	                                                                <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
                                                
													<label class="control-label">Machine ID</label>
													<input list="mid" id="mac" name="mac" autocomplete="on" class="form-control">
                                                    <datalist id="mid">
                                                   
  													<?php
													$select=mysqli_query($con,"select macid from tbl_info");
													while($rowdata=mysqli_fetch_array($select))
													{
														?>
  													<option value="<?php echo $rowdata['macid'];?>"><?php echo $rowdata['macid'];?></option>
													<?php
													}
													?>
                                                    </datalist>
												</div>
	                                        </div>
	                                        
	                                    </div>
                                        <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">WiFi SSID</label>
													<input type="text" class="form-control" id="ssid" name="ssid">
												</div>
	                                        </div>
                                            <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">WiFi Password</label>
													<input type="password" class="form-control" id="pwd" name="pwd" >
												</div>
	                                        </div>
	                                      </div>  
	        
											
                                        <br>
                                                                  
	                                    <input type="submit" id="submit" name="submit" class="btn btn-primary pull-left" value="Submit" style="background-color:#018574;" />
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
                                  
	                    </div>
						
	                </div>
	            </div>
                <?php
				if(isset($_POST['submit']))
	{
		$mac=$_POST['mac'];
		$ssid=$_POST['ssid'];
		$pwd=$_POST['pwd'];
		
		
		
		
		
	?>
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="cyan">
	                                <h4 class="title">#Code</h4>
									
	                            </div>
	                            <div class="card-content">
	                                <div class="well">
                                    <code>
                                    <pre>
                                    
#include "ESP8266WiFi.h"
 
const char server[] = "mimos.96.lt";

const char* MY_SSID = "<?php echo $ssid;?>";
const char* MY_PWD =  "<?php echo $pwd;?>";

int pre_value = -1;

#define TRIGGER 5
#define ECHO    4

WiFiClient client;


void setup()
{

  pre_value=0;
  
  Serial.begin(115200);
  Serial.print("Connecting to "+*MY_SSID);
  WiFi.begin(MY_SSID, MY_PWD);
  Serial.println("going into wl connect");

  pinMode(TRIGGER, OUTPUT);
  pinMode(ECHO, INPUT);
  pinMode(BUILTIN_LED, OUTPUT);

  while (WiFi.status() != WL_CONNECTED)
  {
      delay(1000);
      Serial.print(".");
  }
  Serial.println("wl connected");
  Serial.println("");
  Serial.println("Credentials accepted! Connected to wifi\n ");
  Serial.println("");
}

void loop() {

  long duration, distance;
  digitalWrite(TRIGGER, LOW);  
  delayMicroseconds(2); 
  
  digitalWrite(TRIGGER, HIGH);
  delayMicroseconds(10); 
  
  digitalWrite(TRIGGER, LOW);
  duration = pulseIn(ECHO, HIGH);
  distance = (duration/2) / 29.1;
  
  Serial.print(distance);
  Serial.println("Centimeter:");
  delay(1000);

  
  delay(2000);
 
  int value = (int)distance;

  if(value != pre_value){

    Serial.print("preval" + pre_value);

    pre_value = value;
    
    Serial.print("Centimeter : ");
    Serial.print(value);

    Serial.println("\nStarting connection to server..."); 
 
    if (client.connect(server, 80)) {
      Serial.println("connected to server");
      WiFi.printDiag(Serial);

      String data = "value=" + (String) value + "&id=<?php echo $mac;?>";
      
      client.println("POST /register.php HTTP/1.1");
      client.print("Host: mimos.96.lt\n");
      client.println("User-Agent: ESP8266/1.0");
      client.println("Connection: close"); 
      client.println("Content-Type: application/x-www-form-urlencoded");
      client.print("Content-Length: ");
      client.print(data.length());
      client.print("\n\n");
      client.print(data);
      client.stop(); 
     
      Serial.println("\n");
      Serial.println("My data string im POSTing looks like this: ");
      Serial.println(data);
      Serial.println("And it is this many bytes: ");
      Serial.println(data.length());       
      delay(2000);
    }
  } 
}

void printWifiStatus() {

  Serial.print("SSID: ");
  Serial.println(WiFi.SSID());

  IPAddress ip = WiFi.localIP();
  Serial.print("IP Address: ");
  Serial.println(ip);


  long rssi = WiFi.RSSI();
  Serial.print("signal strength (RSSI):");
  Serial.print(rssi);
  Serial.println(" dBm");
}
                                    </pre>
                                    </code>                            </div>
                                    
      	                        </div>
	                    </div>
	            </div>
	        </div>
                        <?php
	}
	?>
						
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
