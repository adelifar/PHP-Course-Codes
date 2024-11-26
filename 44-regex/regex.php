<?php
header('Content-Type: text/plain');
$message='Happy 29th birthday! Best wishes 16 8';
//var_dump(preg_match('/30/',$message));
$m=null;
var_dump(preg_match('/\d\d/',$message,$m));
var_dump($m);
echo "----------------------------------\n";
var_dump(preg_match_all('/\d\d/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\D/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
echo "----------------------------------\n";
var_dump(preg_match_all('/\w/',$message,$m));
var_dump($m);
echo "----------------------------------\n";
var_dump(preg_match_all('/\d\d\w\w/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\d\dth/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\d*/',$message,$m));
var_dump($m);
echo "----------------------------------\n";
var_dump(preg_match_all('/\d+/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\d+ ?th/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\w{5}/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\w{5,}/',$message,$m));
var_dump($m);

echo "----------------------------------\n";
var_dump(preg_match_all('/\w{6,8}/',$message,$m));
var_dump($m);


