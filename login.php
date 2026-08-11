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
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO sign_in (email, password) VALUES ('$email', '$password')";
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
