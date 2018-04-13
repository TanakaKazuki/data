<!DOCTYPE html>
<html>
  <head>
    <title>変数の代入</title>
  </head>
  <body>
    <?php
    //簡易的に登校日を設定する
    //mktimeという機能を使い2018/4/12　14:10の日時を作る
    $blog = mktime(14,10,0,4,12,2018);
    //それが1日以内ならNewと表示する
    $time = time(); //time()は、現在時刻のUnixタイムスタンプを返す。
    //タイムスタンプとは、1970年1月１日から指定日時までの通算秒数を表す
    if( $blog >= time() - 1523542200){
      echo "New";
    }
    ?>
  </body>
</html>
