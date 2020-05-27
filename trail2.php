<?php
session_start();
include 'DB.php';
	?>
<!DOCTYPE html>
<html>
<head><title> Admin DDB INDIA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<style>
    nav {margin-top:30px;
  float: left;
  width:400px;
  height: 650px;
  background:black;
  padding:40px;

}
body {margin:0;
}
.ula {
  margin: 0;
  padding: 0;
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
  height:50px;
}
li {
  float: right; 
}
.lia{
    float:left;
}
li a {
  display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;
}
.tvs{
    float:left;
    margin-left:15px;
    font-size:45px;
    color: #00adb5;
    
}
footer {
  background-color:black;
  padding: 5px;
  text-align:center;
  color:red;
  font-size: 25px;
}
</style>
</head>
<body bgcolor="#393E46">

<ul class="ula">
  <li class="tvs"><i>DDB India</i>  <i class="fas fa-university"></i></li>
  <li><a href="logout.php">Logout</a></li>
  <li> <i style="display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;" class="fas fa-users-cog"></i></li>
  <li><i style="display:block;
  color: #00adb5;
  text-align: center;
  padding: 0px 20px;
  text-decoration: none;
  font-size: 40px;" >Admin</i></li>

</ul>
<section>
<nav>
<div>
	<ul style="height: 600px;font-size:60px">
        <li class="lia"><a href="validadmin.php"><b>Admin</b></a></li>
        <li class="lia"><a href="addacc.php"><b>   Add Account</b></a></li><br>
        <li class="lia"><a href="#"><b>   Block Account</b></a></li><br>
        <li class="lia"><a href="transaction.php"><b>Transaction Detail</b></a></li>
        <li class="lia"><a href="transaction1.php"><b>ALL Transactions</b></a></li><br>
		<li class="lia"><a href="viewaccounts.php"><b>View Accounts</b></a></li><br>
        <li class="lia"><a href="#"><b>Blocked Accounts</b></a></li><br>
        <li class="lia"><a href="#"><b>Loan Requests</b></a></li>
        <li class="lia"><a href="#"><b>Active Loan</b></a></li>
  </ul>
		</div>
  </nav>
  <article>
  
  <center> <h style="font-size: 50px">Transaction ID</h></center>
   <form class="" action="" method="POST">
        <fieldset >
            <span style="font-size: 45px">Transaction ID</span><br>
            <input type="text" name="raccno" placeholder="ID" style="font-size: 45px" required ><br>
            <center> <input type="submit" name="submit" value="Submit" style="font-size: 45px"><center>
        </fieldset>
    </form>
<?php
     if(isset($_POST['submit'])){
      $tid = $_POST['raccno'];
            $ins_sql = "SELECT * FROM trans where tid='$tid'";
            $run_sql = mysqli_query($conn, $ins_sql);
	     	if($rows = mysqli_fetch_array($run_sql)){
		    	echo '
              <center>  <table border="1" style="font-size: 30px;color: red;height:50% ;width: 50%;border-color:black;text-align: center">
                <caption><strong  style="color:yellow;font-size:50px" ></i>Transaction Details</strong></caption>
				   	<tbody>
				      <tr>
				        <td>ID</td>
				        <td>'.$rows['tid'].'</td>
					  </tr>
					  <tr>
					  <td>Sender Acc.</td>
					  <td>'.$rows['saccno'].'</td>
					</tr>
				      <tr>
				        <td>Sender Name</td>
				        <td>'.$rows['namee'].'</td>
				      </tr>
				      <tr>
				        <td>R Acc.</td>
				        <td>'.$rows['raccno'].'</td>
				      </tr>
				      <tr>
				        <td>R Name</td>
				        <td>'.$rows['nam'].'</td>
				      </tr>
				      <tr>
				        <td>Amount</td>
				        <td>'.$rows['amount'].'</td>
                      </tr>
                      <tr>
				        <td>Time</td>
				        <td>'.$rows['time'].'</td>
				      </tr>
				    </tbody>
                </table>
                <br><br></center>
				
			';
		 }else{
       echo'INVALID ID !!!!!';
     } }
		
	?>
     </article>
</section>

</body>
</html>
