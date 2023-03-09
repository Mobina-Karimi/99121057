<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 2</title>
</head>
<body>
    <!-- about if... -->
    <?php
    $message= "first meeting with Mobina Karimi";
    $is_read = false;
    // $is_read = true;
    if($is_read)
    {
        $message ="First meeting with Mobina Karimi is done!";
    }
    else
    {
        $message= "I must set a meeting with Mobina Karimi";
    }
    ?>
    <h1>This is the second session coding</h1>
    <h3>Hello <?= $message ?> </h3>
    
</body>
</html>