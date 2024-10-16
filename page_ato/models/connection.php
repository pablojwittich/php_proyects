<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123";
$database = "ato_db";

$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>
