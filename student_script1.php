<?php
require "./includes/common.php";

$stud_id = $_SESSION["id"];
$timing = mysqli_real_escape_string($conn, $_POST["timing"]);
$vehicletype = mysqli_real_escape_string($conn, $_POST["vehicletype"]);

$query_result = "SELECT stud_id FROM student_info WHERE stud_id = '$stud_id' ";
$result_1 = mysqli_query($conn, $query_result) or die(mysqli_error($conn));

$query2 = "INSERT INTO student_info (stud_id, timing, vehicle_type) VALUES ('$stud_id', '$timing', '$vehicletype')";
$query = "UPDATE student_info SET timing = '$timing', vehicle_type = '$vehicletype' WHERE stud_id = '$stud_id'";

if(mysqli_num_rows($result_1) == 0){ 
    $result = mysqli_query($conn, $query2) or die("Insert query failed: " . mysqli_error($conn));
}
else{
    $result = mysqli_query($conn, $query) or die("Update query failed: " . mysqli_error($conn));
}

// echo $timing;
// echo $stud_id;
// echo $vehicletype;

header("location: student.php");

?>
