<?php
	require 'db_config.php';

	$username=$_POST['user'];
	$password1=$_POST['pass'];
	$password2=$_POST['passcheck'];
	$email=$_POST['email'];

if($password1==$password2){
	$sql="SELECT * FROM user WHERE username='$username' OR email='$email'";
	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){
		echo "username / email already exist, use another email or username";
	}
	else{
		$query="INSERT INTO user VALUES('$username','$password1','$email')";
		if(mysqli_query($conn,$query)){
			echo "Record saved succesfully";
		}
		else{
			echo "Error";
		}
	}
}
else{
	echo "Confirm Password is not matching";
}
$conn->close();
?>