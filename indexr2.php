<!DOCTYPE html>

<?php

?>
<html><?php
include "testcon.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from clerk_login2 where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: unitak1.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
   ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    
</body>
</html>
<html>
<head>
<meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	
<style type = "text/css">
        /* Container */
.container{
    width:40%;
    margin:0 auto;
}

/* Login */
#div_login{
    border: 1px solid gray;
    border-radius: 3px;
    width: auto;
    height: 270px;
    box-shadow: 0px 2px 2px 0px  gray;
    margin: 0 auto;
}

#div_login h1{
    margin-top: 0px;
    font-weight: normal;
    padding: 10px;
    background-color: cornflowerblue;
    color: white;
    font-family: sans-serif;
}

#div_login div{
    clear: both;
    margin-top: 10px;
    padding: 5px;
}

#div_login .textbox{
    width: 96%;
    padding: 7px;
}

#div_login input[type=submit]{
    padding: 7px;
    width: 100px;
    background-color: lightseagreen;
    border: 0px;
    color: white;
}

body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		
		body {
    margin: 0;
    padding: 0;
    background-color: #c4c4ed;

    background-image: url('logo.png');
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
    font-family: 'Times New Roman', Times, serif;
}

.login1 {
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    width:450px;
    height:420px;
    padding: 80px 40px;
    box-sizing:border-box;
    background: rgba(0,0,0,0.5);

}

.adminhead {
    width: 80px;
    height:85px;
    overflow:hidden;
    top:calc(-100px/2);
    left:calc(50% - 50px);
    position:absolute;
}

h2{
    padding:0;
    margin:0;
    text-align:center;
    color:rgb(255, 217, 9);

}
      </style>
   
</head>
<body>
     <div class="login1">
        <img src="logo.png" alt="logindeco1" class="adminhead"/>
        
         <div class="wrapper">
        
        <form method="post" action="">
        <div id="div_login">
            <center><H2>Login Here</H2></center>
			<p style="color:white;">Please fill in your credentials to login.</p>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
			<p style="color:white;">Login as? <a href="index.php">Clerk</a>.</p>
        </div>
    </form>
    </div>    
    </div>
</html>