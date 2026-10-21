<!-- buy.php
  -- Processes order and lets user know their order has been processed.
  -->

<body style="margin:0;">
<?php
include_once("header.php");

$product_query = mysqli_query($mysqli, "SELECT name FROM products WHERE id ='". $_POST['option'] ."'");
	       $product_arr = $product_query->fetch_all();
	       $product = $product_arr[0][0];

$user_id_query = mysqli_query($mysqli, "SELECT id FROM users WHERE username ='". $_SESSION['username'] ."'");
	       $user_id_arr = $user_id_query->fetch_all();
	       $user_id = $user_id_arr[0][0];
$user_id = (int)$user_id;

$stmt = $mysqli->prepare("INSERT INTO waitlist (id, product_id, user_id, priority) VALUES(0, ?, ?, 0)");
$stmt->bind_param("ii", $_POST['option'], $user_id);
$stmt->execute();

echo "Your order for \"". $product ." has been placed.";
