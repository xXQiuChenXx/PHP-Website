<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Document</title>
</head>

<body>
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

    $result = $conn->query("SELECT * FROM customers");
    echo '<br>';
    echo '<br>';
    echo '<br>';

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Phone</th></tr>"; // Assuming these are your table columns

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["customerNumber"] . "</td>";
            echo "<td>" . $row["customerName"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

</body>

</html>