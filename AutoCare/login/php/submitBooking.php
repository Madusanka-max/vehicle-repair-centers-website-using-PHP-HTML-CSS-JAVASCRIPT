<?php
require('config.php');


// Sanitize the form data
$first = mysqli_real_escape_string($con, $_POST['first']);
$last = mysqli_real_escape_string($con, $_POST['last']);
$vehicle_type = mysqli_real_escape_string($con, $_POST['vehicle_type']);
$services = isset($_POST['services']) ? mysqli_real_escape_string($con, implode(',', $_POST['services'])) : '';
$branch = mysqli_real_escape_string($con, $_POST['branch']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$time = mysqli_real_escape_string($con, $_POST['time']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$vehicle_number = mysqli_real_escape_string($con, $_POST['vehicle_number']);
$other = mysqli_real_escape_string($con, $_POST['other']);

// Insert the form data into the database
$sql = "INSERT INTO booking (first, last, vehicle_type, services, branch, date, time, phone, vehicle_number, other) 
        VALUES ('$first', '$last', '$vehicle_type', '$services', '$branch', '$date', '$time', '$phone', '$vehicle_number', '$other')";

if (mysqli_query($con, $sql)) {
    echo 'Form data submitted successfully!';
    header("Location: ../booking.php");
} else {
    echo 'Error submitting form data: ' . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);

?>
