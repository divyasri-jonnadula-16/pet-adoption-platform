<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data using correct field names
$name = $_POST["name"];  // FIXED
$email = $_POST["email"];  // FIXED
$number = $_POST["number"];
$availability = $_POST["availability"];
$message = $_POST["message"];

// Insert into database
$sql = "INSERT INTO volunteer (name, email, number, availability, message) VALUES ('$name', '$email', '$number', '$availability', '$message')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Booking Successful!'); window.location.href='vet_consult.html';</script>";
    exit;
} else {
    echo "<script>alert('Booking failed! Please try again.'); window.location.href='vet_consult.html';</script>";
    exit;
}

// Close connection
mysqli_close($conn);
?>
