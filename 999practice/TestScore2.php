<?php
class TestScore2
{
    public $name = "";
    public $math = 0;
    public $english = 0;
    public $nationalLanguage = 0; 

public function setData(String $name,int $math,int $english,int $nationalLanguage):void
{
    $this->name = $name;
    $this->math = $math;
    $this->english = $english;
    $this->nationalLanguage = $nationalLanguage;

}
 
public  function calcSum():int
{
    $sum = $this->math + $this->english + $this->nationalLanguage;
    return $sum;
}

public function calcAve():float
{
    $sum = $this->calcSum();
    $ave = round($sum/3,1);
    return $ave ;

}


public function score():void
{
    $sum = $this->calcSum();
    $ave = $this->calcAve();
    echo($this->name."の合計:".$sum."平均：".$ave."\n");
}
}