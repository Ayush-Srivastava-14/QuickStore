<?php

$conn = mysqli_connect("localhost","root","","quickstore");
session_start();
require('NavigationCustomer.html');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="m1ststyle.css">
	<title>Flour Page</title>
</head>
<body>
	<h2>Showing Wheat Flour Products</h2>
	<?php 

$query="select * from product where type='flour' ";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){

	?>
		<form method="POST" action="Cart.php">
				
  
  	<img border="0" alt="choco" src='uploads/<?php echo $row['image']; ?>' width="200" height="200">
 

					
				<table class="table table-striped table-hover">
									<tr><td>Product ID <td>
										<input type="hidden" name="product_id" value='<?php echo $row['product_id']; ?>'  ></tr>
									<tr><td>Product Name <td>: <?php echo $row['Pname']; ?></tr>
									<tr><td>Price <td>: <?php echo $row['price']." "; ?><i class="fa fa-inr"></i></tr>
									<tr><td>Quantity</td><td>: <input type="number" name="product_qty" min="0" class="text-center" style="border-radius:3px; border: 1px solid #ddd; width: 50px; margin: 0px auto;"></td></tr>
									<input type="submit"  style="width: 200px;" value="Add To Cart">
									</table>			
		</form>
<?php
 }
?>	
</body>
</html>
