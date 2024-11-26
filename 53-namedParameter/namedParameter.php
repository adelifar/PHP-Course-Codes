<?php
header("Content-type: text/Plain; charset=utf-8");
//function printNTimes($str='Hello',$times=5)
function printNTimes($str,$times)
{
    for ($i = 0; $i < $times; $i++) {
        var_dump($str);
    }
}
//printNTimes();
//printNTimes('Hello Mehdi Adeli',3);

//printNTimes('Hello',3);
//printNTimes(times: 10);

//printNTimes(times: 3);
//printNTimes(str: "Hello Mehdi ",times: 78);
printNTimes(times: 6,str: "hihi");
