<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

header('application/json');
$conn = new mysqli($servername, $username, $password, $dbname);



if($conn->connect_error) {
    echo "{}";
}
?php>
