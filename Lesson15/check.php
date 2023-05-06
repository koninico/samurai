<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <h1>Check</h1>
    <?php
        print_r($_GET);
        
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    ?>
    <div>
        お名前：<?php echo $_GET["name"]; ?>
    </div>
    <div>
        年齢：<?php echo $_GET["age"]; ?>
    </div>
</body>
</html>