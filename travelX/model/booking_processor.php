<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input from the form
    $user_id = $_SESSION['user_id'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $travel_class = $_POST['travel_class'];
    $award_program = $_POST['award_program'];

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

    // Fetch travel package information from the database
    $sql = $conn->prepare("SELECT * FROM travel_packages_prod WHERE destination = ?");
    $sql->bind_param("s", $destination);
    $sql->execute();
    $result = $sql->get_result();

    $package = $result->fetch_assoc();

    // Store the booking details in the bookings table
    $sql = $conn->prepare("INSERT INTO bookings_prod (user_id, departure, destination, start_date, end_date, travel_class, award_program, hotel_name, leg1, leg2, leg3, leg4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("isssssssssss", $user_id, $departure, $destination, $start_date, $end_date, $travel_class, $award_program, $package['hotel_name'], $package['leg1'], $package['leg2'], $package['leg3'], $package['leg4']);
    $sql->execute();

    // Close the connection
    $conn->close();

    // Redirect to the booking confirmation page
    header("Location: ../view/subpages/booking-confirmation.php?destination=" . urlencode($destination) . "&start_date=" . urlencode($start_date) . "&end_date=" . urlencode($end_date) . "&travel_class=" . urlencode($travel_class) . "&award_program=" . urlencode($award_program));
    exit();
} else {
    // Redirect to booking page if not a POST request
    header("Location: ../view/subpages/booking.php");
    exit();
}
?>
