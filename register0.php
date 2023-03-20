<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="icon" type="image/x-icon" href="backs/ablogobc.png">
<link rel="stylesheet" type="text/css" href="proj.css">
		<style type="text/css">
		body{
			background-color: gray;Background:url(backs/walli.png);
			background-size: 1500px;
			background-attachment: fixed;
		}
		input[type=number]
		{
			border-radius: 10px;
			width: 300px;
			height: 30px;
			font-size: 20px;
			font-family: agency fb;
			font-weight: bold;
			color: darkslategray;
			width: 700px;			
		}
		input[type=text]
		{
			border-radius: 10px;
			width: 200px;
			height: 30px;
			font-size: 20px;
			font-family: agency fb;
			font-weight: bold;
			color: darkslategray;
			width: 700px;
		}
		select
		{
			border-radius: 10px;
			width: 200px;
			height: 30px;
			font-size: 20px;
			font-family: agency fb;
			font-weight: bold;
			color: darkslategray;
			width: 700px;
		}
		input[type=submit]
		{
			border-radius: 10px;
			font-size: 40px;
			font-family: agency fb;
			font-weight: bold;
			color: darkgreen;
		}
		fieldset
		{
			width: 440px;
			margin-top: 180px;
			margin-right: 280px;
			margin-left: 280px;
			border-radius: 10px;
		}
		legend
		{
			text-align: center;
			font-size: 25px;
			color: darkgreen;
			font-weight: bold;
			font-family: algerian;
		}
		#a{font-size: 40px; font-weight: bold;}
		p{color: darkgreen; font-family: agency fb; font-weight: bold; font-size: 20px;}
li,ul{list-style-type: none;text-decoration: none;}
a:link{text-decoration: none; color:gray; font-size: 30px;}
a:visited{color: goldenrod; font-weight: bolder; }
a:hover{color: orange; background-color: greenyellow;}
/*a:active{color: red;}*/
ul li{list-style-type: none; float:left; text-align: center;border: solid 2px gray;width: 170px; background-color: #e9e9e9; border-radius: 10px;}
ul{display: inline;font-family:agency fb; font-weight: bold;}
ul li:hover{background-color: greenyellow;}
#z
{
  height: 40px;
  border-radius: 10px;
  width: 400px;
}
	</style>
</head>
<body>
<?php
// define variables and set to empty values
$full_namesErr = $emailErr = $cityErr = $phone_numberErr = "";
$full_names = $email = $city = $country = $phone_number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["full_names"])) {
    $full_namesErr = "full_names is required";
  } else {
    $full_names = test_input($_POST["full_names"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["phone_number"])) {
    $phone_number = "phone_number is required";
  } else {
    $phone_number = test_input($_POST["phone_number"]);
  }

  if (empty($_POST["country"])) {
    $country = "country is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
  }
    if (empty($_POST["street"])) {
    $streetErr = "city is required";
  } else {
    $city = test_input($_POST["street"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<div class="topnav">
    <ul>
       <li><a href="index.html">HOME</a></li>
       <li><a href="register.html">REGISTER</a></li>
       <li><a href="report.html">REPORT</a></li>
       <input id="z" type="text" placeholder="Search..">
       <a href="index.html"><img src="backs/ablogobc.png" alt="Colorised logo" width="180px" height="150px" style="position: absolute;"></a>
    </ul>    
</div>
<div class="topnav">
    <!--<li><a href="cart.html"><input id="x" type="submit" value="Cart>" style="position: unset; background: url(backs/cart.png); background-size: 40px; background-repeat: no-repeat;" ></a>
    </li>-->
</div><br><br><br>
	<fieldset style="background: url(backs/Ninja.png); background-position: center; background-repeat: no-repeat;">
		<p id="a">Please fill this form to continue!</p>
		<legend>Buyer Information</legend>
			<form action="register.php" method="post">
				<p>Full names:</p><input type="text" placeholder="e.g:  Alain Divin" name="full_names" required><br>
				<p>Email:</p><input type="text" placeholder="e.g: alain04@example.com" name="email" required><br>
				<p>Phone_number:</p><input type="text" placeholder="e.g: +25078..." name="phone_number" required><br>
				<p>Residence Information:<br>
				<p>Country:</p><input type="text" placeholder="e.g: Rwanda" name="country" required><br>
				<p>City:</p>
		<select name="city">
				<option value="Select your City">Select your City</option>
				<option value="Kigali City">Kigali City</option>
				<option value="South Province">South Province</option>
				<option value="North Province">North Province</option>
				<option value="East Province">East Province</option>
				<option value="West Province">West Province</option>
		</select><br>
				<p>Street:</p><input type="text" placeholder="e.g: KN 92 ST" name="street" required><br><br>
				<input type="submit" value="Register">
			</form>
	</fieldset>
<marquee align="left"><h1 style="color:darkgreen;font-family:algerian;background-color:whitesmoke; border-radius: 30px; text-align: center" >Alain Bikes Buy & Sell Store</marquee></h1>
</body>
</html>