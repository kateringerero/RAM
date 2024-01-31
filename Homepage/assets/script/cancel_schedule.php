<?php
require_once('conn/db_connect.php'); // Include the database connection file

$response = array();

if (isset($_POST['reference_id'])) {
    $reference_id = $_POST['reference_id'];

    // Query to delete the appointment based on the reference ID
    $cancelQuery = "UPDATE tbl_schedule SET cancelled_status = 1 WHERE reference_id = ?";
    $stmt = $conn->prepare($cancelQuery);
    $stmt->bind_param("s", $reference_id);

    // if ($stmt->execute()) {
    //     $response["success"] = 1;
    //     $response["message"] = "Appointment successfully cancelled.";
    // } else {
    //     $response["success"] = 0;
    //     $response["message"] = "Error cancelling appointment.";
    // }

        if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $response["success"] = 1;
            $response["message"] = "Appointment successfully cancelled.";
        } else {
            $response["success"] = 0;
            $response["message"] = "No rows updated. Check if the reference ID exists and if the appointment isn't already cancelled.";
        }
        
} else {
    $response["success"] = 0;
    $response["message"] = "Error cancelling appointment: " . $stmt->error;
}


    $stmt->close();

} else {
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing.";
}



echo json_encode($response);
?>



// if (isset($_POST['reference_id'])) {
//     $cancelled_status = $_POST['reference_id'];

//     $cancelQuery = "UPDATE tbl_schedule SET cancelled_status='1' WHERE reference_id =?";
//     $stmt = $conn->prepare($cancelQuery);
//     $stmt->bind_param("i", $cancelled_status);

//     if ($stmt->execute()) {
//         $response["success"] = 1;
//         $response["message"] = "Appointment successfully cancelled.";
//     } else {
//         $response["success"] = 0;
//         $response["message"] = "Error cancelling appointment.";
//     }

//     $stmt->close();

// } else {
//     $response["success"] = 0;
//     $response["message"] = "Required field(s) is missing.";

// }

// $ref_id = $_POST['reference_id'];
// $cancelled_status = 1;
// //$cancelled_reason = $_POST['cancelled_reason'];
// $mysqli = $conn;


//     $sql = "UPDATE tbl_schedule SET cancelled_status = '$cancelled_status' WHERE reference_id = ?";
//     $result = mysqli_query($mysqli, $sql);

//     if ($result) {
//         echo "Record updated successfully";
//     } else {
//         echo "Error updating record: " . mysqli_error($mysqli);
//     }

// $mysqli->close();

// Return the response to the Android application
