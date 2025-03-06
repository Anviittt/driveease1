<?php
require "./includes/common.php";

if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    // Check the password in the database
    $query = "SELECT * FROM student WHERE username = '$username'";
    $query_result = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_result) > 0) {
        $row = mysqli_fetch_array($query_result);
        $db_hashed_password = $row["password"];

        if (md5($password) == $db_hashed_password) {
            echo '<span style="color: green">Password is correct</span>';
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $row["id"];
            $_SESSION["num1"] = 1;
            header("location: student.php");
            exit(); // Stop further execution after successful login
        } else {
            echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">Password does not match</p>';
        echo '</div>';
            exit(); // Stop further execution after displaying incorrect password message
        }
    } else {
        echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">User account does not exist</p>';
        echo '</div>';
        exit(); // Stop further execution after displaying user account does not exist message
    }
} else {
    echo "Username and password cannot be empty.";
}
?>