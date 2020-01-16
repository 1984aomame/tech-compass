<?php 
require_once("TestScore.php");


$A = new TestScore();
$A->name = "Aくん";
$A->math = 80;
$A->english = 91;
$A->nationalLanguage = 78;
$A->score();

$B = new TestScore();
$B->name = "Bくん";
$B->math = 93;
$B->english = 78;
$B->nationalLanguage = 85;
$B->score();




