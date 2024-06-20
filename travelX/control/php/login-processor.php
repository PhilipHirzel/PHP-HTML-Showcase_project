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
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$sql = $conn->prepare("SELECT * FROM users_prod WHERE email = ? AND password = ?");
$sql->bind_param("ss", $email, $password);
$sql->execute();
$result = $sql->get_result();

// Check if the credentials match
if ($result->num_rows > 0) {
    // Fetch user data
    $user_data = $result->fetch_assoc();

    // Store user data in session
    $_SESSION['user_id'] = $user_data['user_id'];
    $_SESSION['email'] = $user_data['email'];
    $_SESSION['first_name'] = $user_data['first_name'];
    $_SESSION['last_name'] = $user_data['last_name'];
    $_SESSION['address'] = $user_data['address'];
    $_SESSION['housenumber'] = $user_data['housenumber'];
    $_SESSION['city'] = $user_data['city'];
    $_SESSION['postal_code'] = $user_data['postal_code'];
    $_SESSION['country'] = $user_data['country'];
    $_SESSION['active'] = $user_data['active'];

    // Redirect to session.php
    header("Location: ../../view/subpages/my-account.php");
    exit();
} else {
    // Credentials don't match, display an error message
    echo "Invalid email or password. Please try again.";
}

// Close the connection
$conn->close();
?>
