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
$b_names = $_POST['b_names'];
$distance = $_POST['distance'];
$price = $_POST['price'];

$sql = "insert into bike_info(b_names, distance, price) values ('$b_names', '$distance', '$price')";
if (mysqli_query($con, $sql)) 
{?>
<?php
	/*echo("<center><h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Your registration approved!!<br></h1>".mysqli_error($con));
	echo("<h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Now, create your username and password.</center>".mysqli_error($con)."</h1>");*/
	include'sellerinfo.html';?>
<?php
}
else
{
	echo("<h1 style='color: red; font-family: agency fb; font-weight: bold'>Data not saved!!<br>".mysqli_error($con)."</h1>");
}
		//echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='sellform.html'>Go back</a></li>";
?>