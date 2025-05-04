<?php

require 'functions.php'; 
// require 'router.php';

// connect to the MySQL database
// initialize the PDO
// create a instance of PDO
// $dsn = Data Source Name

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8";

$pdo =new PDO($dsn, 'root', '');

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}









