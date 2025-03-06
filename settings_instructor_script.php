<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["username"])){
		header("location: index.php");
    }else{
        // get user details
        $username = $_SESSION["username"];
        $id = $_SESSION["id"];

        // get the newly typed password
        $new_password = md5(mysqli_real_escape_string($conn, $_POST["new_pass"]));
        $retype_pass = md5(mysqli_real_escape_string($conn, $_POST["retype_new_pass"]));
        

        // check if the typed new passwords match
        if($new_password != $retype_pass){
            echo "The passwords do not match. Try again.";
        }else{
            $query = "UPDATE instructors SET password = '$new_password' WHERE username = '$username'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            header("location: instructor.php");
        }
    }
?>