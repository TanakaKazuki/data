<!DOCTYPE html>
<html>
  <head>
    <title>変数の代入</title>
  </head>
  <body>
    <?php
      $foo = 'Bob';              // 値'Bob'を$fooに代入する。
      $bar =  &$foo;              // $fooを$barにより参照
      $bar = "My name is $bar";  // $barを変更...
      echo $bar;
      echo $foo;                 // $fooも変更される。
    ?>
  </body>
</html>
