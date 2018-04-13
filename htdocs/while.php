<!DOCTYPE html>
<html>
  <head>
    <title>基本的なPHPの書き方</title>
  </head>
  <body>
    <?php
        $i = 1;
        while ($i <= 10){
          echo $i."<br>";
          $i++;
        }
        do{
          echo $i."<br>";
          $i--;
        }while($i>=1)
    ?>
  </body>
</html>
