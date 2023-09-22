<?php
require_once 'configs/dbconn.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author_fullname = $_POST['author_fullname'];
    $author_email = $_POST['author_email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $insert_query = "INSERT INTO authors (author_fullname, author_email_address, username, password)
                     VALUES (?, ?, ?, ?)";

    $statement = $db_connect->prepare($insert_query);
    $statement->bind_param("ssss", $author_fullname, $author_email, $username, $password);

    if ($statement->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error registering user: " . $statement->error;
    }
    $statement->close();
}
header("Location: signin.html");
exit();
?>
