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
	  <h1>Log In</h1>
	  <form action="auth.php" method="post">
	  username: <input type="text" name="username"><br>
	  password: <input type="password" name="password"><br>
	  <input type="submit">
	  </form>
		<?php
		include_once("config.php");

		
		?>	
	</body>
</html>
