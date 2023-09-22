<?php
require_once "configs\dbconn.php";

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
