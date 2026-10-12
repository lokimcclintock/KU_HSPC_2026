<!DOCTYPE html>

<html>
	<head>
		<title>Gunter's Smithy</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body style="margin: 0;">
	  <?php
	   include_once("header.php");
	   ?>
	  <p>this is a homepage</p>
		<?php
		include_once("config.php");

		echo mysqli_query($mysqli, "DESCRIBE products;");
		?>	
	</body>
</html>
