<?php
include('db_constants.php');

$conn = mysqli_connect($host, $username, $password ,$dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>
