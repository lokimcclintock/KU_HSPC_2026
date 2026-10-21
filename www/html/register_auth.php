<!-- register_auth.php
  -- Creates accounts and ensures usernames arent taken.
  -->

<body style="margin:0;">
<?php
include_once('config.php');
include_once('header.php');
include_once('serve.php');

$passwordhash = hash('sha512', $_POST['password']);

// EVIL VARIABLE NAMES !! I'm just too lazy to rewrite this all again.
// besides, this honestly does what i was wanting to do anyways

// checks if username is taken
$expected_hash_query = mysqli_query($mysqli, "SELECT password FROM users WHERE username = '" . $_POST['username'] . "'");
$expected_hash_arr = $expected_hash_query->fetch_all();
$expected_hash = $expected_hash_arr[0][0];

if ($expected_hash != null) {
   echo "Username taken! <a href='./register.php'>Go back.</a>";
} else if ($_POST['username'] != null && $_POST['password'] != null) {
  $stmt = $mysqli->prepare("INSERT INTO users (id, username, password, display_name, admin) VALUES(0, ?, ?, ?, 0)");
$stmt->bind_param("sss", $_POST['username'], $passwordhash, $_POST['username']);
$stmt->execute();

echo "Account created successfully! <a href='./login.php'>Log in.</a>";
}
?>