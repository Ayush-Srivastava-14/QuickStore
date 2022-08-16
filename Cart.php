<?php

$conn = mysqli_connect("localhost","root","","quickstore");

if (!isset($_SESSION)) session_start();
require('NavigationCustomer.html');
$product_id=$_POST['product_id'];
$quantity=$_POST['product_qty'];
$email_id=$_SESSION['email_id'];


$query="select user_id from customer where email_id='$email_id' ";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$user_id=$row['user_id'];

//$user_id=$_SESSION['user_id'];
//echo $user_id;

/*$query="select * from Cart where user_id='$_SESSION['user_id']'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$cart_id=$row['cart_id'];*/

$query2="select * from product where product_id='$product_id' ";
$result2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_assoc($result2);
$price=$row2['price'];



$query3="insert into cart(user_id,product_id,quantity,price,status) values('$user_id','$product_id','$quantity','$price','active')";
$result3=mysqli_query($conn,$query3);

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

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="m1ststyle.css">

</head>
<body>
	<br>
	

<form method="POST" action="Orders.php">

<b>Mode Of Delivery:</b>
                        <select style="width: 20%;" id="mode_of_del" name="mode_of_del" required>
                            <option value="Home Delivery">Home Delivery</option>
                            <option  name="pickup" value="Scheduled_Pick_Up">Scheduled Pick Up</option>
                        </select><br>
               
<p>Write down your Address for HOME DELIVERY.</p>
ADDRESS:
<textarea  rows="15" cols="30"  name="address"></textarea>
<input style="width:20%;" type="submit" value="Place Order"></button>
</form>
</body>
</html>