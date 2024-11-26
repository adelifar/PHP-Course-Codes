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
    require __DIR__ . '/../layouts/main.view.php';

}
function getFlagForCountry(string $st):string
{
    $number=127397;
    if (strlen($st)!==2)
        return $st;
    $st=strtoupper($st);
    $ch1=ord($st[0])+$number;
    $ch2=ord( $st[1])+$number;
    return mb_chr($ch1).mb_chr($ch2);
}