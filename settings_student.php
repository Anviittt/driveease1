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
<div class="container panel-margin">
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Change Password</h2>
</div></br></br>
<div class="panel-body">
<form action="settings_student_script.php" method="post">
<div class="form-group">
<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
</div></br>
<div class="form-group">
<input type="password" class="form-control" name="new_pass" placeholder="New Password" required>
</div></br>
<div class="form-group">
<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
</div></br>
<button type="submit" class="btn btn-primary">Change</button>
</form>
</div></br></br></br></br>
</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html> 