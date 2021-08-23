<?php
$con=mysql_connect('localhost','root','','bcsf');
mysql_select_db(bcsf);
$query="SELECT * from classlist";
$result=mysql_query($query);
echo '<center><a href="view.php">back</a></center>';
while ($row=mysql_fetch_array($result)) 
{

echo "<tr><td><br>";
echo $row['reg_no'];
echo"=========";
echo "<tr><td>";
echo $row['name'];
echo"<br>";
}
echo"</tables>";

?>
<html>
<body>
	<body bgcolor="orange">

</body>
