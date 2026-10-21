<!-- buy.php
  -- Lets user know their order has been processed.
  -->

<body style="margin:0;">
<?php
include_once("header.php");

$product_query = mysqli_query($mysqli, "SELECT name FROM products WHERE id ='". $_POST['option'] ."'");
	       $product_arr = $product_query->fetch_all();
	       $product = $product_arr[0][0];

$user_id_query = mysqli_query($mysqli, "SELECT id FROM users WHERE username ='". $_SESSION['username'] ."'");
	       $user_id_arr = $product_query->fetch_all();
	       $user_id = $product_arr[0][0];
$user_id = (int)$user_id + 1;

$stmt = $mysqli->prepare("INSERT INTO waitlist (id, product_id, user_id, priority) VALUES(0, ?, ?, 0)");
$stmt->bind_param("ii", $_POST['option'], $user_id);
$stmt->execute();

echo "Your order for \"". $product ." has been placed.";
