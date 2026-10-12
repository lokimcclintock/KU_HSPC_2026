<!DOCTYPE html>

<html>
	<head>
		<title>Gunter's Smithy</title>
	</head>
	<body style="margin: 0;">
    		<header>
    			<table>
    			<tr>
    				<td><h1><span style="color:aliceblue;">G</span>unter's <span style="color:maroon;">S</span>mithy</h1></td>
    				<td><input placeholder="search" name="search"/></td>
    				<td><button>Place Order</button></td>
    			</tr>
    			</table>
    		</header>
		<?php 
		include_once("config.php");

		echo mysqli_query($mysqli, "DESCRIBE products;");
		?>	
	</body>
</html>
