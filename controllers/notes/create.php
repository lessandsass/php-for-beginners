<?php

require 'Validator.php';

$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $errors = [];

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors[] = 'Body must be at most 1000 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 3
        ]);
    }
}
    
view("notes/create.view.php", [
    'heading' => "Create a Note",
    'errors' => $errors,
    'body' => $_POST['body'] ?? ''
]);
