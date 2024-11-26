<?php require_once __DIR__ . '/inc/all.php';
$name = (string)($_GET['name'] ?? '');
if (empty($name)) {
    header("Location: index.php");
    die();
}
$results = getNameEntities($name);
render('name.view', [
    'results' => $results,
    'name' => $name,
    'char'=>$name[0]
]);


