<?php require_once __DIR__ . '/inc/all.php';
$names = getTopNames();

render('index.view',[
        'names'=>$names
]);



