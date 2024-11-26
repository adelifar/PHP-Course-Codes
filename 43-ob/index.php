<?php
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
function render($view,$params)
{
//    foreach ($params as $key=>$value)
//        ${$key}=$value;
    extract($params);
    ob_start();
    require __DIR__.'/views/'.$view.'.php';
    $contents=ob_get_clean();
    require __DIR__.'/layout/main.view.php';
}
$name="Mehdi";
render("index.view",[
    'name'=>'Mehdi',
    'age'=>66
]);

$v='name';
//var_dump(${$v});