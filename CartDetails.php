<?php

$conn = mysqli_connect("localhost","root","","quickstore");

if (!isset($_SESSION)) session_start();
require('NavigationCustomer.html');

$email_id=$_SESSION['email_id'];


$query="select user_id from customer where email_id='$email_id' ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$user_id=$row['user_id'];


$query4="select * from cart where user_id='$user_id' and status='active' ";
$result4=mysqli_query($conn,$query4);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
	<title>Cart Page</title>
</head>
<body>
<div class="cart-view-table-front" >
		<h1 class="text-center text-success">Items in Your Cart</h1>
</div>
<table class="table table-hover table-bordered" style="width:100%">


  <tr>
    
    <th style="text-align:left">Product ID</th>
    <th style="text-align:left">Product Name</th>
    <th style="text-align:left">Price</th>
    <th style="text-align:left">Quantity</th>
  </tr>
  <tr>
  
  		
<?php while($row4=mysqli_fetch_assoc($result4))
{ ?>
  		
    <td><?php echo $row4['product_id']; ?></td>
    <td><?php echo $row2['Pname'] ; ?></td>
    <td><?php echo $row4['price'] ; ?></td>
    <td><?php echo $row4['quantity'] ; ?></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>
