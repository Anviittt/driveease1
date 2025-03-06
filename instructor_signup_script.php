<?php

require "./includes/common.php";

// Retrieve form data
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$address = mysqli_real_escape_string($conn, $_POST["address"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$vehicles = implode(",", $_POST["vehicles"]);
$experience = mysqli_real_escape_string($conn, $_POST["experience"]);
$licence = implode(",", $_POST["licence"]);

// Hash the password for security
$hashed_password = md5($password);

// Check if email and password exist in the student table
$query = "SELECT id FROM instructors WHERE email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  // Email already exists in student table
  exit("Error: Email already exists in student table.");
}

// Insert the form data into the instructors table
$query = "INSERT INTO instructors (name, email, phone, username, address, password, vehicle, licence, experience)
VALUES ('$name', '$email', '$phone', '$username', '$address', '$hashed_password', '$vehicles', '$licence', '$experience')";

if (mysqli_query($conn, $query)) {
  $_SESSION["username"] = $username;
  $_SESSION["email_id"] = $email;
  $_SESSION["id"] = mysqli_insert_id($conn);
  $_SESSION["num2"] = 2;
   header("location: instructor.php");
} else {
  exit("Error: " . mysqli_error($conn));
}

       


// Close database connection
// mysqli_close($conn);

?>







<?php
// require './includes/common.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = $_POST["name"];
//   $username = $_POST["username"];
//   $vehicles = implode(",", $_POST["vehicles"]);
  

//   $name = mysqli_real_escape_string($conn, $_POST["name"]);
//   $email = mysqli_real_escape_string($conn, $_POST["email"]);
//   $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
//   $username = mysqli_real_escape_string($conn, $_POST["username"]);
//   $address = mysqli_real_escape_string($conn, $_POST["address"]);
//   $password = mysqli_real_escape_string($conn, $_POST["password"]);
//   $vehicles = implode(",", $_POST["vehicles"]);
//   $experience = mysqli_real_escape_string($conn, $_POST["experience"]);
//   $licence = mysqli_real_escape_string($conn, $_POST["licence"]);


//   // Insert the data into the database
//   $sql = "INSERT INTO users (name, username, vehicles)
//   VALUES ('$name', '$username', '$vehicles')";

//   $query = "INSERT INTO instructors (name, email, phone, username, address, password, vehicle, licence, experience)
//   VALUES ('$name', '$email', '$phone', '$username', '$address', '$hashed_password', '$vehicles[0]', '$licence', '$experience')";


//   if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

//   mysqli_close($conn);
// }

?>