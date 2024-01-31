<?php
include('db_constants.php');

$dsn = "pgsql:host=$host;dbname=$dbname;user=$username;password=$password";

try {
    $pdo = new PDO($dsn);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>
