<?php
require "./includes/common.php";

// Get details from the form
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$vehicle = implode(",", $_POST["vehicles"]);
$address = mysqli_real_escape_string($conn, $_POST["address"]);

// Hash password
$hashed_password = md5($password);

$query1 = "SELECT id FROM student WHERE email = '$email'";
$query2 = "INSERT INTO student (name, email, password, username, phone, vehicle, address) 
           VALUES ('$name', '$email', '$hashed_password', '$username', '$phone', '$vehicle', '$address')";

// Check if the user already exists
$result = mysqli_query($conn, $query1);
if (mysqli_num_rows($result) > 0) {
    // Email already exists
    echo "Email ID already exists. Try another";
} else {
    // Perform the insert operation
    $result = mysqli_query($conn, $query2);

    if ($result) {
        // Signup successful, redirect to login page
        header("Location: student_login.php");
        exit(); // Ensure script stops after redirection
    } else {
        echo "Error: " . mysqli_error($conn); // Debugging output
    }
}
?>
