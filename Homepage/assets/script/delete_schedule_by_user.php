<?php
// Database connection parameters
$host = "your_host";
$user = "your_username";
$pass = "your_password";
$db = "your_database_name";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get reference_id from GET or POST request
$reference_id = $_REQUEST['reference_id'];

// SQL query to delete appointment based on reference_id
$sql = "DELETE FROM appointments_table WHERE reference_id = '$reference_id'";

// Execute the query and check result
if ($conn->query($sql) === TRUE) {
    echo json_encode(array("status" => "success", "message" => "Appointment deleted successfully."));
} else {
    echo json_encode(array("status" => "error", "message" => "Error deleting appointment: " . $conn->error));
}

// Close the connection
$conn->close();
?>
