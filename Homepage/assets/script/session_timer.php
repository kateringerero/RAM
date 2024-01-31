<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn']) {
    header("Location: ../index.php"); // Redirect to login page if not logged in
    exit();
}

// Check session timer
if (isset($_SESSION['loginTime']) && time() - $_SESSION['loginTime'] > 900) {
    // If more than 900 seconds (15 minutes) have passed, log the user out
    session_destroy();
    header("Location: ../index.php");
    exit();
}

// If session is still valid, update the login timestamp
$_SESSION['loginTime'] = time(); // Update the timestamp

// Continue with your page content here
?>
