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
$username = $_POST['username'];
$passwords = $_POST['passwords'];

$sql = "insert into sellers(username, passwords) values ('$username', '$passwords')";
if (mysqli_query($con, $sql)) 
{
	#echo("<center><h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Your account was created successfully!!<br></h1>".mysqli_error($con));
	include'login.html';?>
<?php
}
else
{
	echo("<center><h1 style='color: red; font-family: agency fb; font-weight: bold'>account creation failed<br>".mysqli_error($con)."<br>The username you entered was taken.</h1></center>");

		echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='account.html'>GO BACK</a></li><br><br>";

		echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='index.html'>HOME</a></li>";
}
?>
