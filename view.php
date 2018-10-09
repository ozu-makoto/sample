<!DOCTYPE html>
<html lang="ja">
<head>
<title>PHPのテスト</title>
</head>
<body>
<?php

  //$_POST["slack"]としてデータ参照
  if ($_POST["slack"] != "" ) {
    print "スラック名:";
    print $_POST["slack"];
  }
  //データがないとき
  else {
    print "スラック名を選択してください。";
    
  }

 ?>
</body>
</html>
