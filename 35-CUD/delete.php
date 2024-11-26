<?php
$pdo = new PDO("mysql:host=localhost;dbname=note", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$statement=$pdo->prepare("DELETE FROM notes WHERE `id` = :id");
$id=4;
$statement->bindValue(':id',$id);
$statement->execute();
