<?php
 	require 'db_config.php';
 

 	$username=$_POST['user'];
 	$password=$_POST['pass'];

$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	header("Location: welcome.php");
	exit;
}
else{
	echo "username or password is incorrect";
}
$conn->close();
?>