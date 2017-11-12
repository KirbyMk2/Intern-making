<?php
$user = 'ユーザ名';
$password = 'パスワード';
$pdo = new PDO('mysql:host=localhost;dbname=データベース名', $user, $password);

$sql = "DELETE FROM test_list WHERE name = :name";
 
// 更新する値と該当のIDは空のまま、SQL実行の準備をする
$stmt = $pdo->prepare($sql);
 
// 更新する値と該当のIDを配列に格納する
$params = array(':name' => 'beat');
 
// 更新する値と該当のIDが入った変数をexecuteにセットしてSQLを実行
$stmt->execute($params);
 
// 更新完了のメッセージ
echo '削除完了しました';
?>