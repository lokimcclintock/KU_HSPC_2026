<?php
include_once('config.php');
include_once('header.php');
include_once('serve.php');

$inputted_hash = hash('sha512', $_POST['password']);

$expected_hash_query = mysqli_query($mysqli, "SELECT password FROM users WHERE username = '" . $_POST['username'] . "'");
$expected_hash_arr = $expected_hash_query->fetch_all();
$expected_hash = $expected_hash_arr[0][0];

if($expected_hash_arr === null) {
		      die("password query failed!");
}

if($inputted_hash == $expected_hash) {
  echo "Accepted. <a href='./'>Continue.</a>";
} else {
  echo "Incorrect Login Info. <a href='./login.php'>Go Back.</a>";
}
?>