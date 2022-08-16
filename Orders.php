<?php
  $conn = mysqli_connect("localhost","root","","quickstore");
  session_start();
  require('NavigationCustomer.html');
  $address=$_POST['address'];
  $mode_of_del=$_POST['mode_of_del'];
  $email_id=$_SESSION['email_id'];
  $query="select user_id from customer where email_id='$email_id' ";
  $result=mysqli_query($conn,$query);
  $row=mysqli_fetch_assoc($result);
  $user_id=$row['user_id'];
  //product_id and calculated price ??
  $query2="select * from cart where user_id='$user_id' and status='active' ";
  $result2=mysqli_query($conn,$query2);
  $count=0;
  $total_price=0;
  while($row2=mysqli_fetch_assoc($result2)){
      $product_id=$row2['product_id'];
      $price=$row2['price'];
      $quantity=$row2['quantity'];
      $total_price=$total_price + $price*$quantity;

      // cart active status change
      $query3="insert into orders(user_id,product_id,price,mode_of_del,address) values('$user_id','$product_id','$price','$mode_of_del','$address')";
      $result3=mysqli_query($conn,$query3);
      if(!$result3){
        $count=1;
      }
      if($count==1){
        echo "Some Items could not be added to cart";
      }
  }
  //echo $total_price;
  $query4="UPDATE cart set status='close' where status='active' and user_id='$user_id' ";
  $result4=mysqli_query($conn,$query4);
  $query5="select * from orders where user_id='$user_id'";
  $result5=mysqli_query($conn,$query5);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order Placed...</title>
  </head>
  <body>
    <style>
    table, th, td {
    border: 1px solid black;
    }
    </style>
    <div class="cart-view-table-front" >
      <h1 class="text-center text-success">Items Ordered </h1>
    </div>
    <table class="table table-hover table-bordered" style="width:100%">
      <tr>
        
        <th style="text-align:left">Price</th>
        <th style="text-align:left">Mode Of Delivery</th>
        <th style="text-align:left">Address</th>
      </tr>
      <?php
      while($row5=mysqli_fetch_assoc($result5)){
      $total=$row5['price'];
      $mode=$row5['mode_of_del'];
      $addr=$row5['address'];
      ?>
      <tr>
        <td><?php echo $total; ?></td>
        <td><?php echo $mode; ?></td>
        <td><?php echo $addr; ?></td>
        
      </tr>
      <?php } ?>
    </table>
     <table class="table table-hover table-bordered" style="width:50%">
      <tr>
        
        <th style="text-align:left">Total Price</th>
      </tr>
      <tr><br>
        <td><?php echo $total_price; ?></td>
      </tr>
      </table><br>
       
    <?php

    if($mode_of_del=="Scheduled_Pick_Up"){
          
    $query6='SELECT DATE_ADD( DATE_ADD( DATE_FORMAT(now(), "%Y-%m-%d %H:00:00"), INTERVAL IF(MINUTE(now()) < 30, 0, 1) HOUR ) , INTERVAL 2 hour) as mydate';
    $result6=mysqli_query($conn,$query6);
    $row=mysqli_fetch_assoc($result6);
    $pick=$row['mydate'];
    
    ?>
   
    <table class="table table-hover table-bordered" style="width:100%">
      <tr>
        
        <th style="text-align:left">Message</th>
        <th style="text-align:left">Pick Up Time </th>
        <th style="text-align:left">Total Price </th>
      </tr>
      <tr><br>
        <h3>Schedule Pick Up:</h3>
        <td><?php echo "You can get pick up your order any time after" ; ?></td>
        <td><?php echo $pick ; ?></td>
        <td><?php echo $total_price; ?></td>
      </tr>
      </table><br>
      <h1>Thank You For Shopping With QuickStore</h1>
      </body>
</html>
<?php
}
?>