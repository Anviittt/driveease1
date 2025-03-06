<?php
  require './includes/common.php';

  // Get id from the URL
  $id = $_GET['id'];

  // Delete the record from the database
  $sql = "DELETE FROM admin WHERE id = '$id'";
  $result = mysqli_query($conn, $sql);

  // Check if delete was successful
  if ($result) {
    header("Location: index.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  header("location: admin.php");
?>
