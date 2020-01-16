<?php 
function score(string $name,int $math, int $english, int $nationalLanguage):void
{
    $sum =$math+$english+$nationalLanguage;
    $ave = round($sum/3,1);
    echo($name."の合計:".$sum."平均：".$ave."\n");
}


$AName = "Aくん";
$AMath = 80;
$AEnglish = 91;
$ANationalLanguage = 78;
score($AName,$AMath,$AEnglish,$ANationalLanguage);


$BName = "Bくん";
$BMath = 93;
$BEnglish = 78;
$BNationalLanguage = 85;
score($BName,$BMath,$BEnglish,$BNationalLanguage);





