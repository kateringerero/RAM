<?php
require_once('conn/db_connect.php'); // Include the database connection file

$id = $_POST['id'];
$noShowReason = 1;
$complete = 2;
$complete_value = 0;
$mysqli = $conn;

if (isset($_POST['noShow'])) {
    $sql = "UPDATE tbl_schedule SET  status = '$noShowReason' WHERE id = $id";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}
if (isset($_POST['complete'])) {
    $sql = "UPDATE tbl_schedule SET status = '$complete' WHERE id = $id";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}


header("location:../../home.php");
$mysqli->close();
?>
