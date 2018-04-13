<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
      include 'vendor.php';
      //引数に数値と文字列を直接指定
      echo vending_machine(120, "オレンジジュース");
      //引数に変数を使う
      $price = 90;
      $juice_name = "アップルジュース";
      echo vending_machine($price,$juice_name);
    ?>
  </body>
</html>
