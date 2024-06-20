<?php
// Start the session
session_start();

$servername = "192.168.68.184";
$username = "webapp_db_user";
$password = "ng%2hB%!";
$dbname = "TravelX_prod";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display session data
echo "<h1>Session Data</h1>";
if (!empty($_SESSION)) {
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
} else {
    echo "No session data available.";
}

// Display user data from the database
echo "<h1>Database Data</h1>";

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Prepare and execute the SQL statement
    $sql = $conn->prepare("SELECT * FROM users_prod WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        // Fetch the user data
        $user_data = $result->fetch_assoc();
        echo "<pre>";
        print_r($user_data);
        echo "</pre>";
    } else {
        echo "No user data found for the email: $email";
    }
} else {
    echo "No email found in session.";
}

// Close the connection
$conn->close();
?>
