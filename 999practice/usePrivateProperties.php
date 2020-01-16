<?php
require_once("PrivateProperties.php");

$privateProperties = new PrivateProperties();

$privateProperties ->setNumber(24);
$privateProperties->setpublicNumber(30);
echo"$privateProperties->publicnumber";
$answer = $privateProperties->getNumber();
//echo"$privateProperties->privatenumber";

print("praivate内のnumberの値：".$answer);

$privateProperties->getNumber() ;

//$privateProperties->number=46(直接代入すると）エラーになる

