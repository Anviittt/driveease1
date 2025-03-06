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
    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">

     <!-- Title -->
    <title>DRIVE EASE courses</title>
    
    <style>
        /* Add custom CSS for dark overlay */
        .image-container {
            position: relative;
        }

        .img-fluid {
            max-width: 100%; /* Set the maximum width to ensure responsiveness */
            height: auto; /* Maintain aspect ratio */
            transition: transform 0.3s, filter 0.3s;
        }

        .image-container:hover .img-fluid {
            filter: brightness(70%); /* Make the image slightly dark on hover */
        }

        .image-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff; /* Text color */
            padding: 10px 20px; /* Adjust the padding as needed */
            border-radius: 5px;
            font-size: 60px; /* Text font size */
        }
    </style>
</head>
<body>
    <header>
        <?php require "./includes/header.php"; ?>
    </header>
    <main>
        <div class="text-center py-5">
            <h2>Log In As</h2>
        </div>
        <div class="row pt-2 me-1 ms-1">
            <div class="col">
                <a href="student_login.php" class="image-container">
                    <img src="./img/studlog.jpg" class="img-fluid rounded" alt="..." style="width: 450px; height: 450px;">
                    <div class="image-text">Student</div>
                </a>
            </div>
            <div class="col">
                <a href="instructor_login.php" class="image-container">
                    <img src="./img/instlog.jpg" class="img-fluid rounded" alt="..." style="width: 450px; height: 450px;">
                    <div class="image-text">Instructor</div>
                </a>
            </div>
            <div class="col">
                <a href="admin_login.php" class="image-container">
                    <img src="./img/courses-3.jpg" class="img-fluid rounded" alt="admin image" style="width: 450px; height: 450px;">
                    <div class="image-text">Admin</div>
                </a>
            </div>
        </div>
    </main>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</body>
</html>
