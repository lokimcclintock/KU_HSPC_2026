<?php
include_once("serve.php")
?>
<header style="background-color: gray;">
    	<table>
	<tr style="height: 4em;">
		<td style="position: absolute;left: 0;"><a href="./" style="text-decoration: none;"><h1 style="color:black;"><span style="color:aliceblue;">G</span>unter's <span style="color:maroon;">S</span>mithy</h1></a></td>
		<td style="position: absolute;right: 0;"><?php
		$login_button = '<a href="./login.php"><button>Log In</button></a>';
		$view_orders_button = '<a href="./orders.php"><button>View Placed Order(s)</button></a>';
		$admin_panel_button = '<a href="./admin_panel.php"><button>Admin Panel</button></a>';
		$logout_button = '<a href="./logout.php"><button>Log Out</button></a>';
		$register_button = '<a href="./register.php"><button>Register</button</a>';
		$settings_button = '<a href="./settings.php"><button>Settings</button></a>';

		if($_SESSION["logged_in"]) {
			 echo "<span style='color: white;'>Hello, " . $_SESSION["username"] . "!</span>";
			 echo $view_orders_button;
			 if($_SESSION['is_admin']) {
			 	echo $admin_panel_button;
			 }
			 echo $logout_button;
			 
		} else {
			echo $login_button;
			echo $register_button;
		}
?></td>
    	</tr>
	</table>
</header>