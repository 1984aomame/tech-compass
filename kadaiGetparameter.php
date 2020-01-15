<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>入力結果</title>
</head>
<body>
<?php
    //正解は7538
 const ANSWER = [7, 5, 3, 8];


 echo"あなたが入力した数値は「".$_GET["data"] ."」ですね<br>";

 //4桁の数値の文字列を桁毎に取り出す
 $input = str_split($_GET['data']);  
 


 echo"<br>";
  
echo "数字と桁の位置がともに正しい数値の個数は〇個です。<br>";
echo "数字は正しいが、桁の位置がずれている数値の個数は〇個です。<br>";




?>

</form>
</body>
</html>