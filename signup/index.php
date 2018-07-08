<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>skulcrib</title>
<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="../images/headlogo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: "Open Sans", sans-serif;
	height: 100vh;
	background-size: cover;
	background-image: url(../images/bg.jpg);
	background-size: auto;
    background-repeat: repeat;
	background-attachment:fixed;
}


* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background:rgba(87, 59, 59, 0.75);
  -webkit-bacground-size:cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -background-size:cover;
}


.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 350px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #1382d8;
}

.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #462245;
  transition: border-width 1s ease;
  color:black;
}
.login select {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #462245;
  transition: border-width 1s ease;
  color: black;
}

.login input:focus {
  outline: none;
  color: Black;
  border-color: #462245;
  border-left-width: 30px;
}

.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login #button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background:#462245;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login,#button:hover
{

border-bottom-width: 10px;
cursor:pointer;}


.login:not(.loading) button:hover {
  box-shadow: 0px 10px 10px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 15px;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}

#header {font-size:25px; color:white;}
.form{
	background-color:white;
	width:100%;
	height:70px;
	color: #444;
    font-size: 1.2em;
	border-radius:25px;
	text-align:center;
	padding-top:10px;
	display:block;
}
.form a{
	text-decoration:none;
	background-color:none;
	color:#0cad2c;
	border:1px solid #0cad2c;
	border-radius:30px;
	transition: all 0.5s ease-out;
	padding:5px;
}
.form a:hover{
	background-color:#0cad2c;
	color:white;
}
</style>
    
        
    
  </head>

  <body>

<div class="wrapper">
<center>
<a href="../">
<img src="../images/logo.png" width="160px" height="80px" title="wisewealth"/> <br>
</a>
</center>
<?php
require('../phpfiles/dbconnect.php');
// If form submitted, insert values into the database.
$error='';


if (isset($_REQUEST['email'])){
        // removes backslashes
        //escapes special characters in a string 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$fullname = stripslashes($_REQUEST['fullname']);
	$fullname = mysqli_real_escape_string($con,$fullname);
	$phoneno = stripslashes($_REQUEST['phoneno']);
	$phoneno = mysqli_real_escape_string($con,$phoneno);
	$accname = stripslashes($_REQUEST['accname']);
	$accname = mysqli_real_escape_string($con,$accname);
	$accno = stripslashes($_REQUEST['accno']);
	$accno = mysqli_real_escape_string($con,$accno);
	$bank = stripslashes($_REQUEST['bank']);
	$bank = mysqli_real_escape_string($con,$bank);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$confirmpassword = stripslashes($_REQUEST['password']);
	$confirmpassword = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
if($confirmpassword==$password){
echo 'yes';	
	$query = "SELECT * FROM `userprofile` WHERE email='$email' 
	 and phoneno='$phoneno' and accno='$accno'" ;						//for user
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	    if($rows==1){
		echo "<div class='form'>
		You are already Registered 
		<a href='signup.php'>Signup</a>
			</div>";
		 }else {
			 //insert into userprofile//
        $query1 = "INSERT  into `userprofile` (fullname,email,password,phoneno,accname,accno,bank, trn_date)
VALUES ('$fullname','$email','".md5($password)."','$phoneno','$accname','$accno','$bank' ,'$trn_date')";
        $result = mysqli_query($con,$query1);
        if($result){
			//insert into userplan,userreceive//
$query2 = "INSERT  into `userplan` (accno,plan,plantime)
VALUES ('$accno','0','0')";
$result2 = mysqli_query($con,$query2);

$query3 = "INSERT  into `userreceive1` (accno,receivedfrom,receivedacc,receivedbank,confirm)
VALUES ('$accno','0','0','0','0')";
$result3 = mysqli_query($con,$query3);

$query4 = "INSERT  into `userreceive2` (accno,receivedfrom,receivedacc,receivedbank,confirm)
VALUES ('$accno','0','0','0','0')";
$result4 = mysqli_query($con,$query4);

$query5 = "INSERT  into `payto` (accno,payto,paytoacc,paytobank,confirm,mergetime)
VALUES ('$accno','0','0','0','0','0')";
$result5 = mysqli_query($con,$query5);

		//insert into userplan,userreceive//
            echo "<div class='form'>
You are registered successfully <a href='login.php'>Login</a></div>";
       die();
        }
		 }
}else{
	$error = "Password Do not match";
}

}

	
echo'
<form class="login" METHOD="POST"  >
    <p class="title">Sign Up</p>
    <p>'.$error.'</p>
	First name 
    <input type="text" placeholder="firstname" id="user" name="firstname" autofocus required/>
    
    Email
	<input type="email" placeholder="email" name="user_email" required/>
	
	password
	<input type="password" placeholder="*********" name="password" required/>
	
	confirm password
	<input type="password" placeholder="*********" name="confirmpassword" required/>
	
	phone no
	<input type="number" placeholder="phoneno" name="phoneno" required/>
	
	institution
	<select id="selectinput" >
	<option value="A">UNIVERSITY</option>
	<option value="B">POLYTECHNIC</option>
	<option value="C">COLLEAGUE OF EDUCATION</option>
	<option value="C">PET INSTITUTE</option>
	</select>
	User type
	<select id="selectinput" >
	<option value="student">Student</option>
	<option value="agent">Agent</option>
	</select>
	<center>
	Already a member
	<br><a href="../login">Login</a>
	<br>
	</center>
	
    
    <input type="submit" id="button" value="Sign Up" name="submit"/>
	</form>
 
	';
	?>
 
</div>  
  </body>
</html>