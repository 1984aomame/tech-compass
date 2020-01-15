<?php
//与えられた文字列
$score="55 70 72 58 60";

//与えられた合格点
$passingscore=65;
echo"合格点は:".$passingscore."\n";

echo"与えられた文字列:".$score."\n";


//スペースで分割
$term = explode(" ",$score);
//平均値を計算
$result=array_sum($term)/count($term);
echo"平均点は".$result."\n";

//与えられた文字列の平均と合格点を比較
if($passingscore<$result){
    echo"PASS";
}else if($passingscore>$result){
    echo"Failue";
}

?>