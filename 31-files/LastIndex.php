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
<pre>
    <?php
    $handle = opendir(__DIR__);
    //    var_dump(15);
    //    var_dump($handle);
    //    var_dump(readdir($handle));
    //    var_dump(readdir($handle));
    //    var_dump(readdir($handle));
    //    var_dump(readdir($handle));
    //    var_dump(readdir($handle));
    //    var_dump(readdir($handle));

    //    $currentFile = readdir($handle);
    //    while ($currentFile !== false) {
    //        var_dump($currentFile);
    //        $currentFile=readdir($handle);
    //    }


    //    var_dump($str2=$str='hello');

    $files = [];
    while (($currentFile = readdir($handle)) !== false) {
        var_dump($currentFile);
        if ($currentFile === '.' || $currentFile === '..') continue;
        $files[] = $currentFile;
    }

    closedir($handle);

    $allowedExtensions = [
        'jpg',
        'png',
        'jpeg'
    ];
    $imageHandle = opendir(__DIR__ . '/images');
    $images = [];
    while (($currentFile = readdir($imageHandle)) !== false) {
        if ($currentFile === '.' || $currentFile === '..') continue;
        $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
//        if ($extension!=='jpg' && $extension!=='jpeg' && $extension !=='png')
        if (!in_array($extension, $allowedExtensions))
            continue;
        $images[] = $currentFile;
        var_dump($currentFile);
    }
    closedir($imageHandle);
    ?>
</pre>
<ul>
    <?php foreach ($files as $file): ?>
        <li><?= $file ?></li>
    <?php endforeach; ?>
</ul>

<?php foreach ($images as $image): ?>
    <img src="images/<?= rawurlencode($image) ?>" alt="'">
<?php endforeach; ?>
</body>
</html>