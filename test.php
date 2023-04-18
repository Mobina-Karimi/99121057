<?php
    include 'functions.php';
    require('database.php');

    $config = require('config.php');
    // $db = new Database($config);
    $db = new Database($config,'root','');
    $id = $_GET['id'];
    // dd($id);

    // $books = $db -> query("SELECT * FROM books WHERE title='book number2'") -> fetchAll();
    // $books = $db -> query("SELECT * FROM books WHERE title LIKE '%book number2%'") -> fetch(PDO::FETCH_OBJ);
    // $books = $db -> query("SELECT * FROM books WHERE title LIKE '%book number2%'") -> fetchAll(PDO::FETCH_ASSOC);
    // $books = $db -> query("SELECT * FROM books WHERE title LIKE '%book%'") -> fetchAll(PDO::FETCH_ASSOC);

    // $query = "SELECT * FROM users WHERE id=$id";
    $query = "SELECT * FROM users WHERE id= :id";
    // $user = $db -> query($query) -> fetch(PDO::FETCH_ASSOC);
    $user = $db -> query($query,['id'=>$id]) -> fetch(PDO::FETCH_ASSOC);
    dd($user);

    // dd($books);
    // dd($books -> title);
    // dd($books['title']);
?>