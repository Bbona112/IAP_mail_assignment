<?php
require_once 'configs\dbconn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM authors WHERE username = ? AND password = ?";
    $statement = $db_connect->prepare($query);

    if ($statement) {
        $statement->bind_param("ss", $username, $password);
        $statement->execute();
        $result = $statement->get_result();

        if ($result->num_rows === 1) {
           
            $row = $result->fetch_assoc();
            $author_fullname = $row['author_fullname'];
            echo "Sign in successful! Welcome, " . $author_fullname;

            header("Location: blog.html");
            exit;
        } else {
            
            echo "Invalid username or password.";
        }
        $statement->close();
    } else {
        echo "Error in query preparation.";
    }
}
?>
