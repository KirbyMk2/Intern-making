<?php
$user = 'ユーザ名';
$password = 'パスワード';
$pdo = new PDO('mysql:host=localhost;dbname=データベース名', $user, $password);

// SELECT文を変数に格納
$sql = "SELECT * FROM test_list";
 
// SQLステートメントを実行し、結果を変数に格納
$result = $pdo->query($sql);
 
// foreach文で配列の中身を一行ずつ出力
foreach ((array)$result as $row) {
 
  // データベースのフィールド名で出力
echo $row['name'].',';
echo $row['num'].'<br>';
}
?>