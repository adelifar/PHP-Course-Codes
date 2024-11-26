<?php
function e($value)
{
    return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
}
function render($view,$params)
{
    extract($params);
    ob_start();
    require __DIR__.'/../pages/'.$view.'.php';
    $contents=ob_get_clean();
    $letters = gen_letters();
    require __DIR__.'/../views/layout/main.view.php';
}
function gen_letters():array
{
    //A B-Z
//    var_dump(ord('A'));
//    var_dump(ord('Z'));
//    var_dump(chr(89));
    $A=ord('A');
    $Z=ord('Z');
    $letters=[];
    for ($i = $A; $i <= $Z; $i++) {
        $letters[]=chr($i);
    }
    return $letters;
}
//var_dump( gen_letters());