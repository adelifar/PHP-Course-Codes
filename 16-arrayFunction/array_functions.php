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
    $names = [
        'mehdi adeli',
        'ali hatami',
        'hosein ahmadi',

        'ali hatami',
        'mohammad nasiri',
        'ali hatami',

        'hadi hasani'
    ];
    $uniqueNames = array_unique($names);
    var_dump($uniqueNames);

    sort($names);
    var_dump($names);

    var_dump(array_search('mohammad nasiri', $uniqueNames));

   $smallArray= array_slice($uniqueNames,0,2);
   var_dump($smallArray);

   $numbers=[5,4,16,3,89];
   var_dump(min($numbers));
   var_dump(max($numbers));

   var_dump(array_sum($numbers));
   var_dump(array_sum($numbers)/count($numbers));

   $objects1=['book','pen'];
   $objects2=['tv','computer'];
   $out=array_merge($objects1,$objects2);
   var_dump($out);

   $out=[...$objects1,...$objects2,'phone'];
   var_dump($out);

   $nums=[10.145,1];
   var_dump(round(...$nums));
//   var_dump(round($nums[0],$nums[1]));


    ?>
</pre>
</body>
</html>
