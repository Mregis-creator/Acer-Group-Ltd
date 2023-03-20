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
$sql = "SELECT * FROM buyer_info";
$result = mysqli_query($con, $sql);
?>
<center>
	<table border="2" cellspacing="0" cellpadding="10" bgcolor="#303330">
  <tr bgcolor="skyblue">
    <th>Buyer ID</th>
    <th>Full Names</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Country</th>
    <th>City</th>
    <th>Street</th>
  </tr>
<?php 
if(mysqli_num_rows($result))
{
	while ($rows = mysqli_fetch_assoc($result))
	{
?>
<tr bgcolor="bisque">
   <td><?php echo $rows['buyer_ID']; ?> </td>
   <td><?php echo $rows['full_names']; ?> </td>
   <td><?php echo $rows['email']; ?> </td>
   <td><?php echo $rows['phone_number']; ?> </td>
   <td><?php echo $rows['country']; ?> </td>
   <td><?php echo $rows['city']; ?> </td>
   <td><?php echo $rows['street']; ?> </td>
 </tr>
 </center>
 <?php 		
	}
}
if(mysqli_num_rows($result)<0)
{
	echo"<h1 style='color: orange; font-family: agency fb; font-weight: bold'>Sorry, your table is empty"."</h1>";
}
?>
<?php  
echo"<li style='list-style-type: none; float:left; text-align: center;border: solid 2px black;width: 100px; background-color: darkslategray;'><a style='text-decoration: none; color: yellow' href='report.html'>Go back</a></li><br><br><br>";
?>
<h1 style="color: #303330; font-family: agency fb; font-weight: bold; font-size: 40px;">Buyer Information Table</h1>
