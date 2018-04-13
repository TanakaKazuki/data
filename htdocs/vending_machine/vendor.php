<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
    function vending_machine ($price, $juice_name){
      if($price >= 120){
        return $juice_name."のお買い上げありがとうございます<br>";
      }else{
        return $juice_name."の購入金額が不足しています<br>";
      }
    }
    ?>
  </body>
</html>
