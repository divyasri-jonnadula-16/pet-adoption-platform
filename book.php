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
$type = $_POST["type"];  // FIXED
$date = $_POST["date"];
$time = $_POST["time"];

// Insert into database
$sql = "INSERT INTO book (name, type, date, time) VALUES ('$name', '$type', '$date', '$time')";

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
