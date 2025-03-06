<?php
require './includes/common.php';
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
    <h2 class="text-center text-warning">Select Button Accordingly</h2>
<button id="toggleBtn" type="button" class="btn btn-primary" onclick="displayTable()">Student </button>
<div id="table" style="display:none;">
<h2 class="text-center">Student Information</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Vehicle</th>
        <th>Timing</th>
        <th>Vehicle Type</th>
      </tr>
    </thead>
    <tbody>
      <?php
        
        $sql = "SELECT stud.id, stud.name, stud.address, stud.email, stud.phone, stud.vehicle, student_info.timing, student_info.vehicle_type
                FROM student as stud
                LEFT JOIN student_info ON stud.id = student_info.stud_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              if (is_null($row["timing"])  && is_null($row["vehicle_type"]) ) {
                  continue;
              }
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["name"] . "</td>";
              echo "<td>" . $row["address"] . "</td>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["phone"] . "</td>";
              echo "<td>" . $row["vehicle"] . "</td>";
              echo "<td>" . $row["timing"] . "</td>";
              echo "<td>" . $row["vehicle_type"] . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='8'>No data found</td></tr>";
      }
      
      ?>
    </tbody>
  </table>
</div>


    <button id="toggleBtn2" type="button" class="btn btn-primary" onclick="displayInstructorTable()">Instructor Info</button>

<div id="instructorTable" style="display:none;">
    <h2 class="text-center">Instructor Information</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Vehicle</th>
                <th>Licence</th>
                <th>Experience</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Retrieve all rows from the instructor table
                $sql = "SELECT id, name, address, email, phone, vehicle, licence, experience FROM instructors";
                $result = mysqli_query($conn, $sql);

                // Display the data in a table
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["vehicle"] . "</td>";
                        echo "<td>" . $row["licence"] . "</td>";
                        echo "<td>" . $row["experience"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No data found</td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>

    </div>
    <h2 class="text-center text-warning">Assign Students To Instructor</h2>
    <form action="assign.php" method="post">
      <div class="mx-auto col-10 col-md-8 col-lg-6text-center">
      <div class="form-group">
    <label for="student">Select Student:</label>
    <select class="form-control mb-4" id="student" name="student">
      <?php
        $sql = "SELECT id, name FROM student";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
        } else {
          echo "<option>No students found</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
          <label for="instructor">Select Instructor:</label>
          <select class="form-control mb-4" id="instructor" name="instructor">
            <?php
              $sql = "SELECT id, name FROM instructors";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                }
              } else {
                echo "<option>No instructors found</option>";
              }
            ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Assign</button>
      </div>
      </form>
    <div class="conatiner py-4">
    <h2 class="text-center text-warning">The Students Assigned To Instructor are:</h2>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>Student Name</th>
      <th>Instructor Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "SELECT a.id, s.name as student_name, i.name as instructor_name
              FROM admin a
              JOIN student s ON a.user_id = s.id
              JOIN instructors i ON a.instructor_id = i.id";
          
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['student_name'] . "</td>";
          echo "<td>" . $row['instructor_name'] . "</td>";
          echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='3'>No records found</td></tr>";
      }
    ?>
  </tbody>
</table>

    </div>
    </main>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
    
    
  </body>
  <script>
  function displayTable() {
    const table = document.getElementById("table");
    if (table.style.display === "none") {
      table.style.display = "block";
    } else {
      table.style.display = "none";
    }
  }

  function displayInstructorTable() {
    var instructorTable = document.getElementById("instructorTable");
    if (instructorTable.style.display === "none") {
        instructorTable.style.display = "block";
    } else {
        instructorTable.style.display = "none";
    }
  }
</script>

</html>
