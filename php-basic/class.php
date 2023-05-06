<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>タイトル</title>
</head>

<body>
    <p>
      <?php 
      //クラスを定義する
      class Product {
        //プロパティを定義する
        public $name;

        //メソッドを定義する（文字列として定義する）
        public function set_name(string $name){
          $this->name = $name;
        }
        public function show_name(){
          echo $this->name . '<br>';
        }
      }

      // インスタンス化する
      $coffee = new Product();

      //メソッドにアクセスして実行する
      $coffee->set_name('コーヒー');
      $coffee->show_name();

      // インスタンス化する
      $shampoo = new Product();

      //プロパティにアクセスし、値を代入する
      $shampoo->name = 'シャンプー';

      //プロパティにアクセスし、値を出力する
      echo $shampoo->name;
      
      ?>
    </p>

    <p>
      <?php 
        class User{
          private $name;
          private $age;
          private $gender;
          
          public function __construct(string $name ,int $age, string $gender){
            $this->name=$name;
            $this->age=$age;
            $this->gender=$gender;

          }
        }
      
          $user = new User('侍太郎',36,'男性');

          print_r($user);
      ?>
    </p>

</body>

</html>