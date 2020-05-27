<?php
session_start();
include 'DB.php';
	?>
<!DOCTYPE html>
<html>
<head>
        <title>
       Transactions Details</title>
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
    <a href="validadmin.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Admin Page</a>
    <a href="addacc.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Add Acount</a>
    <a href="viewaccounts.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Accounts</a>
    <a href="transaction1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transactions</a>
    <a href="transaction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Transactions Details</a>
    <a href="bacc.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Block Account</a>
    <a href="uacc.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Blocked Accounts</a>
    <a href="loanr.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan Requests</a>
    <a href="loana.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Active Loan</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">    
   <a href="validadmin.php" class="w3-bar-item w3-button w3-padding-large">Admin Page</a>
    <a href="addacc.php" class="w3-bar-item w3-button w3-padding-large">Add Account</a>
    <a href="viewaccounts.php" class="w3-bar-item w3-button w3-padding-large">View Accounts</a>
    <a href="transaction1.php" class="w3-bar-item w3-button w3-padding-large">Transactions</a>
    <a href="transaction.php" class="w3-bar-item w3-button w3-padding-large">Transaction Details</a>
    <a href="bacc.php" class="w3-bar-item w3-button w3-padding-large">Block Account</a>
    <a href="uacc.php" class="w3-bar-item w3-button w3-padding-large">View Blocked Accounts</a>
    <a href="loanr.php" class="w3-bar-item w3-button w3-padding-large">Loan Requests</a>
    <a href="loana.php" class="w3-bar-item w3-button w3-padding-large">Active Loan</a>
    
  </div>
  
</div>
 
 
 
 
 
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-33">
						Transactions Details
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="raccno" placeholder="Transaction ID">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn"  name="submit" value="Submit">
							Find
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
<?php
     if(isset($_POST['submit'])){
      $tid = $_POST['raccno'];
            $ins_sql = "SELECT * FROM trans where tid='$tid'";
            $run_sql = mysqli_query($conn, $ins_sql);
	     	if($rows = mysqli_fetch_array($run_sql)){
		    	echo '
              <!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="csstable/util.css">
	<link rel="stylesheet" type="text/css" href="csstable/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Field
							</div>
							<div class="cell">
								Value
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Transaction Id
							</div>
							<div class="cell" data-title="Age">
								'.$rows['tid'].'
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Sender A/C
							</div>
							<div class="cell" data-title="Age">
								'.$rows['saccno'].'
							</div>
							
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Sender Name
							</div>
							<div class="cell" data-title="Age">
								'.$rows['namee'].'
							</div>
						
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
						        Reciever A/C
							</div>
							<div class="cell" data-title="Age">
								'.$rows['raccno'].'
							</div>
						
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Reciever Name
							</div>
							<div class="cell" data-title="Age">
								'.$rows['nam'].'
							</div>
						</div>
						
						
				        <div class="row">
							<div class="cell" data-title="Full Name">
								Amount
							</div>
							<div class="cell" data-title="Age">
								'.$rows['amount'].'
							</div>
						</div>
                        <div class="row">
							<div class="cell" data-title="Full Name">
								Time
							</div>
							<div class="cell" data-title="Age">
								'.$rows['time'].'
							</div>
						</div>
                        
				</div>
			</div>
		</div>
	</div>

</body>
</html>
			';
		 }else{
       $message = "Invalid Id";
echo "<script type='text/javascript'>alert('$message');</script>";
     } }
		
	?>
	
	
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