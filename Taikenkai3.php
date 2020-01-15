<?php

$input="Apple orenge";

echo"与えられた文字列:".$input."\n";


//スペースで分割
$term = explode(" ",$input);

if($term[0]==$term[1]){
    echo"TRUE";
}elseif($term[0]!==$term[1]){
    echo"FALSE";
}


?>