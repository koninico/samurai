<?php 
$dsn = 'mysql:dbname=php_db_app;host=localhost;charset=utf8mb4';
$user = 'root';
$password = '';

// submitパラメータの値が存在するとき（「登録」ボタンを押したとき）の処理
if (isset($_POST['submit'])) {
  try {
      $pdo = new PDO($dsn, $user, $password);

      // 動的に変わる値をプレースホルダに置き換えたINSERT文をあらかじめ用意する
      $sql_insert = '
          INSERT INTO products (product_code, product_name, price, stock_quantity, vendor_code)
          VALUES (:product_code, :product_name, :price, :stock_quantity, :vendor_code)
      ';
      $stmt_insert = $pdo->prepare($sql_insert);

      // bindValue()メソッドを使って実際の値をプレースホルダにバインドする（割り当てる）
      $stmt_insert->bindValue(':product_code', $_POST['product_code'], PDO::PARAM_INT);
      $stmt_insert->bindValue(':product_name', $_POST['product_name'], PDO::PARAM_STR);
      $stmt_insert->bindValue(':price', $_POST['price'], PDO::PARAM_INT);
      $stmt_insert->bindValue(':stock_quantity', $_POST['stock_quantity'], PDO::PARAM_INT);
      $stmt_insert->bindValue(':vendor_code', $_POST['vendor_code'], PDO::PARAM_INT);

      // SQL文を実行する
      $stmt_insert->execute();
        $count = $stmt_insert->rowCount();
        $message = "商品を{$count}件登録しました。";

      // 商品一覧ページにリダイレクトさせる
      header("Location: read.php?message={$message}");
  } catch (PDOException $e) {
      exit($e->getMessage());
  }
}

try{
  $pdo = new PDO($dsn,$user,$password);

  $sql_select = 'SELECT vendor_code FROM vendors';
  $stmt_select = $pdo->query($sql_select);

  $vendor_codes = $stmt_select->fetchAll(PDO::FETCH_COLUMN);
}catch(PDOException $e){
  exit($e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fontsの読み込み -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
  <header>
      <nav>
        <a href="index.php">商品管理アプリ</a>
      </nav>
  </header>
  <main>
      <article class="registration">
          <h1>商品登録</h1>
          <div class="back">
            <a href="read.php" class="btn">&lt; 戻る</a>
          </div>
          <form action="create.php" method="post" class="registration-form">
            <div>
                <label for="product_code">商品コード</label>
                <input type="number" name="product_code" min="0" max="100000000" required>
                
                <label for="product_code">商品名</label>
                <input type="text" name="product_name" maxlength="50" required>
                
                <label for="product_code">単価</label>
                <input type="number" name="price" min="0" max="100000000" required>
                
                <label for="product_code">在庫数</label>
                <input type="number" name="stock_quantity" min="0" max="100000000" required>
                
                <label for="product_code">仕入先コード</label>
                <select name="vendor_code" required>
                  <option disabled selected value>選択してください</option>
                  <?php 
                  foreach($vendor_codes as $vendor_code){
                    echo "<option value='{$vendor_code}'>{$vendor_code}</option>";
                  }
                  ?>
                </select>
            </div>
            <button type="submit" class="submit-btn" name="submit" value="create">登録</button>
          </form>
      </article>
  </main>
  <footer>
      <p class="copyright">&copy; 商品管理アプリ All rights reserved.</p>
  </footer>
</body>