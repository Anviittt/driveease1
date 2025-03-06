<?php
require './includes/common.php';

// destroy the session if present
if(!isset($_SESSION["username"])){
header("location: index.php");
}else{
session_unset();
session_destroy();
}
?>
<!DOCTYPE html>
<html>
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
<?php
require './includes/header.php';
?>
<section class="vh-100" style="background-color: #FFC107;">
<div class="container py-5 h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col col-xl-10">
<div class="card" style="border-radius: 1rem;background-color:#2B2D42">
<div class="row g-0">
<div class="col-md-6 col-lg-5 d-none d-md-block">
<img
src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
alt="login form"
class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
/>
</div>
<div class="col-md-6 col-lg-7 d-flex align-items-center">
<div class="card-body p-4 p-lg-5 text-black">
<div class="alert" style="color:000000; background-color:#FFFDFA">
You have successfully logged out. Click <a href="index.php">here</a> to go back to Login page.
</div>





</div>
</div>
</div>
</div>
</section>

</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html>