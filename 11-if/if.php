<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../09-numbers/styles.css">
</head>
<body>
<pre><?php
    //if(condition| boolean){}
    if (true){
        echo 'welcome to tosinso!';
    }
    echo "\n---------------------\n";
    include "vars.php";
    if ($status==='ok'){
        echo 'welcome to our website';
        echo 'Tell us about website';
    }
    if ($status==='maintenance'){
        echo 'Oh no!';
        echo 'sorry we are under maintenance';
    }
    echo "\n---------------------\n";
    if ($status==='ok')
        echo 'welcome';

    echo "\n---------------------\n";
    if ($status==='ok'){
        echo 'weblcome';
    }
    else{
        echo 'we are not available!';
    }
    echo "\n---------------------\n";
    echo "\n---------------------\n";
    echo "\n---------------------\n";
    if ($status==='ok'){
        echo 'weblcome';
    }
    elseif($status==='error'){
        echo 'Oh this is an error';
    }
    elseif (4>2 && $status==='ok' ){
        echo 'we will come soon';
    }
    else{
        echo 'we are not available';
    }
    ?>

</pre>
</body>
</html>