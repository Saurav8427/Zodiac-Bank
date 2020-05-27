<?php
session_start();
include_once 'DB.php';
$id = addslashes($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html>
<head><title>User DDB INDIA</title>
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
    <a href="loan.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
    <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<!--
    <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large">&nbsp;</a>
    <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large">&nbsp;&nbsp;&nbsp;</a>
    <a href="" class="w3-bar-item w3-button w3-hide-small w3-padding-large">&nbsp;</a>
-->
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
<br><br>
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
  
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
   <h1>You have no active loan.</h1>  
</div>

<marquee style="color:white;font-size:30px;background-color:white">* Please notify any unauthorised electronic transaction on 1-800-425-3800/1-800-11-2211 immediately.
    Longer the time taken to notify, higher would be the risk of loss to you.</marquee>
</body>
</html>