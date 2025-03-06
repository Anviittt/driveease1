<?php
    $conn = mysqli_connect("localhost", "root", "", "drivinglicense1") or die(mysqli_error($conn));


    if(!isset($_SESSION)){
        session_start();
    }
    
?>
