<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../19-form/style.css">
</head>
<body>
<pre><?php
    function e($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
    }


    $text = 'Hello. This is a full PHP course. I hope you enjoy it. After this course you will be a PHP programmer.';
    $splitted = explode('.', $text);
    ?></pre>
<?php foreach ($splitted as $segment) {
    $eSegment=e($segment);
    echo "<p>$eSegment</p>";
} ?>

<?php
$merged=implode('=-=-=-', $splitted);
echo e($merged);
?>

<ul>
    <li>
     <?php echo implode("</li><li>",explode('.',e($text)))?>



    </li>
</ul>
</body>
</html>