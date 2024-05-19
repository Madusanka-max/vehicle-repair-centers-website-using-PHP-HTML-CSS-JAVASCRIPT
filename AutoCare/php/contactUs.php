<?php
require('config.php');

// Get data from POST request
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)";

$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    $result = $stmt->execute();

    if ($result) {
        echo "Message sent successfully!";
        header("location: ../contact.php");
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error preparing statement: " . $con->error;
}

$stmt->close();
$con->close();
?>
