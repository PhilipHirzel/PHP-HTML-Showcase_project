<?php
// Start the session
session_start();

// Database connection details
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

// Get the input from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$housenumber = $_POST['housenumber'];
$city = $_POST['city'];
$postal_code = $_POST['postal_code'];
$country = $_POST['country'];
$active = 1; // New users are active by default

// Prepare and execute the SQL statement to insert user data
$sql = $conn->prepare("INSERT INTO users_prod (first_name, last_name, email, password, address, housenumber, city, postal_code, country, active) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("sssssssssi", $first_name, $last_name, $email, $password, $address, $housenumber, $city, $postal_code, $country, $active);

if ($sql->execute()) {
    // Get the user ID of the newly inserted user
    $user_id = $sql->insert_id;

    // Store user data in session
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['address'] = $address;
    $_SESSION['housenumber'] = $housenumber;
    $_SESSION['city'] = $city;
    $_SESSION['postal_code'] = $postal_code;
    $_SESSION['country'] = $country;
    $_SESSION['active'] = $active;

    // Redirect to session.php
    header("Location: ../../view/subpages/troubleshoot/session.php");
    exit();
} else {
    echo "Error: " . $sql->error;
}

// Close the connection
$conn->close();
?>
