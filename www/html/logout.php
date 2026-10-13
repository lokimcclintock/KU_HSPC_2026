<?php
include_once("serve.php");

$_SESSION["username"] = null;
$_SESSION["logged_in"] = 0;
header('Location: ./');
die();
?>