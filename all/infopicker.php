<?php 
$mongo=new mongoclient();
$db=$mongo->local;
$collection=$db->dataset;
if($_POST){
	$insert=array(
		'username'=>$_POST['username'],
		'password'=>$_POST['password'],
		'email'=>$_POST['email'],
		'hobby'=>$_POST['hobby'],
		'residence'=>$_POST['residence']
	);
	if($collection->insert($insert))
	echo "data submitted successfully";
else{
	echo"no data to store";
}


}


 ?>