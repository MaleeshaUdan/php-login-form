<?php

	$servername="127.0.0.1";
	$username="root";
	$password="";
	$dbname="newtest";
	
	$conn=new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("Database Not Connected".$conn->connect_error);
	}

?>