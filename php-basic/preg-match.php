<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>

<body>
  <h2>
    <?php 
    $str = 'Appleが5個あります。Orangeは1個しかありません。';

    echo '検索対象' . $str;
    
    ?>
  </h2>

  <p>
    <?php 
      echo '「Orange」が含まれているかどうかを正規表現で検索します。<br>';

      if(preg_match('/Orange/',$str)){
        echo '>正規表現に一致しました。';
      }else{
        echo '>正規表現に一致しませんでした。';
      }
    ?>
  </p>

  <p>
    <?php 
      echo '「。」で始まっているかAどうかを正規表現で検索します。<br>';

      if(preg_match('/。$/',$str)){
        echo '>正規表現に一致しました。';
      }else{
        echo '>正規表現に一致しませんでした。';
      }
    ?>
  </p>



</body>

</html>