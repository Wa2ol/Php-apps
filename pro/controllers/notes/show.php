<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Note';
$currentUserId = 1;

$note = $db->query('select * from posts where id = :id', [
    'id' => $_GET['id']]
    )->findOrFail();

    if(! $note){
        abort();
    }

    authorize($note['user_id'] === $currentUserId);

require "views/notes/show.view.php";