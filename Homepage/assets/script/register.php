<?php
// Check if the form data is valid (you can modify this part according to your validation requirements)
if ($_POST['username'] !== '' && $_POST['password'] !== '' && $_POST['password'] === $_POST['confirm_password']) {
    // Register the user (you can modify this part according to your registration logic)
    // For simplicity, we're just setting a session variable to indicate successful registration

    session_start();
    $_SESSION['isLoggedIn'] = true;

    // Redirect to home page
    header("Location: home.php");
    exit();
} else {
    // Redirect back to the signup page with an error message
    header("Location: signup.php?error=1");
    exit();
}
?>
