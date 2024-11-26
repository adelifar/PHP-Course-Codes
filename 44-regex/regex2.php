<?php
header('Content-Type: text/plain');
$message='Happy 29th birthday!';
function brk()
{
    echo "\n------------------------------------\n";
}
//^ $
var_dump(preg_match('/^\d/',$message,$matches));
var_dump($matches);
brk();
var_dump(preg_match('/\d$/',$message,$matches));
var_dump($matches);
brk();
var_dump(preg_match('/\d+\.\d+/','hello 123.45 test',$matches));
var_dump($matches);
brk();
var_dump(preg_match('/\d+\.\d+$/','hello 123.45',$matches));
var_dump($matches);
brk();
var_dump(preg_match('/^\d+\.\d+$/','123.45',$matches));
var_dump($matches);
brk();
var_dump(preg_match('/^\w+@\w+\.\w{3,6}$/','user@example.com',$matches));
var_dump($matches);
brk();
var_dump(preg_match('/.+/',$message,$matches));
var_dump($matches);
brk();
//[a-z]=>a...z [A-Z]->range
//[ABC]->a or b or c
//[Aa-z]- >A or range a to z
//[a-zA-Z0-9] \w
//[!?_]
//[a-zA-Z0-9!]
//[a-zA-Z\d]
//[^a-z]
var_dump(preg_match('/[0-9]{2}/',$message,$matches));
var_dump($matches);
brk();
var_dump(preg_match('/[0-9]{2}[a-z]*/',$message,$matches));
var_dump($matches);
brk();
var_dump(preg_match('/[bB][a-zA-Z]+/',$message,$matches));
var_dump($matches);
brk();

var_dump(preg_match('/[^a-zA-z ]+/',$message,$matches));
var_dump($matches);
brk();

var_dump(preg_match('/[^a-zA-z0-9 ]/',$message,$matches));
var_dump($matches);
brk();

$message='The hotel costs $ 250.00, and the flight is € 150.00. Your number is 123.00';
var_dump(preg_match('/\$ \d+\.\d{2}/',$message,$matches));
var_dump($matches);
brk();


var_dump(preg_match_all('/([$€]) (\d+\.\d{2})/u',$message,$matches));
var_dump($matches);
brk();

var_dump($result=preg_replace('/([$€]) (\d+\.\d{2})/u','----',$message));
brk();
var_dump($result=preg_replace('/([$€]) (\d+\.\d{2})/u','--$0--',$message));

brk();
var_dump($result=preg_replace('/([$€]) (\d+\.\d{2})/u','<u>$0</u>',$message));
brk();

var_dump(preg_replace('/([$€]) (\d+\.\d{2})/u','<u>$2</u>',$message));