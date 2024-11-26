<?php
try {
    $pdo=new PDO("mysql:host=localhost;dbname=names;charset=utf8mb4;","names","[IhtZkBIK201GjH/",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
}catch (PDOException $exception){
    die('connection failed '.$exception->getMessage());
}
//$statement=$pdo->prepare("select * from names");
//$statement->execute();
//var_dump($statement->fetch(PDO::FETCH_ASSOC));
