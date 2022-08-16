
<?php

$conn = mysqli_connect("localhost","root","","quickstore");
if (!$conn) {
  echo "Connection failed: " . mysqli_connect_error();
}else
{
//echo "success";
}


//retrieve form variables
$username=$_POST['admin_id'];
$password=$_POST['psw'];


$count1=0;


	$query = "select * from admin where admin_id = '$username' and password='$password'";
	
    
		    // Fetch the results in an associative array
		$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) > 0){
		  //echo 'Success';
		  
		  session_start();
		  $value = mysqli_fetch_assoc($result);

		
		   $_SESSION['admin_id']=$value["admin_id"];
		   //echo $_SESSION['Name'];
		  //echo  "<br>Name: ".$value["name"];
		   require('AdminHomePage.php');
		}
	else{	
 echo '<html><script>
 	window.open("AdminLogin.html","_self");
		alert("Login Failed");
		
		</script>
		</html>';
		}	





?>