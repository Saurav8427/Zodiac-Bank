<?php
session_start();
include 'DB.php';
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$accno = $_POST['accno'];
		$ifsc = $_POST['ifsc'];
        $email = $_POST['email'];
        $username = $_POST['username'];
		$password = $_POST['password'];
		$balance = $_POST['balance'];
        $pan=$_POST['pan'];
		$addr=$_POST['addre'];
		$ins_sql = "INSERT INTO admindata(fname, accno,ifsc,email,username,password,balance,addres,pan)
        VALUES ('".$fname."', '".$accno."', '".$ifsc."', '".$email."', '".$username."', '".$password."', '".$balance."','".$addr."','".$pan."')";
        $run_sql = mysqli_query($conn,$ins_sql);
        $temp = mysqli_affected_rows($conn);
		if($temp>0){ $message = "Account added Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
		}else{
	          $message = "Something Went Wrong";
echo "<script type='text/javascript'>alert('$message');</script>";
		}
	
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cssaddc/main.css" rel="stylesheet" media="all">
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
    <a href="addacc.php" class="w3-bar-item w3-button w3-padding-large w3-white">Add Acount</a>
    <a href="viewaccounts.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Accounts</a>
    <a href="transaction1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transactions</a>
    <a href="transaction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transactions Details</a>
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
   
   
   
   
   
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="fname">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Account NO.</label>
                                    <input class="input--style-4" type="number" name="accno">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                        <input class="input--style-4" type="text" name="username">
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>
                        </div> 
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">IFSC Code</label>
                                        <input class="input--style-4" type="text" name="ifsc">
                                    </div>
                                </div>
                                <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Account Balance</label>
                                    <input class="input--style-4" type="number" name="balance">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mobile NO.</label>
                                        <input class="input--style-4" type="number" name="pan">
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                        </div>
                            
                           
                        <div class="row row-space">
                           <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address</label>
                                    <input class="input--style-4" type="address" name="addre">
                                </div>
                            </div>
                            
                        </div> 
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    
    
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->