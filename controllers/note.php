<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "The Note";

$note = $db->query('SELECT * FROM notes WHERE user_id = :user_id AND id = :id', [
    'id' => $_GET['id'],
    'user_id' => 3
])->fetch();

if (!$note) {
    abort(404);
}

require "views/note.view.php";

