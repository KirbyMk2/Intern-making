<html>
<body>
<form method="POST">
���O:<br>
<input type="text" name="name"/><br>
�R�����g:<br>
<textarea name="comment" cols="30" rows="5"></textarea><br />
 <br />
<input type="submit" value="���M"/>
</form>
</body>
</html>
<?php
$filename="mission2-2.txt";

$fp=fopen($filename,'w');
$time = date("Y/n/j G:i:s"); 		//�����̎擾
$counter=0;
$name= $_POST["name"];
$comment=$_POST["comment"];

if($name!=NULL){
$counter++;
$write =$counter . ", ". $name  . ", ".  $comment . ", ".  $time ."/";
fwrite($fp,$write);
}

fclose($fp);
?>