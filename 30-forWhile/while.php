<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<pre>
    <?php
    //    while (true){
    //        var_dump('Hello');
    //    }
    $sum = 0;
    $number = 0;
    while ($sum < 100) {
        $sum = $sum + $number;
        $number++;
    }
    var_dump($number);
    var_dump($sum);
    $sum = 0;
    $number = 0;
    while ($sum < 100) {
        $sum = $sum + $number;
        $number++;
        if ($number == 4)
            continue;

        if ($number == 15) break;

    }
    var_dump($number);
    var_dump($sum);
    ?>
</pre>
<ul>
<?php while ($sum>0):?>
<li><?php echo $sum--?></li>
<?php endwhile;?>
</ul>
</body>
</html>