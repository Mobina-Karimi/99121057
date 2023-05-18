<?php
    require('Database.php');
    $config = require('Config.php');
    $db = new Database($config);
    $query = "SELECT * FROM notes WHERE user_id=1";
    $notes = $db->query($query)->fetchAll();
    // dd($notes);
    require ('views/notes.view.php');