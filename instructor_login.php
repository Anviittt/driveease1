<?php
require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="icon" href="/images/carts.jpg" type="image/icon type">
<title>DRIVE EASE</title>
</head>
<body>
<?php
require "./includes/header.php";
?>


<section class="vh-100">
<div class="container h-100">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-lg-12 col-xl-11">
<div class="card text-black" style="border-radius: 25px; background-color:#2B2D42;">
<div class="card-body p-md-5">
<div class="row justify-content-center">
<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

<div class="container panel-margin">
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title py-5" style="color:#FFC107;">Instructor LogIn</h2>
</div>  
<div class="panel-body">
<form method="post" action="instructor_login_script.php">
<div class="form-group">
<div class="form-outline mb-4">
<input type="name" class="form-control" id="username" name="username" placeholder="UserName" required>
</div>
</div>
<div class="form-group">
<div class="form-outline mb-4">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
</div>
</div>
<div class="pt-1 mb-4">
<button type="submit" class="btn btn-warning">Login</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</div>
<?php
require "./includes/footer.php";
?>
</body>
</html>