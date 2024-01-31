<?php
session_start();
require_once('conn/db_connect.php'); // Include your database connection file

if(isset($_POST['user_id']) && isset($_POST['password'])) {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Create a MySQLi connection
    $mysqli = $conn;

    // Check if the connection was successful
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare and execute the query
    $stmt = $mysqli->prepare("SELECT * FROM tbl_users WHERE user_id = ? AND password = ?");
    $stmt->bind_param("ss", $user_id, $password);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the user data
    $user = $result->fetch_assoc();

    if($user) {

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['loginTime'] = time();
        header("Location: ../../home.php");
        exit();
    } else {
        $response = "failed";
        #create a modal for login error
        header("Location: ../../../index.php?error=1");
        exit();
    }

    // Close the MySQLi connection
    $mysqli->close();
}
?>
