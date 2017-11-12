<html lang

<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname='データベース名';charset=utf8','ユーザ名','パスワード',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
?>