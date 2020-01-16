<?php
class PrivateProperties{
    private $privatenumber;
    public $publicnumber;

    public function setpublicNumber(int $number):void
    {
    $this->number = $number;
    }

    public function getpublicNumber():int
    {
        return $this->number;
    }

    public function setNumber(int $number):void
    {
    $this->number = $number;
    }

    public function getNumber():int
    {
        return $this->number;
    }
}