<?php
//
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cms;charset=utf8mb4', 'cms', 'a1MsKEgwNNKfuSWK',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $exception) {
    echo "An error occurred {$exception->getMessage()}";
    die();

}
return $pdo;