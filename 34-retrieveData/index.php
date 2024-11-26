<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../33-pdo/style.css">
</head>
<body>
<pre>
    <?php
    function e($value)
    {
        return htmlspecialchars($value,ENT_QUOTES,"UTF-8");
    }
    const DSN = 'mysql:host=localhost;dbname=note';
    $pdo = new PDO(DSN, 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
//    $statement = $pdo->prepare("SELECT * FROM `notes` ");
//    $statement->execute();

//    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
//    $result=$statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);
//
//    $result=$statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);
//
//    $result=$statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);
//
//    $result=$statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);
//    while ($result=$statement->fetch(PDO::FETCH_ASSOC)) {
//        var_dump($result);
//    }

//    $id=(int) $_GET['id'];
//    $query = "SELECT * FROM notes WHERE id ={$id}";
//    var_dump($query);
////sql injection
//    $statement = $pdo->prepare($query);
//    $statement->execute();
//    $result=$statement->fetch(PDO::FETCH_ASSOC);
//    var_dump($result);


    $id= $_GET['id'];


    $statement = $pdo->prepare("SELECT * FROM notes WHERE id =:myId");
    $statement->bindValue(":myId", $id);
    $statement->execute();
    $result=$statement->fetch(PDO::FETCH_ASSOC);
    var_dump($result);
    ?>
</pre>
</body>
</html>
