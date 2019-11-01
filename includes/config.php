<?php
    ob_start(); // Inbuilt function for sending complete data at same time

    $timezone = date_default_timezone_set("Asia/Calcutta");

    $con = mysqli_connect("localhost", "root", "", "music-whiz");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>