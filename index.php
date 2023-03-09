<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 3</title>
</head>
<body>
    <!-- about array... -->
    <?php
    $books= [
        [
            "title" => "The first book",
            "Author" => "The first Author",
            "publish-date" => "1395",
            "price" => "100000"
        ],
        [
            "title" => "The second book",
            "Author" => "The second Author",
            "publish-date" => "1399",
            "price" => "200000"
        ],
        [
            
            "title" => "The third book",
            "Author" => "The third Author",
            "publish-date" => "1401",
            "price" => "350000"
        ]
    ];
    var_dump($books);
    // die();
    ?>
    <h1>This is the third session coding</h1>
    <h3>Book List :</h3>
    <!-- <table>
        <?php foreach($books as $key => $value){ ?>
            <tr>
                <td> 
                    <?= $key ?>
                    <?php var_dump($value) ?>
                </td>
            </tr>
        <?php }?>
    </table> -->
    
    <table>
        <?php foreach($books as $value){ ?>
            <tr>
                <td> <?php var_dump($value) ?> </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>