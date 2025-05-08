<?php

require 'functions.php'; 
require 'Database.php';

$config = [
    'host' => 'localhost',
    'port' => '3306',
    'dbname' => 'myapp',
    'charset' => 'utf8'
];

$db = new Database($config);

$posts = $db->query('SELECT * FROM posts')->fetchAll();

dd($posts);









