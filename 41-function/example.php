<?php

header('Content-Type: text/plain');
function f()
{
    
}

//function f()
//{
//
//}
//require __DIR__.'/example2.php';
if (function_exists('f')){
    echo "\nfunction exists\n";
}else{
    function f()
    {
        
    }
}

function func()
{
    echo "\nHello\n";
}
//function func($value)
//{
//    echo "\nHello ".$value;
//}

//func("sdf");
function get_filesize($size)
{
    $divide=1024;  //2^10
    if ($size<$divide)
        return "{$size} bytes";
    //kB
    $size=$size/$divide;
    if ($size<$divide)
        return round($size,2)." kB";  //1.56kB
    //MB
    $size/=$divide;
    if ($size<$divide)
        return round($size,2)." MB";
    //GB
    $size/=$divide;
    if ($size<$divide)
        return round($size,2)." GB";
    //TB
    $size/=$divide;
    return round($size,2)." TB";
}

$size=filesize(__DIR__.'/pexels-tranmautritam-68761.jpg');
var_dump($size);
var_dump(get_filesize($size));
var_dump(get_filesize(1500250505));
var_dump(get_filesize(150025050506));