<?php
require_once('conn/db_connect.php'); // Include the database connection file

// Set header to ensure JSON output
header("Content-Type: application/json");

// Initialize an array to store the results
$response = array();

if (mysqli_connect_errno()) {
    $response["error"] = "Failed to connect to MySQL: " . mysqli_connect_error();
    echo json_encode($response);
    exit();
}

$query = "SELECT * FROM tbl_users";
if ($result = mysqli_query($conn, $query)) {
    $response["count"] = mysqli_num_rows($result);
    $response["users"] = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $response["users"][] = $row;
    }

    // Free result set
    mysqli_free_result($result);
} else {
    $response["error"] = "Query failed: " . mysqli_error($conn);
}

echo json_encode($response);
?>
