<!DOCTYPE html>
<?php
include "testcon.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: hospital1.php');
}
?>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UNITAK</title>
		
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>

		<style>
		table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
   padding:10px;
    }
  tr:nth-child(even) {background-color: #f2f2f2
    padding:10px;}
	
	tabla, th, tr {
    border: 3px solid red;
}
		</style>
		

	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-hospital-o"></i>
				<span>Unitak</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-hospital-o"></i>
				<span>Unitak</span>
			</div>
			<nav>
				<ul>
					<li class="active">
						<a href="hospital1.php">
							<span><i class="fa fa-home"></i></span>
							<span>Incoming</span>
						</a>
					</li>
					<li>
						<a href="hospital2.php">
							<span><i class="fa fa-home"></i></span>
							<span>Addmited</span>
						</a>
					</li>

					<li>
						<a href="hospital3.php">
							<span><i class="fa fa-ambulance"></i></span>
							<span>Paramedic Rank</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				Incomining Patient
			</div>
			
			
				
				<center><h1>Incomining Patient</h1><center>
 <table>
 <tr>
  <th>Case Id</th> 
  <th>EMS No.</th> 
  <th>Location lat</th>
  <th>Location long</th>
  <th>Patient Name</th>
  <th>Patient condition</th>
  <th>Cause</th>
 </tr>
 <?php
$servername = "154.0.161.173";
$username = "charles";
$password = "charles@cce$$1";
$dbname = "unitac_main";
$port = 3306;
$db = "charles@cce$$1";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

  $sql = "SELECT case_id, ems_number, location_latitude, location_longitude, patient_identification, patient_condition, cause FROM cases";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["case_id"]. "</td><td>" . $row["ems_number"] . "</td><td>"
. $row["location_latitude"]. "</td> . <td>" . $row["location_longitude"] . "</td> . <td>" . $row["patient_identification"] . "</td> . <td>" . $row["patient_condition"] . "</td> . <td>" . $row["cause"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
				
		
		</div>
	</body>
</html>