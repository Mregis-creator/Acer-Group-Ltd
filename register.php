<?php
echo "<body style='Background:url(backs/walli.png)'>"."</body>";
#creating connection
$s = "localhost";
$u = "root";
$p = "";
$db = "alain_bikes";
$con = mysqli_connect($s, $u, $p, $db);
#testing connection
if(!$con)
{
	die("<h1 style='color: red; font-family: agency fb; font-weight: bold'>Connection denied"."</h1>".mysqli_error($con));
}
#Receiving form data
$fname = $_POST['full_names'];
$email = $_POST['email'];
$pnumber = $_POST['phone_number'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$sql = "insert into buyer_info(full_names, email, phone_number, country, city, street) values ('$fname', '$email', '$pnumber', '$country', '$city', '$street')";
if (mysqli_query($con, $sql)) 
{?>
<?php
	echo("<center><h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Your registration approved!!<br></h1>".mysqli_error($con));
	echo("<h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Now create your username and password.</center>".mysqli_error($con)."</h1>");
	include'account.html';?>
<?php
}
else
{
	echo("<center><h1 style='color: red; font-family: agency fb; font-weight: bold'>Registration failed!!<br>".mysqli_error($con)."</h1></center>");
	echo "<center><a href='register.html' style='text-decoration: none; color:gray; font-size: 30px;background-color: greenyellow;text-align: center;border: solid 4px gray; padding: 4px;'>Try again!</a></center>";
}
?>