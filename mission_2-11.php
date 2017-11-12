<?php
$user = 'ユーザ名';
$password = 'パスワード';
$pdo = new PDO('mysql:host=localhost;dbname=データベース名', $user, $password);
$sql = 'INSERT INTO test_list(name,num)VALUES(:name,:num)';
$result=$pdo->prepare($sql);
$params=array(':name'=>'beat',':num'=>'10');
$result->execute($params);
echo "登録完了";//参考元:http://www.flatflag.nir87.com/insert-942,http://www.phpbook.jp/tutorial/pdo/index9.html
?>
