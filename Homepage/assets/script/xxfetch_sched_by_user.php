<?php
require_once('conn/db_connect.php'); // Include the database connection file

$query = "
SELECT DISTINCT tbl_users.*, tbl_schedule.*
FROM tbl_users
INNER JOIN tbl_schedule ON tbl_users.user_id = tbl_schedule.creator_id
WHERE creator_id ='03-2223-040326'
";

// Create a MySQLi connection
$mysqli = $conn;

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Execute the query
$result = $mysqli->query($query);
echo json_encode($result);
if (!$result) {
    die("Query failed: " . $mysqli->error);
}


// Close the MySQLi connection

$mysqli->close();
?>
