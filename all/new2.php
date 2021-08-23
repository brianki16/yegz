<?php
$host="localhost";
$user="root";
$userpassword="";
$db="userdb";
mysql_connect($host,$user,$userpassword);
mysql_select_db($db);
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT username,password from users where username='$uname' AND password='$password' limit 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1){
		header("location:welcome.php");
	}

	else{
		header("location:profile.php");
	}
	?>