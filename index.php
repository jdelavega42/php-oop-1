<?php
include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>MyMovie Database</h1>
    <?php foreach($movies as $movie){ ?>
        <div class="ms_card">
            <h2 class="title"><?php echo $movie->title; ?></h2>
            <p class="year"> <?php echo $movie->arrayToString(); ?></p>
            <p class="year"><?php echo $movie->year; ?></p>
        </div>
        <?php } ?>
</body>
</html>