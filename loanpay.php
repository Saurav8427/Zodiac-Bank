<?php
session_start();
include_once 'DB.php';
$id = addslashes($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head><title>Loan</title>
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
    <a href="validuser.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">User</a>
    <a href="viewaccount.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Account</a>
    <a href="transfer.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transfer</a>
    <a href="Mytransaction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transaction Details</a>
    <a href="userupdate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update</a>
    <a href="userpassword.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Loan</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
    <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
   <a href="validuser.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><?php echo $_SESSION['user_name']; ?></a>
   <a href="viewaccount.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><?php echo $_SESSION['user_id']; ?></a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="validuser.php" class="w3-bar-item w3-button w3-padding-large">User</a>
    <a href="viewaccount.php" class="w3-bar-item w3-button w3-padding-large">View Account</a>
    <a href="transfer.php" class="w3-bar-item w3-button w3-padding-large">Transfer</a>
    <a href="Mytransaction.php" class="w3-bar-item w3-button w3-padding-large">Transaction Details</a>
    <a href="userupdate.php" class="w3-bar-item w3-button w3-padding-large">Update</a>
    <a href="userpassword.php" class="w3-bar-item w3-button w3-padding-large">Change Password</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-padding-large">Loan</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
    
  </div>
  
</div>

<!--
<div class="w3-row w3-border">
  <div class="w3-half w3-container w3-teal w3-center" style="background-color:#4272d7 ;padding:8px 6px" >
    <h4><?php echo $_SESSION['user_name']; ?></h4>
  </div>
  <div class="w3-half w3-container w3-teal w3-center" style="padding:8px 6px">
    <h4><?php echo $_SESSION['user_id']; ?></h4>
  </div>

</div>
-->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-33">
						Pay Loan
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter a name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter a ID">
						<input class="input100" type="number" name="id4" placeholder="Loan ID">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn"  name="submit" value="Submit">
							OK
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
</body> 
</html>
<?php

$ins_sql9 = "SELECT * FROM admindata WHERE accno ='$id'";
$run_sql9 = mysqli_query($conn, $ins_sql9);
$rol=mysqli_fetch_array($run_sql9);
$Sbalance=$rol['balance'];
     if(isset($_POST['submit'])){
      $racc = $_POST['id4'];
      $nam=$_POST['name'];
      $ins_sql = "SELECT * FROM loan WHERE lid ='$racc'";
	   	$run_sql = mysqli_query($conn, $ins_sql);
      if($rows = mysqli_fetch_array($run_sql)){
     if ($rows['sta']==0)
     {
         if($nam==$rows['uname']){
             
         $amount=$rows['amount'];
      if($Sbalance>=$amount){
          
        $Stotal = $Sbalance - $amount;
        $sql1 = "UPDATE admindata
            SET balance = $Stotal
            WHERE accno = '$id'";
        $run1 = mysqli_query($conn, $sql1);
        // $sql2 = "INSERT INTO trans(saccno,raccno,amount,nam,namee)
        // VALUES('".$id."','".$racc."', '".$amount."','".$fn."','".$namee."')";
        // $run2 = mysqli_query($conn, $sql2);
        $ins_sql2 = "UPDATE loan set sta=2 WHERE lid ='$racc'";
        $run_sql2 = mysqli_query($conn, $ins_sql2);
           $message = "Loan Paid Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
        
      }
        else{
          $message = "Low Balance";
echo "<script type='text/javascript'>alert('$message');</script>";

  
        }}}
      
      else{
        $message = "Invalid Loan Id";
echo "<script type='text/javascript'>alert('$message');</script>";

          
        }}}
?>