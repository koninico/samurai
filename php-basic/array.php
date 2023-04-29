<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>

<body>
    <P>
      <?php
        $user_names = ['侍太郎','侍一郎','侍二郎','侍三郎','侍四郎'];
        print_r($user_names);
        echo '<br>';
        $user_names[1] = '侍花子';
        $user_names[] = '侍五郎';
        print_r($user_names);
        echo  '<br>';
        print_r($user_names[2]);
      ?>

    </P>


</body>

</html>