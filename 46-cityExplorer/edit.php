<?php require_once __DIR__ . '/inc/all.php';
$id = (int)($_GET['id'] ?? 0);
$repository = new CityRepository($pdo);
$city = $repository->fetchById($id);

if ($city->id === 0) {
    header('Location: index.php');
    die();
}

if (!empty($_POST)) {
    $editedCity = new City($id,
        (string)($_POST['city'] ?? ''),
        (string)($_POST['cityAscii'] ?? ''),
        (string)($_POST['country'] ?? ''),
        0, 0,
        (string)($_POST['iso2'] ?? ''),
        '',
        '',
        (int)($_POST['population'] ?? ''), ''
    );
    if (empty($editedCity->city) || empty($editedCity->cityAscii) || empty($editedCity->country) ||
        empty($editedCity->iso2) || empty($editedCity->population)) {
        header('Location: index.php');
        die();
    }
    $repository->update($id,$editedCity);
    $city = $repository->fetchById($id);
//    header('Location: index.php');
//    die();
}
render('edit.view', [
    'city' => $city
]);