<?php 
require_once("TestScore.php");
function score(string $name,int $math, int $english, int $nationalLanguage):void
{
    $sum =$math+$english+$nationalLanguage;
    $ave = round($sum/3,1);
    echo($name."の合計:".$sum."平均：".$ave."\n");
}

$A = new TestScore();
$A->name = "Aくん";
$A->math = 80;
$A->english = 91;
$A->nationalLanguage = 78;
score($A->name,$A->math,$A->english,$A->nationalLanguage);

$B = new TestScore();
$B->name = "Bくん";
$B->math = 93;
$B->english = 78;
$B->nationalLanguage = 85;
score($B->name,$B->math,$B->english,$B->nationalLanguage);





