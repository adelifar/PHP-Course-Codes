<?php
header('Content-type: text/plain');
//static
//class Car
//{
//    public string $name='car';
//    public function drive()
//    {
//        var_dump("{$this->name} is driving");
//    }
//}
//$bmw=new Car();
//$bmw->name='bmw';
//$bmw->drive();

class Car
{
    public static string $name;

    public static function drive()
    {
        self::$name = 'car1';
        var_dump("car is driving");
    }
}

//Car::drive();

$benz = new Car();
$benz->drive();
Car::$name = 'mycar';
//var_dump($benz::name); //error
$benz->drive();
var_dump(Car::$name);