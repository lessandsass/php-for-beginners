<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();

    authorize($note['user_id'] === 3);
    
    $db->query('DELETE FROM notes WHERE id = :id', ['id' => $_GET['id']]);

    header('location: /notes');
    exit();

} else {
    $note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->findOrFail();
    
    authorize($note['user_id'] === 3);

    view("notes/show.view.php", [
        'heading' => "The Note",
        'note' => $note
    ]);
}


