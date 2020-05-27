<?php
session_start();
include 'DB.php';
  $id = $_SESSION['user_id'];
  ?>

<!DOCTYPE html>
<html>
<head>     
<title>User</title>
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
header {
  background-color:#222930;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color:red;
}
nav {
  float: left;
  width: 30%;
  height: 700px;
  background:#EB593C;
  padding: 20px;
}
nav ul {
  list-style-type: none;
  padding: 10px;
  font-size: 35px;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #ABDCD6;
  height: 700px; 
}
}
</style>
</head>
<body>

<h1></h1>
<p>

</p>

<header>
  <h2 style="font-size: 100px"></i>   <i>DDB INDIA</i></h2>
  <div  class="w3-bar w3-yellow">
      <span class="w3-bar-item w3-button" style="color:yellowgreen "><?php echo $_SESSION['user_name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="w3-bar-item w3-button" style="color:palevioletred"><?php echo $_SESSION['user_id']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <span class="w3-bar-item w3-button" style="color:yellowgreen"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="logout.php" class="w3-bar-item w3-button" style="color:palevioletred">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
    </div></header>


<section>
<nav>
      <div>
          <ul style="height: 650px;">
            <li><a href="validuser.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>User</b></span></a></li>
            <li><a href="viewaccount.php"><span style="margin-left: 25px; margin-top:20px; font-size: 20px;"><b>View Account and Balance</b></span></a></li>
            <li><a href="transfer.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>Transfer Money</b></span></a></li>
            <li><a href="Mytransaction.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>My Transactions</b></span></a></li>
            <li><a href="userupdate.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>Update Profile</b></span></a></li>
            <li><a href="userpassword.php"><span style="margin-left: 25px; margin-top: 20px; font-size: 20px;"><b>Change Password</b></span></a></li>
            </ul>
            </div>
  </nav>
  
  <article>
  <center> <h style="font-size: 70px">Transfer Money</h></center>
<div style="margin-top:20px;   width:500px; height:500px;
    margin-left:250px">
   <center> <form class="" action="" method="POST">
        <fieldset >
            <span style="font-size: 50px">Address</span>
            <input type="text" name="ra" placeholder="Address" style="font-size: 50px"><br>
            <span style="font-size: 50px">Username</span>
            <input type="text" name="amt" placeholder="Username" style="font-size:50px">
            <center> <input type="submit" name="submit" value="Submit" style="font-size: 50px"><center>
        </fieldset>
    </form></center>
</div>
<?php
     if(isset($_POST['submit'])){
      $racc = $_POST['rac'];
      $amount=$_POST['amt'];
        $sql1 = "UPDATE admindata
            SET username = $amount,
            addres=$racc
            WHERE accno = '$id'";
             $temp = mysqli_affected_rows($conn);
             if($temp>0){
               echo "Updated successfully!";
             }
       else{
         echo "Username Exists!!!"
       }}
?>


     </article>
</section>


</body>
</html>