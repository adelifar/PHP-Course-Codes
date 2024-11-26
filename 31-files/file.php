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
    $info=pathinfo('index.php')['extension'];
    var_dump($info);
    var_dump(pathinfo('index.php',PATHINFO_EXTENSION));
    var_dump(pathinfo('index.php',PATHINFO_BASENAME));
    var_dump(pathinfo('mehdiAdeliPhpDeveloper.jpg',PATHINFO_EXTENSION));
    var_dump(file_exists('index.php'));
    var_dump(file_exists('mehdiAdeliPhpDeveloper.jpg'));

    var_dump(file_exists('images'));

    var_dump(is_file('index.php'));
    var_dump(is_file('images'));
    var_dump(is_dir('images'));
    var_dump(is_dir('index.php'));

    var_dump(filesize('index.php')/1024);
    var_dump(filesize(__DIR__.'/images/IMG_0933.jpg')/1024);
    ?>
</pre>
</body>
</html>
