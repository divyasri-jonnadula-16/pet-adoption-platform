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
$confirmpassword = $_POST["confirm_password"];

// Validate password (Minimum 8 characters, at least one letter, one number, and one special character)
if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
    echo "<script>alert('Password must be at least 8 characters long and include at least one letter, one number, and one special character.'); window.history.back();</script>";
    exit;
}

// Check if passwords match
if ($password !== $confirmpassword) {
    echo "<script>alert('Passwords do not match! Please enter again.');</script>";
} else {
    $sql = "INSERT INTO sign_up (email, password, confirmPassword) VALUES ('$email', '$password', '$confirmpassword')";
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
