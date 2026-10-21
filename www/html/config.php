<!-- config.php
  -- Provides connection to MariaDB/MySQL database.
  -->

<?php
// Basic connection settings
$databaseHost = 'localhost';
$databaseUsername = 'db';
$databasePassword = 'OXOqUfKxjWDKv9zw73'; // Change me!
$databaseName = 'ku_hspc_2026';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if ($mysqli->connect_error) {
die($mysqli->connect_error);
}
?>