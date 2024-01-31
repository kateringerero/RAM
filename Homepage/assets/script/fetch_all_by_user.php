<?php
require_once('conn/db_connect.php'); // Include the database connection file
$response = array();
$response["users"] = array();  // Initialize here

if (isset($_GET['creator_id'])) { // Changed from $_POST to $_GET
    $creator_id = $_GET['creator_id']; // Changed from $_POST to $_GET

    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE user_id = ?");
    $stmt->bind_param("s", $creator_id);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($response["users"], $row);  // Push each row into the "users" array
        }
    } else {
        $response["error"] = "No data found for the given creator_id";
    }

    $stmt->close();
} else {
    $response["error"] = "creator_id is not set in the GET data"; // Changed the error message to mention GET instead of POST
}

echo json_encode($response);

?>
