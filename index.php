<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "webprogramming";

    // Create connection
    // $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    //   exit("connect successfully");

    $books= [
        [
            "title" => "The first book",
            "Author" => "Author1",
            "publish-date" => "1395",
            "price" => 100000
        ],
        [
            "title" => "The new first book",
            "Author" => "Author1",
            "publish_date" => "1395",
            "price" => 100000
        ],
        [
            "title" => "The second book",
            "Author" => "The second Author",
            "publish-date" => "1399",
            "price" => 200000
        ],
        [

            "title" => "The third book",
            "Author" => "The third Author",
            "publish-date" => "1401",
            "price" => 350000
        ]
    ];
    function filter($books,$fn)
    {
        $filteredbook = [];
        foreach($books as $book)
        {
            if($fn($book))
            {
                $filteredbook[] = $book;
            }
        }
        return $filteredbook;
    }
    $filteredbook = filter($books,function($book){
        if($book['price'] <=200000)
        {
            return true;
        }
        return false;
    });
    require("index.view.php");
?>