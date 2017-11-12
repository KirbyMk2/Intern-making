<html>
<body>
<form method="POST">
名前:<br>
<input type="text" name="name"/><br>
コメント:<br>
<textarea name="comment" cols="30" rows="5"></textarea><br />
 <br />
<input type="submit" value="送信"/>
</form>
<form method="POST">
削除番号:<br>
<input type="text" name="delete"/><br>
<input type="submit" value="送信"/>
</form>
</body>

</html>

<?php
$filename="mission2-2.txt";

$fp=fopen($filename,'w');
$time = date("Y/n/j G:i:s"); 		//日時の取得
$counter=0;
$name= $_POST["name"];
$comment=$_POST["comment"];
$sakuzyo=$_POST["delete"];

if($sakuzyo!=NULL){
$lines = file($filename);
$i=0;
while($lines!=NULL){
$pieces[$i]=explode(",", $lines);
$i++;
}

$i=0;

while($pieces != NULL){
if($pieces[$i][0]==$sakuzyo){
fwrite($fp,$pieces[$i][0]."<>".$pieces[$i][1]."<>".$pieces[$i][2]."<>".$pieces[$i][3]."<>");
}
$i++;
}
}

$abs=file_get_contents("mission2-2.txt");
$hyouzi=explode(",", $abs);
$a=1000;
$i=0;
while($i<$a){echo "$hyouzi[$i]";
$i++;
}

fclose($fp);
?>