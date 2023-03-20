<?php
echo "<body style='Background:url(backs/walli.png)'>"."</body>";
#creating connection: server, user, password and database
$s = "localhost";
$u = "root";
$p = "";
$db = "alain_bikes";
$con = mysqli_connect($s, $u, $p, $db);
#testing connection
if(!$con)
{
  die("<h1 style='color: red; font-family: agency fb; font-weight: bold'>The connection denied"."</h1>");
}
$b_ID = $_POST['b_ID'];
$b_names = $_POST['b_names'];
$distance = $_POST['distance'];
$price = $_POST['price'];
$sql = "SELECT * FROM bike_info";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result))
{
  while ($rows = mysqli_fetch_assoc($result))
  {
   echo $b_ID.$b_names.$distance.$price;
   #echo "<h1 style='color: darkgreen; font-family: agency fb; font-weight: bold'>This match your searches</h1>";
  }
}
if(mysqli_num_rows($result)<0)
{
  include'index.html';
?>
<?php
  #echo"<h1 style='color: orange; font-family: agency fb; font-weight: bold'>Sorry, no result"."</h1>";
}

echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='index.html'>Go back</a></li><br><br><br>";
?>
