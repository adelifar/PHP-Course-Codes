<?php
declare(strict_types=1);
header('Content-Type: text/plain');

function add5(int $number): int
{
    return $number + 5;
//    return "Hello";
//    return "123";
}

var_dump(add5(48));
var_dump(add5(49) + 62 - 36);

function print_5x(?string $message):void
{
    if (!empty($message))
        for ($i = 0; $i < 5; $i++) {
            echo "$message\n";
        }

}

print_5x('something!!');
print_5x(null);
$news=['title'=>'something','content'=>null];
print_5x($news['title']);
print_5x($news['content']);

function f(int|float|null $input):?string
{
    if (is_null($input))
        return null;
    return "Hello";

}
function add(int $number):int
{
    return $number+6;
}
$id=(int)($_GET['id']??0);
var_dump($id);
var_dump(add($id));
//add("mehdi");
//add([]);

function print5x(string $message)
{
    for ($i = 0; $i < 5; $i++) {
        echo "$message\n";
    }
}
print5x("Hello");
print5x((string)$id);
print5x("$id");
