<?php
//phpinfo();
//try {
    $pdo = new PDO("mysql:host=localhost;dbname=note;charset=utf8mb4", "root", "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
//}
//catch (PDOException $exception){
//
//    die("Connection failed: " . $exception->getMessage());
//}

$statement=$pdo->prepare("INSERT INTO `notes` ( `title`, `content`) VALUES ( 'title..', 'content..');");
$title = "😂";
$content = "😂😂😂";
$statement = $pdo->prepare("INSERT INTO `notes` ( `title`, `content`) VALUES ( :title, :content)");
$statement->bindValue(":title", $title);
$statement->bindValue(":content", $content);
$statement->execute();

