<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson14</title>
</head>

<body>
  <h1>Lesson14</h1>

  <?php
  class Product
  {
    public $name, $weight, $color;

    public function __construct(string $name="", float $weight=0, string $color="") {
      $this->name   = $name;
      $this->weight = $weight;
      $this->color  = $color;
    }

    // メソッドを定義する
    public function setter(string $name, float $weight, string $color)
    {
      $this->name   = $name;
      $this->weight = $weight;
      $this->color  = $color;
    }
  }

  // コンストラクターがあれば
  $car1 = new Product("車", 18000, "青"); // インスタンス化
  
  // コンストラクターがないと、セッター関数などを使うことになる
  $car2 = new Product(); // インスタンス化
  $car2->setter("車", 17000, "赤"); // セッター関数を使う、初期化に近い
  
  $fruits = new Product();
  $fruits->setter("みかん", 100, "オレンジ");
  ?>
  <p><?php echo $car1->name; ?></p>
  <p><?php echo $car1->weight; ?></p>
  <p><?= $car1->color; ?></p>


</body>

</html>