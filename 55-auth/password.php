<?php
header("Content-type: text/plain");

$password='hello';
$time=microtime(true);
$password=md5('hello');
$time2=microtime(true);
echo $password;
echo "\n";
echo "time of md5 is:".$time2-$time."\n";


$time=microtime(true);
$password=sha1('helloHE_23');
$time2=microtime(true);
echo $password;
echo "\n time of sha1 is:".$time2-$time."\n";;
//secure , slow
$time=microtime(true);
$password=password_hash('hello',PASSWORD_DEFAULT);
$time2=microtime(true);
echo "\n";
echo $password;

echo "\n\n".$time2-$time."\n";;

$p='helLo';

echo password_hash($p,PASSWORD_DEFAULT);
echo "\n";
$result=password_verify($p,$password);
var_dump($result);
