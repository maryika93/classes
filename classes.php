<?php

class Car
{
    public $color = 'Black';
    public $box = 'auto';
    public function changeColor($color)
    {
        $this->color->$color;
    }
    public function changeBox($box){
        $this->box->$box;
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->color;
$lada->changeBox('mehanic');
$mersedes->changeColor('green');
$mersedes->box;

class TV
{
    public $type = 'type';
    public $size = 'small';
    public function changeType($type){
        $this->type->$type;
    }
    public function changeSize($size){
        $this->size->$size;
    }
}
$LG = new TV();
$Toshiba = new TV();
$Toshiba->type;
$LG->changeType('black&white');
$LG->size;
$Toshiba->changeSize('big');

class Pen
{
    public $colorpen = 'blue';
    public $type = 'expensive';
    public function changeType($type)
    {
        $this->type->$type;
    }
    public function changeColor($colorpen)
    {
        $this->type->$colorpen;
    }
}
$Parker = new Pen();
$Pilot = new Pen();
$Parker->type;
$Pilot->changeType('cheap');
$Parker->colorpen;
$Pilot->changeColor('Black');

class Duck
{
    public $size = 'big';
    public $gend = 'drake';
    public function changeSize($size)
    {
        $this->size->$size;
    }
    public function changeGend($gend)
    {
        $this->gend->$gend;
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Donald->gend;
$Daisy->changeGend('duck');
$Donald->size;
$Daisy->changeSize('small');

class Goods
{
    public $price = '1000';
    public $discont = '10';
    public $pop = 'popular';
    public $tv = 'Toshiba';
    public function changePrice($price)
    {
        $this->price->$price;
    }
    public function changeDiskont($discont)
    {
        $this->discont->$discont;
    }
    public function changePop($pop)
    {
        $this->pop->$pop;
    }
    public function changeTv($tv)
    {
        $this->tv->$tv;
    }
}
$First = new Goods();
$Second = new Goods();
$Third = new Goods();
$First->price;
$First->changeDiskont('35');
$First->pop;
$First->tv;
$Second->price;
$Second->discont;
$Second->changePop('unpopular');
$Second->changeTv('Tomas');
$Third->changePrice(5000);
$Third->changeDiskont('0');
$Third->pop;
$Third->changeTv('Sony');

?>
