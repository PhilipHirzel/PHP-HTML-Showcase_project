<?php
// Database connection details
$servername = "-";
$username = "webapp_db_user";
$password = "ng%2hB%!";
$dbname = "TravelX_prod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch available destinations from the database
$sql = "SELECT destination FROM travel_packages_prod";
$result = $conn->query($sql);

$destinations = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $destinations[] = $row['destination'];
    }
}

// Close the connection
$conn->close();
?>
