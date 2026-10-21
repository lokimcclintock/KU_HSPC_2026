<!DOCTYPE html>

<html>
	<head>
		<title>Gunter's Smithy</title>
	</head>
	<body style="margin: 0;">
	  <?php
	   include_once("header.php");

	   if($_SESSION["logged_in"]): ?>
	  <h1>Place an order for a product.</h1>
	  <h3>Keep in mind that all orders are paid for in store.</h3>
	  <form action="buy.php" method="post">
	    <select name="option">
	      <?php
	       $product_query = mysqli_query($mysqli, "SELECT id, name FROM products");
	       $product_arr = $product_query->fetch_all();

	      foreach($product_arr as $ar) {
	      echo '<option value="'.$ar[0].'">'.$ar[1].'</option>';
	      }
	       ?>
	    </select>
	    <input type="submit"/>
	    </form>
	   <?php else: ?>
	  <p>You must <a href='login.php'>log in</a> or <a href='register.php'>create an account</a> before viewing this page.</p>
	   <?php endif; ?>
	</body>
</html>
