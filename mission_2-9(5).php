<?php

// DBハンドル生成

  $dsn = "mysql:host=localhost;dbname=データベース名";
  $user = 'ユーザ名';
  $password = 'パスワード';
  $pdo = new PDO($dsn, $user, $password);

$sql = 'SHOW TABLES';
  $result=$pdo->query($sql)->fetchAll(PDO::FETCH_COLUMN);
var_dump($result);
	foreach((array)$result as $row){ //参考:http://kotori-blog.com/php/foreach_error/
echo $row[0];
echo'<br>';}

?>
