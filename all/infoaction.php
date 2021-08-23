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
$username=$_POST['username'];
$password_1=md5($_POST['password_1']);
$password_2=md5($_POST['password_2']);
$email=$_POST['email'];
$hobby =$_POST['hobby'];
$residence =$_POST['residence'];
if($password_1 !=$password_2)
echo "password does not match!";
elseif(is_numeric($username))
echo'<b <p style="color:red;">NAME should be <b>characters!</b></p></b>';

else{
$sql="INSERT INTO dataset(username,password,email,hobby,residence)values('$username','$password_1','$email','$hobby','$residence')";
if (!mysqli_query($con,$sql))
{
    echo'<b <p style="color:red;">UNable to submit! Try again!!!</p></b>';
}
else {
    echo'<b <p style="color:green;">SUCCESSFULLY SUBMITTED!!!!</p></b>';
}
}
}
?>
<html>
<head>
<body>
<a href="info.php">go back</a>
<h2><a href="login.php">log in now</a></h2>
</body>
</html>