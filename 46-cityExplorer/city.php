<?php require_once __DIR__ . '/inc/all.php';
$id=(int)($_GET['id']??0);
$repository=new CityRepository($pdo);
$city=$repository->fetchById($id);

if ($city->id===0){
    header('Location: index.php');
    die();
}
render('city.view',[
    'city'=>$city
]);