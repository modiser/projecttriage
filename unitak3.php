<!DOCTYPE html>
<?php
$accessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjaGVjayI6dHJ1ZSwiaWF0IjoxNTU3ODUzNDA2LCJleHAiOjE1NTgzNzkwMDZ9.1zCfi0YGyztuWaFtCmST445XUHG0PbLTn5cV0JwHfMA';

$servername = "154.0.161.173";
$username = "charles";
$password = "charles@cce$$1";
$dbname = "unitac_main";
$port = 3306;



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username1 = $_POST['username1'];
$Password1 = $_POST['Password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$practice = $_POST['practice'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$DoctorID = $_POST['DoctorID'];
$address = $_POST['address'];
if($name !=''||$email !=''){
//Insert Query of SQL
$sql ="INSERT INTO unitac_main.doctors(SName, FName, Practice, DoctorID, UsernameDoc, Password, Gender, PhysicalAddress, EmailAddress, ContactNo1) VALUES ('$surname', '$name', '$practice', '$DoctorID', '$username1', '$Password1', '$gender', '$address', '$email', '$contact')";
if (mysqli_query($conn, $sql)) {
 echo "Recorf for Mr $surname has been added Successfully<br>";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
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
	.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.3%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
  width: 100%;
}

#Paramedics {background-color: white;}
#Doctor {background-color: white;}
#Specialist {background-color: white;}


.form_div {
width:70%;

}
form {
width:500px;
border:1px dashed #aaa;
padding:10px 30px 40px;
margin-left:70px;
background-color:#f0f8ff
}
form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
textarea {
width:100%;
height:60px;
border-radius:1px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none
}
.input {
width:100%;
height:30px;
border-radius:2px;
box-shadow:0 0 1px 2px #123456;
margin-top:10px;
padding:7px;
border:none;
margin-bottom:20px
}
.submit {
color:#fff;
border-radius:3px;
background:#1F8DD6;
padding:5px;
margin-top:40px;
border:none;
width:100%;
height:30px;
box-shadow:0 0 1px 2px #123456;
font-size:18px
}
p {
color:red;
text-align:center;
}
span {
text-align:center;

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
				    <li>
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
					<li class="active">
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
				Add Doctor
			</div>
			
			 <center><h3>Add Doctor's Dedails</h3></center>

<div class="form_div">
<form method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Doc Detail</h2>
<label>Surname:</label>
<input class="input" name="surname" type="text" value="">
<label>Name:</label>
<input class="input" name="name" type="text" value="">
<label>Practice:</label>
<input class="input" name="practice" type="text" value="">
<label>DoctorID</label>
<input class="input" name="DoctorID" type="text" value="">
<label>Username:</label>
<input class="input" name="username1" type="text" value="">
<label>Password:</label>
<input class="input" name="Password" type="text" value="">
<label>Gender: M/F</label>
<input class="input" name="gender" type="text" value="">
<label>Address:</label>
<textarea cols="25" name="address" rows="5"></textarea>
<label>Email:</label>
<input class="input" name="email" type="text" value="">
<label>Contact:</label>
<input class="input" name="contact" type="text" value=""><br>
<input class="submit" name="submit" type="submit" value="Register">
</form>
</div>


		</div>
	</body>
</html>