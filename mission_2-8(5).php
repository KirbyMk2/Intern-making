<?php

// DBハンドル生成

  $dsn = "mysql:host='データベース名'";
  $user = 'ユーザ名';
  $password = 'パスワード';
  $pdo = new PDO($dsn, $user, $password);

$sql = 'CREATE TABLE test_list
		(
		name text not null,	
		num int(20),
		PRIMARY KEY(name(100))
		);';
  $result=$pdo->query($sql);
?>