<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>types</title>
    <link rel="stylesheet" href="../19-form/style.css">
</head>
<body>
<pre><?php
    $number = 10;
    var_dump($number);
    $str = 'Mehdi';
    var_dump($str);

    var_dump(is_integer($number));
    var_dump(is_integer($str));
    $numStr = '45';
    var_dump(is_integer($numStr));
    var_dump(is_string($number));
    var_dump(is_string($numStr));
    var_dump(is_string($str));
    var_dump(is_bool($number));
    var_dump(is_bool($numStr));
    $num2 = 10.0;
    var_dump(is_integer($num2));
    var_dump(is_float($num2));
    var_dump(is_numeric($num2));
    var_dump(is_numeric($number));

    var_dump(is_array($num2));
    $are = [1, 2];
    var_dump(is_array($are));

    $arr = [
        ['title' => 'php'],
        'A good course'
    ];

    foreach ($arr as $item) {
        if (is_array($item))
            var_dump($item['title']);
        else
            var_dump($item);
    }

    if (isset($_GET['price'])) {
        $price = (int)$_GET['price'];
        if ($price !== 0) {
            var_dump($price);
            var_dump($price * 1.1);
        }
        else
            echo "You must enter valid number for price";
    }

//    if (isset($_GET['name']) && is_string($_GET['name'])){
//        $name=(string)$_GET['name'];
//        var_dump('Hello '.$name);
//    }
    if (isset($_GET['name']) ){
        $name=@(string)$_GET['name'];
        var_dump('Hello '.$name);
    }

    $name=@(string) $_GET['name'] ?? '';
    var_dump($name);
    ?></pre>
<a href="types.php?<?php echo http_build_query(['name' => ['Mehdi', 'Ali']]) ?>">Click me</a>
</body>
</html>
