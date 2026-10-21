<!-- serve.php
  -- Included in header.php. Sets session variables.
  -->

<?php
include_once('config.php');
session_start();

$_SESSION["logged_in"] = isset($_SESSION["username"]);
$expected_hash_query = mysqli_query($mysqli, "SELECT admin FROM users WHERE username = '" . $_SESSION['username'] . "'");
$expected_hash_arr = $expected_hash_query->fetch_all();
$_SESSION['is_admin'] = $expected_hash_arr[0][0] == 1;
?>
