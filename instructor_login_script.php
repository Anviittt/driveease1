<?php
    require "./includes/common.php";

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $hashed_password = md5($password);

        $query = "SELECT * FROM instructors WHERE username = '$username' AND password = '$hashed_password'";

        $query2 = "SELECT * FROM instructors WHERE username = '$username' AND password != '$hashed_password'";

        $query_result = mysqli_query($conn, $query);
        $query_result2 = mysqli_query($conn, $query2);

        if (mysqli_num_rows($query_result2) > 0) {
             echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">Password does not match</p>';
        echo '</div>';
        }

        elseif (mysqli_num_rows($query_result) > 0) {
            $row = mysqli_fetch_array($query_result);
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $row["id"];
            $_SESSION["num2"] = 1;
            header("location: instructor.php");
        } else {
             echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">User Account does not exist</p>';
        echo '</div>';
        }
    } else {
        echo "Username and password cannot be empty.";
    }

    // echo $_SESSION["username"];
    // echo $_SESSION["id"];

?>
