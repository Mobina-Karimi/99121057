<?php
    // include 'book.php';
    include 'functions.php';
    // $book = new book();
    // $book->title = 'The first title';
    // $book->author = 'Author1';

    // dd($book);
    // echo('<pre>');
    // var_dump($book);
    // $book -> about();


    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "webprogramming";
    $dsn = 'mysql:host=localhost;port=3306;dbname=webprogramming;charset=utf8mb4;';
    $pdo = new PDO($dsn, 'root');
    $statement = $pdo -> prepare('SELECT * FROM books');
    $statement -> execute();
    $books = $statement -> fetchAll();
    dd($books);
?>