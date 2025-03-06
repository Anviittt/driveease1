<?php
require "./includes/common.php";
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
    
    <style>
  .image-text {
    font-size: 40px; /* Adjust the font size as needed */
  }
</style>

</head>
<body>
    <header>
    <?php
    require "./includes/header.php";
    ?>
    </header>
    <main>
        <div class="text-center py-5">
            <h2>Want to join us?<br>Join Us As...</h2>
        </div>
        <div class="row pt-2 me-1 ms-1">
            <div class="col position-relative text-center">
            <a href="student_signup.php">
            <img src="./img/studlog.jpg" class="img-fluid rounded" alt="..." style="width: 500px; height: 500px;">
            <div class="position-absolute top-50 start-50 translate-middle image-text">Student</div>
            </a>
            </div> 
            <div class="col position-relative text-center">
            <a href="instructor_signup.php">
            <img src="./img/instlog.jpg" class="img-fluid rounded" alt="..." style="width: 500px; height: 500px;">
            <div class="position-absolute top-50 start-50 translate-middle image-text">Instructor</div>
            </a>
            </div>
            </div>
    </main>
    <footer>
        <?php
        require './includes/footer.php';
        ?>
    </footer>
    
</body>
</html>