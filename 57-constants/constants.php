<?php
header('Content-type: text/plain');
//$path='c:\\users\\mehdi\\Desktop';
//constant
define('PATH',"c:\\users\\mehdi\\Desktop");

var_dump(PATH);

//define('PATH',"c:\\users\\mehdi\\Desktopsdfwe");
//var_dump(PATH);

const AGE=67;

var_dump(AGE);

class Car
{
    const COLOR='Black';
}
var_dump(Car::COLOR);
var_dump(PDO::FETCH_ASSOC);

