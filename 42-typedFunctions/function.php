<?php
header('Content-Type: text/plain');
function add_five($number)
{
//    var_dump($number);
    return $number + 5;
}

var_dump(add_five(5));

$id = $_GET['id'] ?? 0;
var_dump($id);
//var_dump(add_five($id));

function add_five_typed(int $number)
{
    return $number + 5;
}
var_dump(add_five_typed($id));
//var_dump(add_five_typed("mehdi"));
var_dump(add_five_typed(88));

function print_5x(string $message)
{
    for ($i = 0; $i < 5; $i++) {
        echo "$message \n";
    }
}
print_5x("Hello!");
//print_5x(['message'=>'hello']);  error

function sum_numbers(array $numbers)
{
    $sum=0;
    foreach ($numbers as $number) {
        $sum+=$number;
    }
    return $sum;
}
var_dump(sum_numbers([4,8,6,32,41]));
//var_dump(sum_numbers(45));  error
//var_dump(sum_numbers([1,2,3,'hello']));
//var_dump(sum_numbers([1,2,3,['age'=>54]])); error

function add_five_typed2(float|int $number)
{
    return $number+5;
}
var_dump(add_five_typed2(5));

var_dump(add_five_typed2(3.141));
var_dump(add_five_typed2(3.841));


function f(array|bool|string $input)
{
    var_dump($input);
}
f([]);
f(false);
f("hi every body");


