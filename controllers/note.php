<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "The Note";
$currentUserId = 3;

$note = $db->query('SELECT * FROM notes WHERE id = :id', ['id' => $_GET['id']])->find();

if (! $note) {
    abort(404);
}


if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";

