<?php
header("Content-type: text/plain");

function addFive($number)
{
    return ($number + 5);
}

function dashLine()
{
    echo "\n-------------------\n";
}

addFive(9);
dashLine();
addFive(48);

$result = addFive(60);  //$result=65
dashLine();
var_dump($result);

function sayHello($name)
{
    $r = 'Hello ' . $name . "\n";
    return $r;
}

$result = sayHello("Mehdi");
var_dump($result);

$result = addFive(32) + 64;
var_dump($result);

echo addFive(addFive(addFive(6)));

function fetchNews($id)
{
    return [
        'id' => $id,
        'title' => 'this is the news title',
        'content' => 'this is content of the news'
    ];
}

dashLine();
$a = fetchNews(14);
var_dump($a);
dashLine();
echo $a['title'];
dashLine();
echo fetchNews(12)['content'];


function fetchNews2($id)
{
    if ($id > 100)
        return false;
    return [
        'id' => $id,
        'title' => 'this is the news title',
        'content' => 'this is content of the news'
    ];
}

dashLine();
var_dump(fetchNews2(120));
dashLine();
var_dump(fetchNews2(90));
dashLine();
$a=fetchNews2(123);
if (!empty($a)){
    var_dump($a);
}else echo "Could not find the news";

function f()
{
    echo "Hello";
}
$result=f();
dashLine();
var_dump($result);
var_dump(isset($result));
var_dump(empty($result));