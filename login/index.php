<?php
session_start();
if(isset($_SESSION["student_email"])){
header("Location: ../home");
exit(); }
if(isset($_SESSION["agent_email"])){
header("Location: ../admin");
exit(); }
?>


<html>
	<body>
		<div class="wrapper">
			<center>
			<a href="../">
			<img src="../images/logo.png" width="200px" height="80px" title="wisewealth logo"/> <br>
			</a>
			</center>
<?php
require('../phpfiles/dbconnect.php');//DBCONNECTION

// If form submitted, insert values into the database.
if (isset($_POST['email']))
{
    // removes backslashes
	$email = stripslashes($_REQUEST['email']);
    //escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);	
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
	$query = "SELECT * FROM `student_profile` WHERE email='$email' 
	and password='".md5($password)."'";	
	$query1 = "SELECT * FROM `agent_profile` WHERE username='$email' 
	and password='$password'";
	
	FUNCTION error(){
	echo '<form class="login" METHOD="POST"  >
    <p class="title">Log in</p>
    <p class="title">Wrong user and password combination</p>
    Email
	<input type="text" placeholder="email" name="email" required/>
	
	password
	<input type="password" placeholder="*********" name="password"/>
	<center>
	<a href="#">Forgot Password</a>
	<br>
	Not yet a member
	<br><a href="../signup">Signup</a>
	<br>
	</center>
    <input type="submit" id="button" value="Login"/>
	</form>
	<footer><a target="blank" href="#">A FINIFY PRODUCTION</a></footer>
	</p>';
	}
	
	$result = mysqli_query($con,$query) ;
	$result1 = mysqli_query($con,$query1);
	$rows = mysqli_num_rows($result) ;
	$rows1 = mysqli_num_rows($result1) ;
         
	if($rows==1)
	{
	$_SESSION['email'] = $email;
    // Redirect user to index.php
	header("Location:../home");
	}
	else if($rows1==1)
	{
	$_SESSION['adminemail'] = $email;
    // Redirect user to index.php
	eader("Location:../admin");
	}
	else
	{
	error();
	}
}
else
{
?>

<form class="login" METHOD="POST"  >
    <p class="title">Log in</p>
    Email
	<input type="text" placeholder="email" name="email" required/>
	
	password
	<input type="password" placeholder="*********" name="password"/>
	<center>
	<a href="#">Forgot Password</a>
	<br>
	Not yet a skulcrib member
	<br><a href="../signup">Signup</a>
	<br>
	</center>
    <input type="submit" id="button" value="Login"/>
 </form>
 
 
  </p>
</div>

	<?php } 
require('header.php');	
?>
    
    
  </body>
</html>


