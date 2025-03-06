<?php
  require './includes/common.php';

  if (isset($_POST['student']) && isset($_POST['instructor'])) {
    $student = $_POST['student'];
    $instructor = $_POST['instructor'];

    $sql = "INSERT INTO admin (user_id, instructor_id) VALUES ($student, $instructor)";
    if (mysqli_query($conn, $sql)) {
      echo "Student successfully assigned to instructor.";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  header("location: admin.php");
?>
