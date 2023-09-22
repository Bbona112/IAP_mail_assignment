gi<?php

require_once 'dbconn.php';


$db_query = "CREATE DATABASE IF NOT EXISTS blog_db";
$db_connect->query($db_query);
$db_connect->select_db("blog_db");

$create_authors_table = "CREATE TABLE IF NOT EXISTS authors (
    author_id INT AUTO_INCREMENT PRIMARY KEY,
    author_fullname VARCHAR(255) NOT NULL,
    author_email_address VARCHAR(255) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

$db_connect->query($create_authors_table);


$create_articles_table = "CREATE TABLE IF NOT EXISTS articles (
    article_id INT AUTO_INCREMENT PRIMARY KEY,
    author_id INT,
    article_title VARCHAR(255) NOT NULL,
    article_full_text TEXT NOT NULL,
    date_of_publication DATE NOT NULL,
    FOREIGN KEY (author_id) REFERENCES authors(author_id)
)";

$db_connect->query($create_articles_table);

$db_connect->close();
?>
