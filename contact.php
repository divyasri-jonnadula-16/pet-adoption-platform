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

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Check if passwords match
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration Successful!');</script>";
} else {
    echo "<script>alert('Registration failed!');</script>";
    }

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration Successful!'); window.location.href='registration.html';</script>";
    exit;
} else {
    echo "<script>alert('Registration failed!'); window.location.href='registration.html';</script>";
    exit;
}



// Close connection
mysqli_close($conn);
?>
