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
    $name = 'ali';
    if ($name === 'mehdi')
        echo "Hello Mehdi\n";
    else
        echo "What is your name\n";

    //condition?true:false
    $text = ($name === 'mehdi' ? "Hello Mehdi\n" : "Whats is your name\n");
    echo $text;

    $arr = [
        'abc',
        ($name === 'mehdi' ? "Hello Mehdi\n" : "Whats is your name\n")
    ];
    print_r($arr);
    ?></pre>
</body>
</html>
