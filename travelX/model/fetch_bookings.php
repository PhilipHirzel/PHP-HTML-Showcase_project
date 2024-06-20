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

// Fetch bookings
$user_id = $_SESSION['user_id'];
$sql = $conn->prepare("SELECT * FROM bookings_prod WHERE user_id = ?");
$sql->bind_param("i", $user_id);
$sql->execute();
$result = $sql->get_result();
$bookings = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

// Close the connection
$conn->close();
?>
