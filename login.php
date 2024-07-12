<?php
// Load database configuration from the config file
$config = include('config.php');

// Database connection parameters
$host = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

// Create a new MySQLi object for database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Use $conn for database operations
// Example: $result = $conn->query("SELECT * FROM your_table");

// Close the connection when done
$conn->close();
?>
