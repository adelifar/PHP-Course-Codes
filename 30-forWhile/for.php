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
    for ($x = 0; $x <= 10; $x = $x + 1) {
        var_dump($x);
    }

    for ($x = 0; $x <= 10; $x = $x + 1)
        var_dump($x);

    for ($x = 0; $x <= 10; $x++)
        var_dump($x);


    for ($x = 0; $x <= 10; $x = $x + 2)
        var_dump($x);


    for ($x = 0; $x <= 10; $x += 2)
        var_dump($x);

    //    for ($i=0;$i>-5;$i+=5)
    //        var_dump($i);
    for ($i = 0; $i < 10; $i++) {
        if ($i === 4) continue;
        if ($i === 7) break;
        var_dump($i);
    }
    ?>


</pre>
<ul>
    <?php for ($i = 0; $i < 10; $i++): ?>
    <li><?=$i?></li>
    <?php endfor; ?>
</ul>
</body>
</html>
