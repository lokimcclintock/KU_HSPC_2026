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
		$host = '127.0.0.1';
		$db = 'products'; 
		$user = 'root';
		$pass = '';
		$charset = 'utf8mb4';			
		$dsn = "mariadb:host=$host;dbname=$db;charset=$charset";
		$options = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on error
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch results as associative array
		    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
		];

		try {
		    $pdo = new PDO($dsn, $user, $pass, $options);
		    echo "<h2>Database connection established successfully!</h2>";
		} catch (\PDOException $e) {
		    die("Database connection failed: " . $e->getMessage());
		}

		echo "<hr>";   	 
		?>	
	</body>
</html>
