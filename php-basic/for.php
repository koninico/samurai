<!DOCTYPE html>
<html lang="ja">

<head>
      <meta charset="UTF-8">
      <title>タイトル</title>
</head>

<body>
<p>
  <?php 
  for( $i= 1; $i <=10; $i++){
    if($i % 2 ===1){
      continue;
    }
    echo $i .'<br>';
  }
  ?>
</p>

</body>

</html>