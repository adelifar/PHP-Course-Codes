<?php
declare(strict_types=1);
function fetch_names(string $char,int $page=1,int $perPage=15):array
{
    $page=max(1,$page);
//    require __DIR__.'/inc/db-connect.php';
    $char=validateChar($char);
    global $pdo;
    $statement = $pdo->prepare("SELECT DISTINCT name FROM `names` where name like :expr ORDER by name limit :limit offset :offset;");
    $statement->bindValue(":expr", "$char%");
    $statement->bindValue(":limit",$perPage,PDO::PARAM_INT);
    $statement->bindValue(":offset",($page-1)*$perPage,PDO::PARAM_INT);
    $statement->execute();
    $results= $statement->fetchAll(PDO::FETCH_ASSOC);
    $names=[];
    foreach ($results as $result)
        $names[]=$result['name'];
    return $names;
}
function countNameWithChar(string $char):int
{
    global $pdo;
    $statement=$pdo->prepare("SELECT COUNT(DISTINCT name)as cnt from names where name LIKE :expr;");
    $statement->bindValue(":expr","$char%");
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC)['cnt'];
}
function validateChar(string $char):string
{
    if(strlen($char)>1)
        $char=$char[0];
    return $char;
}
function getNameEntities(string $name):array
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM `names` WHERE name=:name ORDER BY `year` DESC;");
    $statement->bindValue(":name", $name);
    $statement->execute();
   return $statement->fetchAll(PDO::FETCH_ASSOC);

}
function getTopNames():array
{
    global $pdo;
    $statement=$pdo->prepare("SELECT name,sum(`count`) as sm from names GROUP by name order by `sm` DESC LIMIT 10;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
