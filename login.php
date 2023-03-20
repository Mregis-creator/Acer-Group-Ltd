<?php
echo "<body style='Background:url(backs/walli.png)'>"."</body>";
#creating connection
$s = "localhost";
$u = "root";
$p = "";
$db = "alain_bikes";
$con = mysqli_connect($s, $u, $p, $db);
//mysqli_select_db($db);

if (isset($_POST['username']))
{
	$username = $_POST['username'];
	$passwords = $_POST['passwords'];

	$sql = "select * from buyers where username='".$username."' AND passwords='".$passwords."' limit 1";

	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result)==1)
	{ 
		include 'gallery.html';

		#echo "<h1 style='color: darkslategray; font-family: agency fb; font-weight: bold'>Login successfully!</h1>";
		exit();
	}
	else
	{
		#echo "<h1 style='color: red; font-family: agency fb; font-weight: bold'>Oops, password or username looks incorrect!!</h1>";
		echo "<center><a href='login.html'><img src='backs/oops.png' width='1000px' height='600px'></a></center>";
		exit();
	}
}

?>