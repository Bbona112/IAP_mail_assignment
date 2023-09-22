<?php
require_once 'configs/dbconn.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $full_name = $_POST['full_name'];
    $article_title = $_POST['article_title'];
    $article_text = $_POST['article_text'];
    $publication_date = $_POST['publication_date'];

    $query = "INSERT INTO articles (author_id, article_title, article_full_text, date_of_publication)
              VALUES (?, ?, ?, ?)";

    
    $statement = $db_connect->prepare($query);
    $statement->bind_param("isss", $author_id, $article_title, $article_text, $publication_date);

    
    $author_id = 2;

    
    if ($statement->execute()) {
        
        $statement->close();

        
        header("Location: view.php");
        exit;
    } else {
        echo "Error submitting article: " . $statement->error;
    }

    
    $statement->close();
} else {
    
    header("Location: blogproc.php");
    exit();
}

$db_connect->close();
?>
