<body>
<?php
include_once("header.php");
if($_SESSION["logged_in"]):
$waitlist_query = mysqli_query($mysqli, "select waitlist.product_id, row_number() over (order by waitlist.id asc) as row_num from waitlist join users on waitlist.user_id=users.id where username=\"". $_SESSION["username"]."\"");
$waitlist_arr = $waitlist_query->fetch_all();
?>
<p>
<?php
if(!isset($waitlist_arr[0][0])) {
echo "<p>Order something and it will appear here!</p>";
} else{
foreach($waitlist_arr as $ar) {
$product_query = mysqli_query($mysqli, "SELECT name FROM products WHERE id ='". $ar[0] ."'");
	       $product_arr = $product_query->fetch_all();
	       $product = $product_arr[0][0];

echo $product." - #". $ar[1] ."<br/>";
}}
?></p>
<?php else: ?>
<p>You must <a href='login.php'>log in</a> or <a href='register.php'>create an account</a> before viewing this page.</p>
<?php endif; ?>
