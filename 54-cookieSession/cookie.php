<?php
//cookie
//setcookie('str','Hello mehdi');
//maps.google.com
//var_dump($_COOKIE);
//setcookie('str','Mehdi',time()+2*24*60*60,"/","");

//$counter=0;
//if (!empty($_COOKIE['counter']))
//    $counter = $_COOKIE['counter'];

$counter=@(int)($_COOKIE['counter']??0);
setcookie('counter',$counter+1);

var_dump($counter);