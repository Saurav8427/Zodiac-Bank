<?php
session_start();
include 'DB.php';
  $id = $_SESSION['user_id'];
  ?>
<!DOCTYPE html>
<html>
<head>
        <title>
       Admin DDB INDIA</title>
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
    <a href="transfer.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Transfer</a>
    <a href="Mytransaction.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transaction Details</a>
    <a href="userupdate.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update</a>
    <a href="userpassword.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan</a>
  </div>
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="validuser.php" class="w3-bar-item w3-button w3-padding-large">User</a>
    <a href="viewaccount.php" class="w3-bar-item w3-button w3-padding-large">View Account</a>
    <a href="transfer.php" class="w3-bar-item w3-button w3-padding-large">Transfer</a>
    <a href="Mytransaction.php" class="w3-bar-item w3-button w3-padding-large">Transaction Details</a>
    <a href="userupdate.php" class="w3-bar-item w3-button w3-padding-large">Update</a>
    <a href="userpassword.php" class="w3-bar-item w3-button w3-padding-large">Change Password</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-padding-large">Loan</a>
    
  </div>
  
</div>
 
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-33">
						Transfer
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="raccno" placeholder="Account Number">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="amount" placeholder="Amount">
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
     if(isset($_POST['submit'])){
      $racc = $_POST['raccno'];
      $amount=$_POST['amount'];
      if($racc==$id){
          $message = "You can't transfer money to same account";
echo "<script type='text/javascript'>alert('$message');</script>";
      }
      else{
      $ins_sql = "SELECT * FROM admindata WHERE accno ='$racc'";
	   	$run_sql = mysqli_query($conn, $ins_sql);
      if($rows = mysqli_fetch_array($run_sql)){
//        echo $rows['fname'];
        $fn=$rows['fname'];
      $isql1 = "SELECT * FROM admindata WHERE accno ='$id'";
      $run_sql1 = mysqli_query($conn, $isql1);
      $row1 = mysqli_fetch_array($run_sql1);
      $Sbalance=$row1['balance'];
      $namee=$row1['fname'];
      if($Sbalance>=$amount){
        $Stotal = $Sbalance - $amount;
        $sql1 = "UPDATE admindata
            SET balance = $Stotal
            WHERE accno = '$id'";
        $run1 = mysqli_query($conn, $sql1);
        $sql2 = "INSERT INTO trans(saccno,raccno,amount,nam,namee)
        VALUES('".$id."','".$racc."', '".$amount."','".$fn."','".$namee."')";
        $run2 = mysqli_query($conn, $sql2);
        $ins_sql2 = "SELECT * FROM admindata WHERE accno ='$racc'";
        $run_sql2 = mysqli_query($conn, $ins_sql2);
        $row2 = mysqli_fetch_array($run_sql2);
        $Rbalance=$row2['balance'];
        $Rtotal=$Rbalance + $amount;
        $sql5 = "UPDATE admindata
            SET balance = $Rtotal
            WHERE accno = '$racc'";
        $run_sql5 = mysqli_query($conn, $sql5);
        $message = "Transferred Successfully to " ;
echo "<script type='text/javascript'>alert('$message'+'$fn');
</script>";
          
      }
        else{
          $message = "Low balance";
echo "<script type='text/javascript'>alert('$message');</script>";
  
        }}
        
      
      else{
            $message = "Invalid Username";
echo "<script type='text/javascript'>alert('$message');</script>";
        }}}
?>
