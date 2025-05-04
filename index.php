<?php

require 'functions.php'; 
// require 'router.php';

// connect to the MySQL database
// initialize the PDO
// create a instance of PDO
// $dsn = Data Source Name

class Database {

    public $connection;

    public function __construct() 
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8";
        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query($query) 
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;

    }
}

$db = new Database();

$posts = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

dd($posts);









