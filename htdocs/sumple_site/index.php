<?php
  $fp = fopen("info.txt","r");
?>
<html>
<head>
  <meta http-equiv="Content-Type"　content="text/html; charset=UTF-8">
  <title>サンプルサイト</title>
</head>
<body>
  <h1>サンプルサイト</h1>
  <h2>お知らせ</h2>
  <?php
    //ファイルが正しく読み込めたとき
    if($fp){
      $title = fgets($fp);//ファイルから1行読み込む
      //1行読み込めたとき
      if($title){
        echo '<a href="info.txt">'.$title.'</a>';
      }else{
        //ファイルの中身が空だった時
        echo 'お知らせはありません。';
      }
      fclose($fp);//ファイルを閉じる
    }else{
      //ファイルが開けなかったとき
      echo 'お知らせはありません';
    }
   ?>

</body>
</html>
