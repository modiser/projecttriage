<!DOCTYPE html>
<?php
include "testcon.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: hospital1.php');
}
?>
<?php

$servername = "154.0.161.173";
$username = "charles";
$password = "charles@cce$$1";
$dbname = "unitac_main";
$port = 3306;
$db = "charles@cce$$1";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);





if (isset($_POST['submit']))
{
    $Surname   = $_POST['Surname'];
    $FirstName  = $_POST['FirstName'];
    $HospitalName = $_POST['HospitalName'];
	$ClerkID   = $_POST['ClerkID'];
    $Username  = $_POST['Username'];
    $Password = $_POST['Password'];
	$Gender       = $_POST['Gender'];
    $Address    = $_POST['Address'];
    $email      = $_POST['email'];
    $number     = $_POST['number'];

 

     $sql1 ="INSERT INTO unitac_main.clerk (SName, FName, Hospital_Name, ClerkID, Username, Password, Gender, Address, Email, ContactNo1) VALUES ('$Surname', '$FirstName', '$HospitalName', '$ClerkID', '$Username', '$Password', '$Gender', '$Address', '$email', '$number')";
	 if (mysqli_query($conn, $sql1)) {
 echo "Record for Mr $Surname has been added Successfully<br>";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	 $sql2 ="INSERT INTO unitac_main.clerk_login (ClerkID, UsernameClerk, Password) VALUES ('$ClerkID', '$Username', '$Password')";
if (mysqli_query($conn, $sql2)) {
 echo "Login Credits will be send to Mr $Surname";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

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
		.button {
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 24px;}

.test {
    border:none;
    border-bottom:3px solid #fff;
    outline:none;
    height:40px;
    color:#fff;
    font-size:16px;
    background-color:transparent;
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
						<a href="unitak1.php">
						<span><i class="fa fa-user"></i></span>
							<span><i class="Add Clerk"></i></span>
							<span>Add Clerk</span>
						</a>
					</li>
					
					<li>
						<a href="unitak2.php">
						<span><i class="fa fa-ambulance"></i></span>
							<span><i class="home"></i></span>
							<span>Add Paramedic</span>
						</a>
					</li>
					<li>
						<a href="unitak3.php">
						<span><i class="fa fa-user-md"></i></span>
							<span><i class="Add Clerk"></i></span>
							<span>Add Doctor</span>
						</a>
					</li>
					<li>
						<a href="unitak4.php">
						<span><i class="fa fa-stethoscope"></i></span>
							<span><i class="Add Clerk"></i></span>
							<span>Add Specialist</span>
						</a>
					</li>
					<li>
						<a href="unitak5.php">
							<span><i class="fa fa-hospital-o"></i></span>
							<span><i class="hospital"></i></span>
							<span>Add Hospital</span>
						</a>
					</li>
					<li>
						<a href="unitak6.php">
							<span><i class="fa fa-bar-chart"></i></span>
							<span>Report</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				Add Clerk
			</div>
		<form action="" method = "POST" style="background-color:   #c4c4ed; height:auto;">
  <h2>Register Clerk/Administrator</h2>
   Surname:   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  First Name:
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Hospital Name:<br>
  <input name="Surname" class= "test" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; &nbsp;
  <input name="FirstName" class= "test" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; &nbsp;
  <input name="HospitalName" class= "test" size="15" style="height: 19px;"  type="text" required>

  <br><br>
    Clerk ID:   
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Username:
  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
  Password:<br>
  <input name="ClerkID" class= "test" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; &nbsp;
  <input name="Username" class= "test" size="15" style="height: 19px;"  type="text" required>
      &nbsp; &nbsp; &nbsp; &nbsp;
  <input name="Password" class= "test" size="15" style="height: 19px;"  type="text" required>

  <br><br>

    Email Address:<br>
  <input name="email" class= "test" type="text" required placeholder="Enter A Valid Email Address" style="height: 19px;" size="30"><br><br>

  Home Address: <br>
  <input name="Address" class= "test" type="text" required placeholder="Enter your home Address" style="height: 19px;" size="30" maxlength="30"><br><br>

  Gender:
   &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
   <br>
  <input name="Gender" class= "test" size="7 style="height: 19px;"  type="text" required>
    &nbsp; &nbsp; 
    <br><br>

  Telephone/Mobile Number: <br>
  <input name="number" class= "test" type="text" required id="number" placeholder="Mobile Number" style="height: 19px;">

<br>
<br>

<button type ="submit" name="submit" value="send to database"class="button button4"> Register Clerk </button>
</form>
			
		</div>
	</body>
</html>