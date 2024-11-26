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
<pre>
    <?php
    $categories = array('programming', 'business', 'design', 'self improvement', 'history');
    //    var_dump($categories[99]);

    var_dump(isset($categories[99]));
    var_dump(empty($categories[99]));

    var_dump(in_array('programming', $categories));
    var_dump(in_array('technology', $categories));

    if (in_array('programming', $categories)) {
        echo "programming books are available in our system\n";
    }

    var_dump(count($categories));

    $categories[2] = "Art";
    var_dump($categories);
    //    unset($categories[3]);
    var_dump($categories);
    //    $categories[12]='Nature';
    $categories[] = 'Nature';
    var_dump($categories);


    $names = [
        'Mehdi Adeli',
        'Hasan rezaei',
        'Hadi javaheri',
        'Hosein khodaei',
        'kasra shojaei'
    ];
    $number=count($names);
    $choice= rand(0,$number-1);
    $winner=$names[ $choice];
//    $winner=$names[rand(0,count($names)-1)];
    var_dump($winner);
    echo "\nThe winner is : $winner\n";


    ?>
</pre>
</body>
</html>