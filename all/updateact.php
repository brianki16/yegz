<?php
$host="localhost";
$user="root";
$userpassword="";
$db="bcsf";
$con=mysql_connect($host,$user,$userpassword);
mysql_select_db($db);
  $name=$_POST['name'];
  $reg_no=$_POST['reg_no'];
  $sql="INSERT INTO classlist(name,reg_no)VALUES('$name','$reg_no')";
  if (!mysql_query($sql))
{
   echo'<script>alert("REG. NO EXIST!")</script></style>';
    echo' <a href="update.php">back</a> ';
}
else {
    echo'<script>alert("SUCCESSFULY SUBMITTED!!")</script>';
    echo'<a href="welcome.php"> go back</a>';
  }
    ?>