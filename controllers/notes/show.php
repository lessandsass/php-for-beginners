<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === 3);

view("notes/show.view.php", [
    'heading' => "The Note",
    'note' => $note
]);
