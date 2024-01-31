<?php
require_once('conn/db_connect.php');

$user_id = $_POST['user_id'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$password = $last_name;

$mysqli = $conn;

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if the user_id already exists
$check_query = "SELECT user_id FROM tbl_users WHERE user_id = ?";
$check_stmt = $mysqli->prepare($check_query);
$check_stmt->bind_param("s", $user_id);
$check_stmt->execute();
$check_stmt->store_result();

if ($check_stmt->num_rows > 0) {
    echo "Error: User ID already exists.";
} else {
    $insert_query = "INSERT INTO tbl_users (user_id, first_name, middle_name, last_name, email_address, password) 
                     VALUES (?, ?, ?, ?, ?, ?)";
    
    $stmt = $mysqli->prepare($insert_query);
    $stmt->bind_param("ssssss", $user_id, $first_name, $middle_name, $last_name, $email_address, $password);

    if ($stmt->execute()) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$check_stmt->close();
$mysqli->close();
?>