<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div id="profile">
<p>
	<?php echo $_SESSION["username"];?>

<p><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<center><a href=login.php><input type="button" style="background-color: green;color:white;width:300px;height: 30px;"value='CONTINUE TO CHATTING'></a></center>
</p>
<p>
	
	<center><a href=index.php><input type="button" style="background-color:royalblue;color:white;width:300px;height: 30px;"value='REGISTER YOURSELF FOR CHATTING'></a></center>
</p>



 <center><b id="logout"><a href="home.php">Log Out</a></b><br></center>

</div>
</body>
</html>