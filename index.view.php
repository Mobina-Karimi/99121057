<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Lesson 5</title>
</head>
<body>
    <!-- about separate view... -->
    <!-- <h1>This is the 5th session coding</h1> -->
  <h3>Book List :</h3>
    <table class="table table-bordered table-dark">
        <thead>
            <th> Title </th>
            <th> Author </th>
            <th> Publish Date </th>
            <th> Price </th>
        </thead>
        <tbody>
            <?php foreach($filteredbook as $book): ?>
                <tr>
                    <?php foreach($book as $key=>$value): ?>
                        <td><?= $value ?></td>
                    <?php endforeach ?>    
                </tr>    
            <?php endforeach ?>
        </tbody>
    </table>
    <div>
        <?php 
            $db = connectToDB();
        ?>
    </div>
</body>
</html>