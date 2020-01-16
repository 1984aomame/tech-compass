<?php 
require_once("TestScore.php");
function score(TestScore $student):void
{
    $sum =$student->math + $student->english + $student->nationalLanguage;
    $ave = round($sum/3,1);
    echo($student->name."の合計:".$sum."平均：".$ave."\n");
}

$A = new TestScore();
$A->name = "Aくん";
$A->math = 80;
$A->english = 91;
$A->nationalLanguage = 78;
score($A);

$B = new TestScore();
$B->name = "Bくん";
$B->math = 93;
$B->english = 78;
$B->nationalLanguage = 85;
score($B);




