<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>

<body>
  <h2>
    <?php 
    $str = 'ppleが5個あります。Oraneは1個しかありません';

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

  <p>
      <?php 
        echo '「Appleが5個あります。Orangeは1個しかありません。」と完全に一致しているかどうかを正規表現で検索します。<br>';

        if(preg_match('/\AAppleが5個あります。Orangeは2個しかありません。\z/',$str)){
          echo '>正規表現に一致しました。';
        }else{
          echo '>正規表現に一致しませんでした。';
        }
      
      ?>

  </p>

  <p>
    <?php 
      echo '「Apple」または「Orange」が含まれているかどうかを正規表現で検索します。<br>';

      if(preg_match('/Apple|Orange/',$str)){
        echo '>正規表現に一致しました。';
      }else{
        echo '>正規表現に一致しませんでした。';
      }
    
    ?>
  </p>

  <p>
    <?php 
      echo '英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';
      if(preg_match('/[a-zA-Z0-9]/',$str,$results)){
        echo '>検索結果:';
        print_r($results);
      }else{
        echo '>正規表現に一致しませんでした';
      }
    ?>
  </p>


</body>

  </html>