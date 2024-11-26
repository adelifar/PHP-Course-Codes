<?php
header("Content-type: text/plain");

//closure
function print2times()
{
    for ($i = 0; $i < 2; $i++) {
        var_dump('Hello!!!');
    }
}

print2times();
$print2 = function () {
    for ($i = 0; $i < 2; $i++) {
        var_dump('Hello!!!');
    }
};
$print2();

$var='World';

$print3=function () use($var) {
    for ($i = 0; $i < 3; $i++) {
        var_dump('Hello!!!'.$var);
    }
};

$print3();