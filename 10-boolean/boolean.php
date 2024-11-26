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
    var_dump(true);
    var_dump(false);
    $number=13;
    echo "\n 13>15\t";
    var_dump($number>15);
    echo "\n 10+3<15\t";
    var_dump((10+3)<15);
    var_dump(10+9>15);
    echo "\n------------------\n";
    var_dump($number<15);
    var_dump($number<=15);
    var_dump($number>=15);
    var_dump($number==13);
    echo "\n------------------\n";
    $name='Mehdi';
    var_dump($name=='Mehdi');
    var_dump($name!='Ali');

    echo "\n------------------\n";
    var_dump($name==='Mehdi');
    var_dump($name!=='mehdi');
    echo "\n------------------\n";
    $age='35';
    var_dump($age==35);
    var_dump($age===35);

    echo "\n------------------\n";
    var_dump(!true);
    var_dump(!false);
    echo "\n------------------\n";
    //&&
    $childAge=7;
    $gender='male';
    var_dump($childAge===7 && $gender=='male');
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    var_dump(true && true);
    echo "\n------------------\n";

    // ||
    var_dump(false || false);
    var_dump(false ||true);
    var_dump(true || false);
    var_dump( true || true);
    var_dump($name==='Mehdi' || $childAge===70);

    echo "\n------------------\n";
    var_dump(false xor false);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(true xor true);
    ?>

</pre>
</body>
</html>