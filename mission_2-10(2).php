<?php
$user = 'ユーザ名';
$password = 'パスワード';
$pdo = new PDO('mysql:host=localhost;dbname=データベース名', $user, $password);
$sql = 'show create table test_list';
$result=$pdo->query($sql);
foreach((array)$result as $row){
echo "<pre>"; 
var_dump($row);
echo "</pre>";
echo '<br>';}
?>