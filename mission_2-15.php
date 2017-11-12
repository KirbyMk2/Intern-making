<form method="POST">
名前:<br>
<input type="text" name="name"/><br>
コメント:<br>
<textarea name="comment" cols="30" rows="5"></textarea><br />
 <br />
<input type="submit" value="送信"/>
</form>
</body>
</html>
<?php
<?php

// DBハンドル生成

  $dsn = "mysql:host=localhost;dbname=データベース名";
  $user = 'ユーザ名';
  $password = 'パスワード';
  $pdo = new PDO($dsn, $user, $password);

$sql = 'CREATE TABLE keiziban
		(
		id int(5),
		name text not null,	
		num int(20),
		time text not null,
		PRIMARY KEY(id)
		);';
  $result=$pdo->query($sql);



$time = date("Y/n/j G:i:s"); 		//日時の取得
$counter=0;
$name= $_POST["name"];
$comment=$_POST["comment"];

if($name!=NULL){
$counter++;
$write =$counter . ", ". $name  . ", ".  $comment . ", ".  $time ."/";
}

$sql = 'INSERT INTO keiziban(id,name,num,time)VALUES(:id,:name,:num,:time)';
$result=$pdo->prepare($sql);
$params=array(':name'=>'beat',':num'=>'10');
$result->execute($params);
echo "登録完了";//参考元:http://www.flatflag.nir87.com/insert-942,http://www.phpbook.jp/tutorial/pdo/index9.html
?>


fclose($fp);
?>