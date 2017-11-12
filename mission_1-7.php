<?php
$filename='kadai4.txt';

$fp=fopen($filename,'r');

$array = file($filename,FILE_IGNORE_NEW_LINES);


print_r($array);

fclose($fp);

?>