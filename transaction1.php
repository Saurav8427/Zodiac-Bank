<?php
session_start();
include 'DB.php';
	?>
<!DOCTYPE html>
<html>
<head>
        <title>
       Transactions</title>
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
    <br><br>

	<?php
            
            $ins_sql = "SELECT * FROM trans ";
            $run_sql = mysqli_query($conn, $ins_sql);
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
								Sender A/c
							</div>
							<div class="cell">
								Sender Name&nbsp;&nbsp;&nbsp;
							</div>
							<div class="cell">
								Reciever A/c
							</div>
							<div class="cell">
                                Reciever Name
							</div> 
							<div class="cell">
								Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
							<div class="cell">
								Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
							
						</div>
		
	</div>
          
                     
                          ';
            while($rows = mysqli_fetch_array($run_sql)){
                    echo '

<div class="limite">
		<div class="container-table00">
			<div class="wrap-table100">
					<div class="table">
						<div class="row">
							<div class="cell">
								'.$rows['saccno'].'
							</div>
							<div class="cell">
								'.$rows['namee'].'
							</div>
							<div class="cell">
                                '.$rows['raccno'].'
							</div>
                            <div class="cell">
                                '.$rows['nam'].'
							</div>

							<div class="cell">
								'.$rows['amount'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</div>
                        
							<div class="cell">
								'.$rows['time'].'
							</div>
							
						
                        </div>
                   </div>
			</div>
		</div>
	</div>
          
                ';}
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
