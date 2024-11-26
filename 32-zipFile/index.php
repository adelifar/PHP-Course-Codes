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
    $zip=new ZipArchive(); //class ->object {method}   function{in_array,unset,isset}
    var_dump($zip);
    $zip->open(__DIR__.'/test.zip');
    var_dump($zip);
    var_dump($zip->count());
    $numberOfFiles=$zip->count();
    for ($i=0; $i<$numberOfFiles; $i++) {
        var_dump($zip->getNameIndex($i));
    }
    $fileContent=$zip->getFromName('file1.txt');
    var_dump($fileContent);
    var_dump($zip->getFromName('cities.json'));

    $zip->addFile(__DIR__.'/style.css');
    var_dump($zip->count());
    $zip->close();
    ?>
</pre>
</body>
</html>