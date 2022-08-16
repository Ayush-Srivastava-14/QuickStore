<?php

$conn = mysqli_connect("localhost","root","","quickstore");

require('NavigationAdmin.html');

$product_id=$_POST['product_id'];
$quantity=$_POST['quantity'];


$query="UPDATE product set quantity='$quantity' where product_id='$product_id' ";
$result=mysqli_query($conn,$query);
if($result){
	?>
	<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<body >


<div class="w3-container w3-center w3-animate-top" >
	<h2 style="font-size: 80px;">Products Added Successfully !!!</h2>
	
	</div>

	</body>
	</html>

<?php
}

?>