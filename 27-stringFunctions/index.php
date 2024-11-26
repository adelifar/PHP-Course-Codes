<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions</title>
    <link rel="stylesheet" href="../19-form/style.css">
</head>
<body>
<pre><?php
    require_once "inc/function.inc.php";

    $text = 'Hello. This is a full PHP course. I hope you enjoy it. After this course you will be PHP programmer.';
    var_dump($text[0]);
    var_dump(substr($text, 1, 6));
    var_dump(substr($text, 1));

    ?></pre>
<p>
    <strong><?= e($text[0]) ?></strong><?= e(substr($text, 1)) ?>
</p>
<pre><?php
    var_dump(strlen($text)); //تعداد بایت ها می شمارد

    var_dump(str_starts_with($text, "PHP"));
    var_dump(str_ends_with($text, "programmer.")); //case sensitive

    var_dump(strtolower($text));
    var_dump(strtoupper($text));
    var_dump(ucfirst('mehdi adeli'));

    var_dump(trim("   Mehdi Adeli "));
    var_dump(ltrim("   Mehdi Adeli "));
    var_dump(rtrim("   Mehdi Adeli "));
    var_dump(trim('- Mehdi Adeli  .-.-', ".-"));

    var_dump(strpos($text, "PHP"));
    var_dump(strpos($text, "PHP", 23));
    var_dump(strpos($text, "Java", 23));

    var_dump(nl2br("PHP is \n Incredible"));
    ?></pre>
<p><?= nl2br(e("PHP is \n Incredible")) ?></p>

<pre><?php
    var_dump(str_replace('.', '!', $text));
    var_dump(str_replace(['.', '|'], ['!', '--'], $text));
    ?></pre>
<p>
    <?php
    echo str_replace(".", "</p><p>", e($text));
    ?>
</p>
</body>
</html>
