<?php

require 'functions.php'; 
// require 'router.php';

// connect to the MySQL database
// initialize the PDO
// create a instance of PDO
// $dsn = Data Source Name

class Database {
    public function query($query) 
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8";

        $pdo =new PDO($dsn, 'root', '');

        $statement = $pdo->prepare($query);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}

$db = new Database();

$posts = $db->query('SELECT * FROM posts');

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}









