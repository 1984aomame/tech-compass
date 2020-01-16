<?php 
require_once("TestScore2.php");


$A = new TestScore2();
$A->setData('Aくん',80,91,78);
$A->score();
$A->math = "数学";

$B = new TestScore2();
$B-> setData("Bくん",93,78,85);
$B->score();

$ASum = $A->calcSum();
$BSum = $B->calcSum();
$ave2 = ($ASum+$BSum)/2;

echo("2人の合計点の平均は".$ave2);
$AAve = $A->calcAve();
$BAve = $B->calcAve();
$aveAve = round(($AAve +$BAve)/2,1);
echo("\n"."二人の平均の平均:".$aveAve);

