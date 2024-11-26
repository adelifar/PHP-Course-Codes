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
    $category1 = 'programming';
    $category2 = 'business';
    $category3 = 'design';
    ?>

    <?php
    $category4 = 'self improvement';
    $category5 = 'history';
    ?>


    <ul>
        <li><?= $category1 ?></li>
        <li><?= $category2 ?></li>
        <li><?= $category3 ?></li>
        <li><?= $category4 ?></li>
        <li><?= $category5 ?></li>
    </ul>
    <select>
        <option><?= $category1 ?></option>
        <option><?= $category2 ?></option>
        <option><?= $category3 ?></option>
        <option><?= $category4 ?></option>
    </select>
<?php
$categories = array('programming', 'business', 'design', 'self improvement', 'history');
//echo $categories;
var_dump($categories);
var_dump($categories[0]);
echo $categories[0]."\n";
echo $categories[4]."\n";

$firstCategory=$categories[0]."-----\n";
echo $firstCategory;

$anyArray=array('mehdi',4,true,50+6);
var_dump($anyArray);


$newArray=['mehdi',4,true,50+6];
var_dump($newArray);

$newArray[1]=88;
var_dump($newArray);
?>
     <ul>
        <li><?= $categories[0] ?></li>
        <li><?= $categories[1] ?></li>
        <li><?= $categories[2] ?></li>
        <li><?= $categories[3] ?></li>
        <li><?= $categories[4] ?></li>
    </ul>
</pre>
</body>
</html>
