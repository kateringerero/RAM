<?php
require_once('conn/db_connect.php'); // Include the database connection file

// Get data from the mobile app
// set constraint that cannot make an appointment for the same user for the same day and the same time
$reference_id = generateUniqueReference();
$creator_id = $_POST['creator_id'];
$scheduled_date = $_POST['scheduled_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$purpose = $_POST['purpose'];
$status = 0;
$cancelled_status = 0;
$cancelled_reason = '';

// Create a MySQLi connection
$mysqli = $conn;

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare the INSERT statement
$insert_query = "INSERT INTO tbl_schedule(reference_id, creator_id, scheduled_date, start_time, end_time, purpose, status, cancelled_status, cancelled_reason) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind the parameters
$stmt = $mysqli->prepare($insert_query);
if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}

$stmt->bind_param("ssssssiis", $reference_id, $creator_id, $scheduled_date , $start_time,  $end_time, $purpose, $status, $cancelled_status, $cancelled_reason);

// Execute the query
if ($stmt->execute()) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}

function generateUniqueReference() {
    // Generate a unique reference number (you can customize this as needed)
    $prefix = "RAM";  // Prefix for the reference number
    $random_number = mt_rand(100000, 999999);  // Generate a random 6-digit number

    // Combine the prefix and random number
    $reference_id = $prefix . $random_number;

    return $reference_id;
}

// Close the MySQLi connection
$stmt->close();
$mysqli->close();
?>
