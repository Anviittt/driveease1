<?php
require './includes/common.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $vehicles = implode(",", $_POST["vehicles"]);
  


  // Insert the data into the database
  $sql = "INSERT INTO users (name, username, vehicles)
  VALUES ('$name', '$username', '$vehicles')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

?>
