<?php 
if (!isset($_SESSION)) session_start();
require('NavigationCustomer.html');
?>
<!DOCTYPE html>
<html>
<head>
	<style>
#container{
	display: flex; 
  flex-direction: row; 
  width: 100%; 
}
img {
  border-radius: 50%;
}
</style>
	<title>QuickStore HomePage</title>

		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body >
	<h2 >Welcome to HomePage</h2>
<hr /><div class="container-fluid">
		<?php include_once('Slider.php'); ?>
		</div><br><br>
<div id="container">
<p>
	<h4>Noodles Section</h4>
 <a href="/QuickStore/noodles.php">
<img border="0" alt="Noodle" src="uploads/p27.jpg" width="200" height="200">
</a>
</p>

<p>
	<h4 style="position: center;">Chocolate Section</h4>
<a href="/QuickStore/chocolate.php">
<img border="0" alt="Chocolate" src="uploads/11.jpg" width="200" height="200">
</a>
</p>
<p>
	<h4>Health Drinks Section</h4>
<a href="/QuickStore/healthdrink.php">
<img border="0" alt="drink" src="uploads/12.jpg" width="200" height="200">
</a>
</p>
<p>
	<h4>Biscuits Section</h4>
<a href="/QuickStore/biscuit.php">
<img border="0" alt="drink" src="uploads/1.jpg" width="200" height="200">
</a>
</p>

</div>
<br><br><br><br>

<div id="container">
	<h4 >Chips Section</h4>
<a href="/QuickStore/chips.php">
<img border="0" alt="chips" src="uploads/2.jpg" width="200" height="200">
</a>
</p>
	<h4>Basmati Rice Section</h4>
<a href="/QuickStore/rice.php">
<img border="0" alt="chips" src="uploads/8.jpg" width="200" height="200">
</a>
</p>
	<h4>Wheat Flour Section</h4>
<a href="/QuickStore/flour.php">
<img border="0" alt="chips" src="uploads/9.jpg" width="200" height="200">
</a>
</p>

<h4>Pulses Section</h4>
<a href="/QuickStore/pulses.php">
<img border="0" alt="chips" src="uploads/7.jpg" width="200" height="200">
</a>
</p>
</div>
<br><br><br><br>

<p>You can Choose from wide Variety of Products.</p>
</body>
</html>