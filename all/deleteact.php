<?php
$host="localhost";
$user="root";
$userpassword="";
$db="bcsf";
$con=mysql_connect($host,$user,$userpassword);
mysql_select_db($db);
$name=$_POST['name'];
$reg_no=$_POST['reg_no'];
  $sql="DELETE FROM `bcsf`.`classlist` WHERE `classlist`.`reg_no`='$reg_no' ";
    if (mysql_query($sql)){
    echo'<script>alert("DELETED SUCCESSFULLY!")</script>';
    echo'<a href="welcome.php">back</a';
    $req="INSERT INTO `userdb`.`backup` (`username`, `reg_no`) VALUES ('$name', '$reg_no')";
    if (mysql_query($req)){
    echo'<a href="welcome.php">back</a';
}
else{
	echo"not deleted!";
}
}

?>