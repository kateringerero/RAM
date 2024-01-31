<?php
require_once('conn/db_connect.php'); // Include the database connection file

$creator_id = isset($_GET['creator_id']) ? $_GET['creator_id'] : null;

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if creator_id is provided
if (!$creator_id) {
    die("Creator ID is required");
}

$response = array(); // Initialize the response array

// Prepared statement to fetch data from tbl_schedule for a specific creator_id
$stmt = $conn->prepare("SELECT * FROM tbl_schedule WHERE creator_id = ? AND cancelled_status != '1'");
$stmt->bind_param("s", $creator_id);  // "s" indicates the data type is string. Adjust if needed.

// Execute the statement
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $response["count"] = $result->num_rows;
    $response["schedules"] = array();

    while ($row = $result->fetch_assoc()) {
        $response["schedules"][] = $row;
    }

    // Free result set
    $result->free();
} else {
    $response["error"] = "Query failed: " . $conn->error;
}

echo json_encode($response);

// Close the MySQLi connection
$stmt->close();
$conn->close();
?>