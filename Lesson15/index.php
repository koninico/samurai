<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson15</title>
</head>

<body>
    <h1>Lesson15</h1>
    <form action="check.php" method="get">
        <div>
            <label for="name">お名前</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">年齢</label>
            <input type="number" name="age" id="age">
        </div>
        <div>
            <label for="from">出身地</label>
            <input type="text" name="from" id="from">
        </div>
        <div>
            <input type="submit" value="送信する">
        </div>
    </form>

    <?php
        $my_name = '侍一郎';
        echo "私の名前は{$my_name}です。"; // 変数展開
        echo "<br>";
        echo '私の名前は' . $my_name . "です。"; // 連結子
    ?>
</body>

</html>