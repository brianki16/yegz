<?php
session_start();
$con=mysqli_connect("localhost","root","");
if(!$con) 
{
    echo"not connection";
}
if(!mysqli_select_db($con,'userdb'))
{
    echo'<p style="background-color:black;color:red;">Database not selected check!!!</p>';
}else{
$name=$_POST['name'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$hash=md5($password_1);
if($password_1 !=$password_2)
echo'<script>alert("PASSWORD DO NOT MATCH!")</script>';
if(is_numeric($name))
echo'<script>alert("SHOULD BE CHARACTERS ONLY!")</script>';

else{
$sql="INSERT INTO users(username,password)VALUES('$name','$password_1')";
if (!mysqli_query($con,$sql))
{
    echo'<script>alert("USERNAME EXIST!")</script>';
}
else {
    echo'<script>alert("SUCCESSFULLY SUBMITTED!")</script>';
}
}
}
?>
<html>
<head>
<body>
<a href="sign_up.html">go back</a>
<h2><a href="login.php">log in now</a></h2>
</body>
</html>