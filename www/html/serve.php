<?php
session_start();

$_SESSION["logged_in"] = isset($_SESSION["username"]);
?>
