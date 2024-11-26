<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
function e($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$allowedExtensions = [
    'jpg',
    'png',
    'jpeg'
];
$imageHandle = opendir(__DIR__ . '/images');
$images = [];
$title = '';
$content = '';
while (($currentFile = readdir($imageHandle)) !== false) {
    if ($currentFile === '.' || $currentFile === '..') continue;
    $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions))
        continue;
    $fileWithoutExtension = pathinfo($currentFile, PATHINFO_FILENAME);
    $txtFile = __DIR__ . '/images/' . $fileWithoutExtension . '.txt';
    if (file_exists($txtFile)) {
        $txt = file_get_contents($txtFile);
//        var_dump($txt);
        $exploded = explode("\n", $txt);
        $title = $exploded[0];
        unset($exploded[0]);
        $content = join("<br>", $exploded);
    }


    $images[] = [
        'image' => $currentFile,
        'title' => $title,
        'content' => $content
    ];
    $title = $content = '';
}
closedir($imageHandle);
?>

<?php //foreach ($images as $image): ?>
<!--    <h2>--><?php //= e($image['title']) ?><!--</h2>-->
<!--    <p>--><?php //= e($image['content']) ?><!--</p>-->
<!--    <img src="images/--><?php //= rawurlencode($image['image']) ?><!--" alt="'">-->
<?php //endforeach; ?>
<?php foreach ($images as $image): ?>
<figure>
    <h2><?= e($image['title']) ?></h2>

    <img src="images/<?= rawurlencode($image['image']) ?>" alt="'">
   <figcaption> <p><?= e($image['content']) ?></p></figcaption>
</figure>
<?php endforeach; ?>
</body>
</html>