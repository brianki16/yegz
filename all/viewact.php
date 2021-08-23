<?php
$host="localhost";
$user="root";
$userpassword="";
$db="bcsf";
mysql_connect($host,$user,$userpassword);
mysql_select_db($db);
	$name=$_POST['name'];
	$reg_no=$_POST['reg_no'];
	$sql="SELECT name,reg_no from classlist where reg_no='".$reg_no."' limit 1";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1){
		header("location:classinfo.php");
		exit();
	}

	else{

		 echo'<script>alert("INCORRECT IDENTITY!!")</script>';
		 echo"<br><a href='view.php'>back</a>";
	}
	?>