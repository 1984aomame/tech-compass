<?php
class TestScore
{
    public $name = "";
    public $math = 0;
    public $english = 0;
    public $nationalLanguage = 0; 

 
public function score():void
{
    $sum = $this->math + $this->english + $this->nationalLanguage;
    $ave = round($sum/3,1);
    echo($this->name."の合計:".$sum."平均：".$ave."\n");
}
}