<?php require_once __DIR__ . '/inc/all.php';

$char = (string)($_GET['char'] ?? '');
$chars=gen_letters();
$names = [];
if (strlen($char) === 0 || !in_array($char,$chars)) {
    header("Location: index.php");
    die();
}
$perPage=15;
$page=(int)($_GET['page']??1);
$names = fetch_names($char,$page,$perPage);
$count=countNameWithChar($char);


render('char.view', [
    'names' => $names,
    'char' => $char,
    'pagination'=>[
        'page'=>$page,
        'count'=>$count,
        'perPage'=>$perPage
    ]
]);


