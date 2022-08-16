<?php

$conn = mysqli_connect("localhost","root","","quickstore");

if (!isset($_SESSION)) session_start();
require('NavigationAdmin.html');

$query="select * from product";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Products</title>
</head>
<body>
<div class="cart-view-table-front" >
		<h1 class="text-center text-success">Products in Your Inventory</h1>
</div>
<table class="table table-hover table-bordered" style="width:100%">


  <tr>
    
    <th style="text-align:left">Product ID</th>
    <th style="text-align:left">Product Name</th>
    <th style="text-align:left">Price</th>
    <th style="text-align:left">Quantity</th>
  </tr>
  <tr>
  
  		
<?php while($row=mysqli_fetch_assoc($result))
{ ?>
  		
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['Pname'] ; ?></td>
    <td><?php echo $row['price'] ; ?></td>
    <td><?php echo $row['quantity'] ; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
