<?php 
    require_once "configs/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-Au-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Articles</title>
    
    <link rel="stylesheet" href="CSS/view.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
        <header class="header">
            <a href="#" class="logo">TM</a>
        
            <nav class="navbar">
               
                <a href="index.html">Home</a>
                <a href="contact.html">Contact</a>
                <a href="signin.html">Sign-in</a>
                <a href="signup.html">Register Author</a>
                <a href="blog.php">Register Article</a>
                <a href="signoutproc.php">sign-out</a>
                
            </nav>
        </header>

    <div class="content_section">
        <div class="content">
            <h1>Articles List</h1>
            <table>
                <tr>
                    <th>#</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Publication Date</th>
                </tr>
                <?php
                $get_articles_query = "SELECT * FROM articles INNER JOIN authors ON articles.author_id = authors.author_id ORDER BY articles.date_of_publication DESC LIMIT 4";
                $result = $db_connect->query($get_articles_query);

                $article_number = 1;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $article_number; ?></td>
                            <td><?php echo $row['author_fullname']; ?></td>
                            <td><?php echo $row['article_title']; ?></td>
                            <td><?php echo $row['date_of_publication']; ?></td>
                        </tr>
                        <?php
                        $article_number++;
                    }
                } else {
                    echo "<tr><td colspan='4'>No articles found.</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>

</body>
</html>
