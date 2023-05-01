<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>

<body>
    <P>
      <?php 
        class Product{
          public const TAX = 1.1;
        }
        echo Product::TAX;
      ?>
    </P>
    <p>
        <?php 
        const SEVEN_REGIONS = [
          '北海道地方',
          '東北地方',
          '関東地方',
          '中部地方',
          '近畿地方',
          '中国・四国地方',
          '九州地方'
        ];

        print_r(SEVEN_REGIONS);
        
        ?>
    </p>


</body>

</html>