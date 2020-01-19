<?php

$array = [
  1,2,3,4,5,6,7,8,9,
];


// var_dump($array);

foreach ($array as $height){
    // var_dump($array);
  foreach($array as $width){
    //  var_dump($array);
    $total = $height*$width;
    //  var_dump($array);
    //  var_dump($total);
     if($total<10){
       echo' '.$total;  //２桁の数値に合わせて空白を用意
    //  var_dump($array);
    // var_dump($total);
      }else{
       echo $total;
    //  var_dump($array);
    //  var_dump($total);
     }
     echo' ';
  }
  echo PHP_EOL;
}
?>