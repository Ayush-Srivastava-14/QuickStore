<?php
if (!isset($_SESSION)) session_start();
require('NavigationAdmin.html');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Administration Portal</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style>
		body {
		background-image: url('images/img2.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: right top;
		background-size: 50% 100%;
		}
		button:hover {
  opacity: 0.8;
}
		</style>
	</head>
	<body>
		<h1 style="font-size: 40px;font-color:green;margin-left: 30px;">Welcome to Our Admin Portal</h1>
		<h4 style="font-size: 20px;font-color:green;margin-left: 30px;" >You can click ADD Products button to add the quantiy of products<br> using their product ID as per your stock.</h4>
		<div >
			<img src="uploads/avatar.png" alt=user width="170" height="180" style="margin-left:220px;padding:20px;border-radius: 60%;">
		</div>
		<div>
			<br><br><br>
			<button  style="background: linear-gradient(to right, #ff105f ,#ffad06);
    margin-top: .3em;
        
   margin-left: 30px;
    right: 5px;
    border: none;
    width: 18%;
    color: white;
    font-weight: bold;
    padding: .8em 0;
    border-radius: 1.6em;
    font-size: 1em;
    cursor: pointer;" 
     type="button" onclick="location.href='http://localhost/QuickStore/addproduct.html'" class="btn btn-success" >ADD Products</button>

			<button   style="background: linear-gradient(to right, #ff105f ,#ffad06);
    margin-top: .3em;
        
   margin-left: 30px;
    right: 5px;
    border: none;
    width: 18%;
    color: white;
    font-weight: bold;
    padding: .8em 0;
    border-radius: 1.6em;
    font-size: 1em;
    cursor: pointer;"  type="button" onclick="location.href='http://localhost/QuickStore/showProduct.php'" class="btn btn-success" >Show Products</button>
		</div>
	</body>
</html>