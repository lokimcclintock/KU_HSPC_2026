<!-- mine.php
  -- Incremental game that serves no other purpose than to be mildly entertaining.
  -->
<!DOCTYPE html>

<html>
	<head>
		<title>Gunter&apos;s Smithy</title>
	</head>
	<body style="margin: 0;">
	  <?php
	   include_once("header.php");

	   if($_SESSION["logged_in"]): ?>
	      <noscript>You need Javascript enabled to play this game!</noscript>
		  
	  <h1>Gunter&apos;s Mine</h1>
	  <h3>How much gold can you collect before your orders are completed?</h3>
	  <p id="gold"></p>
	  <p id="gps"></p>
	  <button onClick="mine()">Mine!</button><br/>
	  <div id="shop"></div>
	  <script src="mine.js"></script>
	  <?php else: ?>
	  <p>You must <a href='login.php'>log in</a> or <a href='register.php'>create an account</a> before viewing this page.</p>
	   <?php endif; ?>
	</body>
</html>
