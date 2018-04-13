<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
      $friends = array("a","b","c");
      $friends[] = "d";
      $friends[5] = "e";
      var_dump($friends);
      array_push($friends,"f","g");
      //array_pushで複数個を一気に追加できる
      var_dump($friends);
      $class1 = array("aka","ao");
      $class2 = array("apple","peach");
      $students = array($class1,$class2);
      var_dump($students);
    ?>
  </body>
</html>
