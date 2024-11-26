<!doctype html>
<html lang="]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    function e($value)
    {
        return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
    }
    //    define('DSN','mysql:host=localhost;dbname=note');
    const DSN = 'mysql:host=localhost;dbname=note';
    $pdo = new PDO(DSN, 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    //    var_dump(PDO::ATTR_ERRMODE);
    //    var_dump(PDO::ERRMODE_EXCEPTION);
//    $statement = $pdo->prepare("SELECT * FROM `notes`");
    $statement = $pdo->prepare("SELECT * FROM `notes` ORDER BY `notes`.`title` DESC");
    $statement->execute();
//    var_dump();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
//    print_r($results)

    ?>

<ul>
    <?php foreach ($results as $result):?>
    <li><?=e($result['title'])?></li>
    <?php endforeach;?>
</ul>
</body>
</html>
