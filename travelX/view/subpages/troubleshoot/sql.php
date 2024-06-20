<?php
$servername = "192.168.68.184";
$username = "webapp_db_user";
$password = "ng%2hB%!";
$dbname = "TravelX_prod";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to $dbname on $servername";
?>