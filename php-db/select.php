<?PHP
    $dsn = 'mysql:dbname=php_db;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $user, $password);

        // usersテーブルからidカラムとnameカラムのデータを取得するためのSQL文を変数$sqlに代入する
        $sql = 'SELECT id, name FROM users';

        // SQL文を実行する
        $stmt = $pdo->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmtを直接出力しても何も出ないのはなぜなのか？
      } catch (PDOException $e) {
        exit($e->getMessage());
      }
      ?>
        
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP+DB</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
      <tr>
        <th>ID</th>
        <th>氏名</th>
      </tr>
      <?php 
      // as $resultは決まった書き方なのか？もしくは40行目で出力するための変数としているのか？
      foreach($results as $result){
        echo "<tr><td>{$result['id']}</td><td>{$result['name']}</td></tr>";
      }
      ?>      
    </table>
</body>

</html>
