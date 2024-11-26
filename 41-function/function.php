<?php
header("Content-Type: text/plain");

function f($str)
{

    echo "$str!!\n";
    echo "$str!!\n";
    echo "$str!!\n";
}

//echo "Hello world\n";
//echo "Hello world\n";
//echo "Hello world\n";

//input Parameter
f("Hello PHP");
echo "-------------------\n";

//echo "Hello world\n";
//echo "Hello world\n";
//echo "Hello world\n";
$str="Mehdi Adeli";
f($str);
echo "-------------------\n";
f("Hello "."PHP"." Programmers");
f("PHP is Incredible");
//echo "Hello world\n";
//echo "Hello world\n";
//echo "Hello world\n";

function f2($str='hi',$count=3)
{
    for ($i=0;$i<$count;$i++)
        echo "$str!!\n";
}
function dashLine()
{
    echo "-------------------\n";
}
dashLine();
f2("Mehdi Adeli",5);
dashLine();
f2("PHP Language",2);
dashLine();
f2("Hello");
dashLine();
f2();
