<?php
$letters = gen_letters();
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name Explorer</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <h1><a href="index.php"> Name explorer</a></h1>
    <p>Explore and find names</p>
    <nav class="nav">
        <?php foreach ($letters as $character): ?>
            <a href="char.php?<?=http_build_query(['char' => $character]) ?>"><?= e($character) ?></a>
        <?php endforeach; ?>
    </nav>
</header>
<main>