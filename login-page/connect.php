<?php
$config = include("config.php");
$host = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>




