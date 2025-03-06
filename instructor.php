<?php
require './includes/common.php';
// check if logged in
if(!isset($_SESSION["username"])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="img/favicon.ico" rel="icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- External Css -->
    <link rel="stylesheet" href="style.css">

     <!-- title -->
    <title>DRIVE EASE</title>

</head>
<body>
    <header>
        <?php
        require './includes/header.php';
        ?>
    </header>
    <main>
        <div class="container my-5">
            <?php 
            $inst_id = $_SESSION["id"];
            $sql2 = "SELECT student.name, student.address, student.email, student.phone, student.vehicle, student_info.timing, student_info.vehicle_type
                    FROM student
                    INNER JOIN admin ON student.id = admin.user_id
                    LEFT JOIN student_info ON student.id = student_info.stud_id
                    WHERE admin.instructor_id = $inst_id";

            $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
  
            if (mysqli_num_rows($result2) > 0) {
                echo "<h2 class='text-center text-warning'><strong style='color: black;'>Your Allocated Students </h2>";
                echo "<table class='table'>";
                echo "<thead>";
                echo "<tr>";
                
                echo "<th>Name</th>";
                echo "<th>Address</th>";
                echo "<th>Email</th>";
                echo "<th>Phone</th>";
                echo "<th>Vehicle</th>";
                echo "<th>Timing</th>";
                echo "<th>Vehicle Type</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row2 = mysqli_fetch_assoc($result2)){
                    echo "<tr>";
                    
                    echo "<td>" . $row2['name'] . "</td>";
                    echo "<td>" . $row2['address'] . "</td>";
                    echo "<td>" . $row2['email'] . "</td>";
                    echo "<td>" . $row2['phone'] . "</td>";
                    echo "<td>" . $row2['vehicle'] . "</td>";
                    echo "<td>" . $row2['timing'] . "</td>";
                    echo "<td>" . $row2['vehicle_type'] . "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p class='text-center'>You don't have any allocated students.</p>";
            }
            ?>
        </div>
    </main>
    <footer>
        <?php
        require './includes/footer.php';
        ?>
    </footer>
</body>
</html>
