<?php
    require "./includes/common.php";
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $query = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password' ";
    $query_result = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM admin_login WHERE username = '$username' AND password != '$password' ";
    $query_result2 = mysqli_query($conn, $query2);

    if(mysqli_num_rows($query_result) == 0){
        echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">Password does not match</p>';
        echo '</div>';
    }

    elseif(mysqli_num_rows($query_result) == 0){
echo '<div style="text-align: center;">';
echo '<img src="./img/wheel.jpg" alt="Error Image" style="width: 300px; height: 300px;">';
        echo '<p style="color: red; text-align: center; font-size: 50px; font-weight: bold;">User account does not exist</p>';
 echo '</div>';
    }else{
        $row = mysqli_fetch_array($query_result);
        
        $_SESSION["username"] = $username;
        $_SESSION["id"] = $row["id"];
        $_SESSION["num"] = 3;
    
       
            
        // redirect to products page
         header("location: admin.php");
    }
?>