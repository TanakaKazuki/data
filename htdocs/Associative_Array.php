<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
      $result["japanese"] = 80;
      $result["math"]     = 75;
      $result["science"]  = 90;
      $result["history"]  = 85;
      $result["english"]  = 80;
      var_dump($result );

      foreach ($result as $title => $score){
        echo $title. "." . $score."<br>";
      }
    ?>
  </body>
</html>
