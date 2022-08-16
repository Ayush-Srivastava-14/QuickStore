
<?php

//retrieve form variables
$email_id=$_POST['email_id'];
$password=$_POST['psw'];

// Create connection to Oracle

$conn = mysqli_connect("localhost","root","","quickstore");


	$query = "select * from customer where email_id = '$email_id' and password='$password'";
	$stid = mysqli_query($conn, $query);
   
		    // Fetch the results in an associative array
		if(mysqli_num_rows($stid))
		{

		$row=mysqli_fetch_assoc($stid);
		  //echo 'Success';
		  
		  session_start();
		  

		  $_SESSION['email_id']=$row['email_id'];
		  // echo $_SESSION['NAME'];
		   require('HomePage.php');
		}

		else
		{
		
		 echo '<html><script>
		 	window.open("reglog.html","_self");
				alert("Login Failed");
				
				</script>
				</html>';
		}	



// Close the Oracle connection
mysqli_close($conn);

?>