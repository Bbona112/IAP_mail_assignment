<?php
//constants
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "space";

// create the database connection
$conn = new mysqli($servername,$username,$password,$dbname);

// verify that the db connection 

if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
else{
    ("Database connection Successful\n");
}
?>