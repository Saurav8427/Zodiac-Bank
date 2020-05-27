<?php
session_start();
include_once 'DB.php';
$id = addslashes($_SESSION['user_id']);
$und=addslashes($_SESSION['user_name']);
?>
  <!DOCTYPE html>
<html>
<head>     
<title>Apply for Loan</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-33">
						Apply for Loan
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Amount is required">
						<input class="input100" type="text" name="amount" placeholder="Amount">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Purpose is required">
						<input class="input100" type="text" name="pur" placeholder="Purpose">
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
        $ins_sql = "SELECT * FROM loan where accno='$id'and sta!=2";
        $run_sql = mysqli_query($conn, $ins_sql);
        if($rows = mysqli_fetch_array($run_sql)){
            if($rows['sta']==0){
            header("Location: cloan.php");
        }else if($rows['sta']==1){
            header("Location:reloan.php");
        }}
        else{
            if(isset($_POST['submit'])){
                $pur = $_POST['pur'];
                $amount=$_POST['amount'];
                $sql1 = "INSERT INTO loan(purpose, accno,amount,sta,uname)
                VALUES ('".$pur."', '".$id."', '".$amount."',1, '".$und."')";
                  if($run1 = mysqli_query($conn, $sql1))
                  {
                    $message = "Requested Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
                    $ins_sql3 = "SELECT * FROM loan where accno='$id' and sta!=2";
                    $run_sql3 = mysqli_query($conn, $ins_sql3);
                    $rows = mysqli_fetch_array($run_sql3);
                      $ld=$rows['lid'];
                      $message = "Requested Successfully for and Loan Id is ";
echo "<script type='text/javascript'>alert('$message'+'$ld');</script>";
                  }}
                  else{
                     $message = "You haven't applied for loan yet";
echo "<script type='text/javascript'>alert('$message');</script>";
                  };
		    	
        }
        ?>
   
<marquee style="color:black ;font-size:28px;background-color:white">* Please notify any unauthorised electronic transaction on 1-800-425-3800/1-800-11-2211 immediately.
    Longer the time taken to notify, higher would be the risk of loss to you.</marquee>
