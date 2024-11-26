<?php
//require __DIR__.'/admin/Role.php';
//require __DIR__.'/admin/user.php';
//require __DIR__.'/client/User.php';
//function autoload($class)
//{
//    var_dump($class);
//    if ($class==="Admin\\User" ){
//        require __DIR__.'/admin/user.php';
//        return;
//    }
//    if ($class==="Admin\\Role" ){
//        require __DIR__.'/admin/Role.php';
//        return;
//    }
//    if ($class==="Client\\User" )
//        require __DIR__.'/client/user.php';
//}


//function autoload($class)
//{
//    var_dump($class);
//    $filePath=__DIR__.'/'.str_replace('\\','/',$class).'.php';
//    var_dump($filePath);
//    if (file_exists($filePath))
//        require $filePath;
//}

//function sayHello()
//{
//    echo "Hello my friend";
//}
//
//$print = function () {
//    echo "Hello my friend";
//};
//
////sayHello();
////$print();
//
//spl_autoload_register(function ($class) {
//    $filePath = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
//    var_dump($filePath);
//    if (file_exists($filePath))
//        require $filePath;
//});
require __DIR__.'/autoload.php';

$admin = new App\Admin\User();
$client = new App\Client\User();