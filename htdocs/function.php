<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
      $count = mb_strlen("こんにちは");
      echo "こんにちは"."<br>";
      echo "文字数は $count"."<br>";
      //mb_strlenは、引数の文字数を数える
      $fruits = array("z","d","a","x");
      sort($fruits);
      var_dump($fruits);
    ?>
  </body>
</html>
