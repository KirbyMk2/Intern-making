<?php
$filename='kadai3.txt';

$fp=fopen($filename,'w');

fwrite($fp,$_POST['moziretu']);
fclose($fp);
?>
<!DOCTYPE html>
<body>
<form method="POST">
<input type="text" name="moziretu"/>
<input type="submit" value="���M"/>
</form>
</body>
</html>