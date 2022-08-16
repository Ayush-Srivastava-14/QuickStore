<?php

	//retrieve form variables
	$uname=$_POST['name'];
	$uphone=$_POST['phone'];
	$uemail=$_POST['email'];
	$password=$_POST['psw'];

$conn = mysqli_connect("localhost","root","","quickstore");

	$query = "insert into customer(name,mobile_no,email_id,password) values('$uname','$uphone','$uemail','$password')";	


	// Fetch the results in an associative array
	if (mysqli_query($conn, $query)){
	  echo '<i>Success<i>';
	  require('reglog.html');

	}
	else{
	  echo '<b>Failure</b>';
	}

?>



