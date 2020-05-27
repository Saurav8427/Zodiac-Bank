<!DOCTYPE html>
<html lang="en">
<title>Zodiac</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
 img {
  max-width: 100%;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="userlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
    <a href="adminlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Admin</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About</a>
  </div>

  <!-- Navbar on small screens-->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="userlogin.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
    <a href="adminlogin.php" class="w3-bar-item w3-button w3-padding-large">Admin</a>
    <a href="aboutus.php" class="w3-bar-item w3-button w3-padding-large">About</a>
  </div>
</div>
    <br><br>

<!-- Header -->
<header class="w3-container w3-indigo w3-center" style="padding:8px 16px">
<a href="aboutus.php" style="text-decoration:none;">
<h1 class="w3-margin w3-jumbo">
<!--  <img src="flamez.jpg" style="width:275px;height:125px;"> -->
    <img src="circlez.jpg" style="width:105px;height:105px;">ODIAC BANK</h1></a>
</header> 
<img  src="beware.jpg">`
<marquee style="color:black ;font-size:20px;background-color:#fffdd0">Please notify any unauthorised electronic transaction on 1-800-425-3800/1-800-11-2211 immediately.
    Longer the time taken to notify, higher would be the risk of loss to you.</marquee>
<a href="newlogin.php"><img src="secure2.jpg" alt="Bank features"></a>
<div class="w3-container w3-black w3-center w3-opacity w3-padding-34">
    <h1 class="w3-margin w3-xlarge">Open a Account today to save later </h1>
</div>

<!-- Footer -->
<!--
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
 <p><a href="aboutus.php" target="_blank">Zodiac Bank </a></p>
</footer>
-->

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
