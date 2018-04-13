<!DOCTYPE html>
<html>
  <head>
    <title>変数の代入</title>
  </head>
  <body>
    <?php
    // 有効な定数名
    define("FOO",1);
    define("FOO2",2);
    define("FOO_BAR",5);
    // 無効な定数名
    define("2FOO",    "something");
    $answer = FOO;
    echo $answer;
    // 有効だが、避けるべき。
    // 将来 PHP に定数の予約語が追加された場合に
    // スクリプトが動作しなくなる可能性がある
    define("__FOO__", "something");


    ?>
  </body>
</html>
