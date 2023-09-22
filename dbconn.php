<?php
    $hostname = "localhost";
    $database_username = "root";
    $database_password = "";
    $databse_name = "blog_db";

    $db_connect = mysqli_connect($hostname, $database_username,  $database_password, $databse_name);
    if(mysqli_connect_errno()){
        echo "failed to connect!";
        exit();
    }
    
?>