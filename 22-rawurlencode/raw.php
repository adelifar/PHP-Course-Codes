<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$file='image1.jpg'
?>
<img src="image/<?=rawurlencode($file)?>" alt="image 1" style="max-width: 50%"/>
<?=rawurlencode('i mage/myIm age.jpg')?>
</body>
</html>