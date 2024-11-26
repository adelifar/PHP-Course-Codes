<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include</title>
    <link rel="stylesheet" href="../19-form/style.css">
</head>
<body>
<pre><?php
//    include "inc/adf.php";
//    include "inc/b.php";

//    include "C:\\xampp\\htdocs\\php\\25-include\\inc\\a.php"
    var_dump(__DIR__);
    include __DIR__."/inc/a.php";
    var_dump(__FILE__);

    var_dump(dirname(__FILE__)); //__DIR__


    $text="Hello PHP programmers";

//    require __DIR__.'/inc/function.inc.php';
//    require __DIR__.'/inc/function.inc.php'
    require_once __DIR__.'/inc/function.inc.php';
    require_once __DIR__.'/inc/function.inc.php';
    require_once __DIR__.'/inc/function.inc.php';
    require_once __DIR__.'/inc/function.inc.php';

    include_once __DIR__.'/inc/function.inc.php';
    ?></pre>
<h1><?=e($text)?></h1>
<pre>
    <?php
    $text=file_get_contents(__DIR__.'/inc/function.inc.php'); //text file
    var_dump($text);
    readfile(__DIR__.'/inc/function.inc.php'); //big file
    ?>
</pre>
</body>
</html>
