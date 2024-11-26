<?php
try {
    $pdo=new PDO("mysql:host=localhost;dbname=city;charset=utf8mb4;","city","BbK@5uMG]tBRTfoo",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
}catch (PDOException $exception){
    die('connection failed '.$exception->getMessage());
}
