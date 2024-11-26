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
    $books=[
        'شاهنامه',
        'گلستان',
        'لیلی و مجنون',
        'مثنوی معنوی'
    ];
    $authors=[
        'فردوسی',
        'سعدی',
        'نظامی',
        'مولوی',
    ];
    print_r($books);
    echo "$books[0] has been written by $authors[0]";
    print_r($authors);

    $books=[
        'شاهنامه'=> 'فردوسی',
        'گلستان'=> 'سعدی',
        'لیلی و مجنون' => 'نظامی',
        'مثنوی معنوی' => 'مولوی'
    ];
    print_r($books);
    var_dump($books);
    $br="\n";
    echo $books['گلستان'].$br;
    echo $books['لیلی' . ' و ' . 'مجنون'].$br;

    var_dump(isset($books['گلستان']));
    var_dump(empty($books['گلستان']));
    var_dump(isset($books['mehdi']));
    var_dump(empty($books['mehdi']));
    $key='شاهنامه';
    var_dump($books[$key]);

    $books['موش و گربه']='عبید زاکانی';
    var_dump($books);
    print_r($books);
    print_r(count($books));
    unset($books['شاهنامه']);
    print_r($books);
    foreach ($books as $book){
        echo $book.$br;
    }
    echo $br;
    foreach ($books as $book=>$author){
        echo "$book by $author $br";
    }

    foreach ($books as $key=>$value){
        echo "$key by $value $br";
    }

    print_r(array_keys($books));
    print_r(array_values($books));
    $books[0]='book #0';
    $books[]='new book';
    print_r($books);

    echo $books['0'].$br;
    ?></pre>
</body>
</html>