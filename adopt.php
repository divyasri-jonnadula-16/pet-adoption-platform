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
$fname = $_POST["firstName"];  // FIXED
$lname = $_POST["lastName"];
$email = $_POST["email"];  // FIXED
$pet = $_POST["pet"];
$message = $_POST["message"];

// Insert into database
$sql = "INSERT INTO adopt (firstName, lastName, email, pet, message) VALUES ('$fname', '$lname', '$email', '$pet', '$message')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Adoption Successful!'); window.location.href='proceed.html';</script>";
    exit;
} else {
    echo "<script>alert('Adoption failed! Please try again.'); window.location.href='proceed.html';</script>";
    exit;
}

// Close connection
mysqli_close($conn);
?>
