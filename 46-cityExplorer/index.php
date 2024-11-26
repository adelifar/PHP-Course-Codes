<?php require_once __DIR__ . '/inc/all.php';
$repository=new CityRepository($pdo);

$count=$repository->count();
$perPage=15;
$page=(int)($_GET['page']??1);
$page=max(1,$page);
$entries=$repository->paginate($page,$perPage);
render('index.view',[
    'entries'=>$entries,
    'pagination'=>[
        'count'=>$count,
        'perPage'=>$perPage,
        'page'=>$page
    ]
]);