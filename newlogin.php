<?php
session_start();
if(isset($_SESSION['user_id'])!="") {
}
include_once 'DB.php';
if (isset($_POST['submit']))
{
    $us=$_POST["username"];
    $pa=$_POST["password"];
    $ins_sql = "SELECT * FROM admindata WHERE username ='$us'";
		$run_sql = mysqli_query($conn, $ins_sql);
		if($rows = mysqli_fetch_array($run_sql)){
            if($us==$rows['username'] && $pa==$rows['password']){if($rows['st']==1){
                header("Location: block.php");
              }else{
                $_SESSION['user_id'] = $rows['accno'];
		        $_SESSION['user_name'] = $rows['fname'];
                header("Location: validuser.php");
            }
            }
            else{
                $message = "Invalid Password";
echo "<script type='text/javascript'>alert('$message');</script>";
            }}else{
                $message = "Invalid Username";
echo "<script type='text/javascript'>alert('$message');</script>";
            }}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<!--===============================================================================================-->
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="userlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Login</a>
    <a href="adminlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="userlogin.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="adminlogin.php" class="w3-bar-item w3-button w3-padding-large">Admin</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-padding-large">About</a>
  </div>
  
  <div class="w3-container w3-black w3-center w3-opacity w3-padding-44">
   <h1>Login here to begin.</h1>
  
</div>  		
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn"  name="submit" value="Submit">
							Sign in
						</button>
					</div>

<!--
					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="adminlogin.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
-->
				</form>
			</div>
		</div>
	</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>