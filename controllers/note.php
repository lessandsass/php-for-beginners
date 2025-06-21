<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "The Note";
$currentUserId = 3; 

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] !== $currentUserId);

require "views/note.view.php";

