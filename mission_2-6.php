<html>
<mata charset="utf-8">
<lang="ja">
<head><title>�t�H�[��</title></head>

<body>
<h1>���̓t�H�[��</h1>
<form action="test.php" method="post">
    ��  �O�F<input type="text" name="name"><br>
    �R�����g�F<input type="text" name="comment"><br>
    �p�X���[�h�F<input type="text" name="password"><br>
    <input type="submit" value="���M����">
</form>

<br>

<h1>�폜�t�H�[��</h1>
<font color ="blue">�����p�ł��肢���܂��B</font><br>
<form action="test.php" method="post">
    �폜�F<input type="text" name="delete"><br>
    �p�X���[�h�F<input type="text" name="password2"><br>
    <input type="submit" name="sakuzyo" value="�폜����"><br>
</form>

    }
    <br>

<h1>�ҏW�t�H�[��</h1>
<font color ="blue">�����p�ł��肢���܂��B</font><br>
<form action = "test.php" method="post">
    �ҏW�Ώ۔ԍ�:<input type="text" name="number"><br>
    �p�X���[�h�F<input type="text" name="password3"><br>
    <input type="submit" name="hensyu"value="�ҏW����">
</form>



<?php

function submitChk () {
        /* �m�F�_�C�A���O�\�� */
        var flag = confirm ( "�폜���Ă���낵���ł����H\n\n���M�������Ȃ��ꍇ��[�L�����Z��]�{�^���������ĉ�����");
        /* send_flg �� TRUE�Ȃ瑗�M�AFALSE�Ȃ瑗�M���Ȃ� */
        return flag;}

$name = $_POST['name'];
$name = htmlspecialchars($name);

$comment = $_POST['comment'];
$comment = htmlspecialchars($comment);

$password = $_POST['password'];
$password = htmlspecialchars($password);

$time = date("Y/m/d H:i:s");

$line = file("test.txt");
$num = count($line);

$write = $num . "<>" . $name . "<>" . $comment . "<>" . $time;
$writepas = $password . "<>" . $num;

//�f�[�^��������
if (!empty($name) && !empty($comment)) {
$fp = fopen ("test.txt","a");
fputs ($fp, $write."\n");
fclose ($fp);
}

//�p�X���[�h��������
if (!empty($password)) {
$fp = fopen ("testpas.txt","a");
fputs ($fp, $writepas."\n");
fclose ($fp);
}

//�f�[�^����
$delCon = file("test.txt");
$pasCon = file("testpas.txt");
$delete = $_POST['delete'];
$sakuzyo = $_POST['sakuzyo'];
$pas2 = $_POST['password2'];

if (!empty($sakuzyo)) {
    /**
     * �m�F�_�C�A���O�̕Ԃ�l�ɂ��t�H�[�����M
    */
    
<form name="form3" method="post" action="content/demo/test.php" onsubmit="return submitChk()">
    <input type="submit" name="submit" value="���M">
</form>

    for ($r = 0; $r < count($pasCon) ; $r++) {
    $pasData = explode("<>",$pasCon[$r]);

    for ($j = 0; $j < count($delCon) ; $j++) {
    $delData = explode("<>", $delCon[$j]);

        if ($delData[0] == $delete && $pasDate[0] == $pas2) {
        array_splice($delCon, $j, 1);
        array_splice($pasCon, $r, 1);
        file_put_contents("test.txt", $delCon);
        file_put_contents("testpas.txt", $pasCon);
        }
    }
    }
}

//�f�[�^�ҏW
$hensyu = $_POST['hensyu'];
$pas3 = $_POST["password3"];
$bnum = $_POST["number"];
$ediCon = file("test.txt");
$pasLog = file("testpas.txt");

if (!empty($hensyu)) {

    for($v = 0; $v < count($pasLog); $v++){
    $pasline = explode("<>",$pasLog[$v]);

    for($i = 0; $i < count($ediCon); $i++){
    $ediline = explode("<>",$ediCon[$i]);

       if($ediline[0] == $bnum && $pasline[0] == $pas3){

        echo "No$ediline[0]�̏������݂�ҏW���Ă�������<br>";
        echo "<form method=POST action=test.php>";
        echo "��  �O�F<input type='text' name='name2' size='20' value='" . $ediline[1] . "'><br>";
        echo "�R�����g�F<input type='text' name='comment2' size='60' value='" . $ediline[2] . "'><br>";
        echo "<input type='submit' name='uwagaki' value='�㏑���ۑ�'><input type='hidden' name='bnumber' value='" . $bnum . "'>";
        echo "</form>";
        break;
       }    

    }
    }
}

if (!empty($sakuzyo)) {
    for ($r = 0; $r < count($pasCon) ; $r++) {
        $pasData = explode("<>",$pasCon[$r]);
        if ($pasData[0] == $pas2 && $pasData[1] == $delete) {
            for ($j = 0; $j < count($delCon) ; $j++) {
                $delData = explode("<>", $delCon[$j]);
                if ($delData[0] == $delete) {
                    array_splice($pasCon, $r, 1);
                    array_splice($delCon, $j, 1);
                    file_put_contents("test.txt", $delCon);
                    file_put_contents("testpas.txt", $pasCon);
                    break;
                }
            }
            break;
        }
    }
}

//�ҏW�㏑��
if (!empty($_POST["uwagaki"])){
$ediLog = file("test.txt");
   for ($i = 0; $i < count($ediLog); $i++) {
   $line2 = explode("<>", $ediLog[$i]);

        $bnum = $_POST["bnumber"];
        $name = $_POST['name2'];
        $comment = $_POST['comment2'];

        if ($line2[0] == $bnum) { //�u�������Ώۍs��T��
       $newline = $bnum . "<>" . $name . "<>" . $comment . "<>" . $time . "\n";
       array_splice($ediLog,$i,1,"$newline");
       file_put_contents("test.txt", $ediLog);
        }
   }
}

echo "__________________�f����______________________<br>";
//�o��
$dateFile = "test.txt";
$file = file($dateFile);
    foreach($file as $value){
    explode("<>",$value);
    echo $value . "<br>\n";
    }
?>

</body>
</html>


