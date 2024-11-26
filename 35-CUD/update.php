<?php
$pdo = new PDO("mysql:host=localhost;dbname=note", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$statement=$pdo->prepare("UPDATE `notes` SET `title` = :title, `content` = :content WHERE `id` = :id;");
$title='updated title';
$content='updated content';
$id=5;
$statement->bindValue(':title',$title);
$statement->bindValue(':content',$content);
$statement->bindValue(':id',$id);
$statement->execute();
