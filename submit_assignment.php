<?php
require "./includes/common.php";
$student = $_POST['student'];
$instructor = $_POST['instructor'];

$sql = "UPDATE students SET instructor_id = '$instructor' WHERE student_id = '$student'";

if (mysqli_query($conn, $sql)) {
    echo "Instructor assigned successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('./admin.php');
mysqli_close($conn);
?>
