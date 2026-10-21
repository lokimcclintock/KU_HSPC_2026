<body style="margin:0;">
<?php
include_once("header.php");

$product_query = mysqli_query($mysqli, "SELECT name FROM products WHERE id ='". $_POST['option'] ."'");
	       $product_arr = $product_query->fetch_all();
	       $product = $product_arr[0][0];

echo "Your order for \"". $product ."\" has been fulfilled! Please pick it up ASAP.";